<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\CustomerDetails;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\OrderHistory;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFeatured;
use App\Models\CartItem;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        $category = Category::all();
        return view('web.index', compact('slider', 'category'));
    }
    function about_us()
    {
        return view('web.about_us');
    }
    function design()
    {
        return view('web.design');
    }
    function designer()
    {
        return view('web.designer');
    }
    function terms_and_condition()
    {
        return view('web.terms_and_condition');
    }
    function profile()
    {
        $profile = User::with(['customer_details'])->where('id', Auth::user()->id)->first();
        $Order = Order::with(['CustomerDetails', 'OrderDetails', 'orderDetails.productlist'])
            ->where('order.customer_id', Auth::user()->id)->where('order.order_status_id', '!=', 6)->get();

        $orderHistory = OrderHistory::with(['OrderDetails', 'orderDetails.productlist'])->where('customer_id', Auth::user()->id)->get();
        return view('web.profile', compact('profile', 'Order', 'orderHistory'));
    }
    function getCustomerData($id)
    {
        $customer = User::with(['customer_details'])->where('id', $id)->first();
        return response()->json($customer);
    }
    function register()
    {
        return view('web.register');
    }
    function loginUser()
    {
        return view('web.login');
    }
    function cart()
    {
        if (!empty(Auth::user()->id)) {
            $customer_id = Auth::user()->id;
        } else {
            $customer_id = 0;
        }
        $cart = CartItem::select('cart_items.*', 'product.id as prod_id', 'product.product_name', 'product.product_gallery', 'sub_category.*')->leftjoin('product', 'product.id', '=', 'cart_items.product_id')
            ->leftjoin('sub_category', 'sub_category.id', '=', 'product.product_category_id')
            ->where('customer_id', $customer_id)->where('is_order', 0)->get();
        $item_count = CartItem::where('customer_id', $customer_id)->count();
        $shipping_type = DB::table('shipping_type')->get();
        return view('web.cart', compact('cart', 'item_count', 'shipping_type'));
    }
    function detailsPage($id)
    {
        $data = Product::findOrFail($id);
        $product_image = json_decode($data->product_gallery);
        $featured_product = ProductFeatured::where('product_id', $id)->get();

        return view('web.details_page', compact('data', 'featured_product', 'product_image'));
    }
    function affliated_programs()
    {
        return view('web.affliated_programs');
    }
    function order_tracking()
    {
        return view('web.order_tracking');
    }
    function shoping()
    {
        $main_category = DB::table('main_category')->get();
        $men_category = Category::where('parent_category_id', '=', 1)->get();
        $woman_category = Category::where('parent_category_id', '=', 2)->get();
        return view('web.shoping', compact('main_category', 'men_category', 'woman_category'));
    }
    function wallet($id)
    {
        if ($id == 0) {
            return redirect()->back();
        }
        $category = Category::find($id);
        $variation = DB::table('variation')->select('*')->get();
        $collection = DB::table('collection')->select('*')->get();
        $product = Product::where('product_category_id', $id)->get();

        return view('web.wallet', compact('category', 'variation', 'collection', 'product'));
    }
    function walletfilter(Request $request)
    {
        $getFilterData = Product::where('id', '!=', 0);
        if (!empty($request->popularity)) {
            if ($request->popularity == 'whats_new') {
                $getFilterData->orderBy('id', 'desc');
            }
            if ($request->popularity == 'relevence') {
                # code...
            }
        }
        if (!empty($request->variation)) {
            $getFilterData->where('variation_id', $request->variation);
        }
        if (!empty($request->collection)) {
            $getFilterData->where('collection_id', $request->collection);
        }
        if (!empty($request->price)) {
            if ($request->price == 'high_to_low') {
                $getFilterData->orderBy('price', 'desc');
            } else {
                $getFilterData->orderBy('price', 'asc');
            }
        }
        $getFilterData = $getFilterData->get();
        $html = '';
        foreach ($getFilterData as $key => $prod) {
            $product_name = isset($prod->product_name) ? $prod->product_name : '';
            $price = isset($prod->price) ? $prod->price : '';
            $image = json_decode($prod->product_gallery);
            $product_id = isset($prod->id) ? $prod->id : '';
            $product_image = '';
            if (isset($image)) {
                if (!empty($image[0])) {
                    $product_image = " <img src='" . asset('product_image/' . $image[0]) . "' class='img-fluid' alt=''>";
                }
            }
            $html .= " <div class='col-md-4'>
                                    <div class='single__product first'>
                                        <div class='wallet__section'>
                                            <div class='imagage__sec'>

                                                     " . $product_image . "
                                     </div>
                                        </div>
                                        <div class='product__content'>
                                            <div class='product__description'>
                                                <h3>" . $product_name . "</h3>
                                                <h5>luxury leather wallet</h5>
                                                <h4>AED " . $price . "</h4>
                                            </div>
                                            <div class='more__info'>
                                                <a href='" . url('details-page/' . $prod->id) . "'
                                                    class='btn-info'>more
                                                    info</a>
                                                <a href='#' class='cart-btn' onclick='add_to_cart(" . $product_id . "," . $price . ",1)'>
                                                    <img src='" . asset('web/assets/img/icons/wallet-cart.png') . "'
                                                        alt=''>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>";
        }

        return $html;
    }
    function sideCart()
    {
        return view('web.sideCart');
    }
    function responsiblites()
    {
        return view('web.responsiblites');
    }
    function partners()
    {
        return view('web.partners');
    }
    function category_image($id)
    {
        $category = Category::find($id);
        $category_image = $category->sub_category_image;
        $html = '';
        $html = '  <img src="' . asset('category_image/' . $category_image) . '" class="img-fluid men_cat_img" alt="">';

        return $html;
    }
    function add_to_cart(Request $request)
    {
        $customer_id = '';
        if (!empty(Auth::user()->id)) {
            $customer_id = Auth::user()->id;
        }

        if (empty($customer_id)) {
            return json_encode(['status' => 'error', 'message' => 'Please Login First']);
        } else {
            $total = 0;
            $data = $request->all();
            $product_id = $data['product_id'];
            $qty = $data['qty'];
            $price = $data['price'];
            $data['customer_id'] = $customer_id;
            $check_poduct_exist = CartItem::where('product_id', $product_id)->where('customer_id', $customer_id)->first();
            if (!empty($check_poduct_exist)) {
                $new_qty = $qty;
                $update_qty = CartItem::where('product_id', $product_id)->where('customer_id', $customer_id)->update(['qty' => $new_qty]);
            } else {
                $insert_to_cart = CartItem::create($data);
            }
            return json_encode(['status' => 'success', 'message' => 'Product Added to Cart']);
        }
    }

    function getCart()
    {
        $customer_id = '';
        if (!empty(Auth::user()->id)) {
            $customer_id = Auth::user()->id;
        }
        $cart_items = CartItem::where('customer_id', $customer_id)->where('is_order', 0)->get();
        $total = 0;
        $html = '';
        $cart_count = 0;
        $final_total = 0;
        $cart_count = CartItem::where('customer_id', $customer_id)->count();
        foreach ($cart_items as $key => $cart_item) {
            $product = Product::find($cart_item->product_id);
            $category = Category::find($product->product_category_id);
            $product_name = isset($product->product_name) ? $product->product_name : '';
            $price = isset($product->price) ? $product->price : '';
            $image = json_decode($product->product_gallery);
            $product_image = '';
            if (isset($image)) {
                if (!empty($image[0])) {
                    $product_image = " <img src='" . asset('product_image/thumbnail/' . $image[0]) . "'  alt=''>";
                }
            }
            $total = ($price * $cart_item->qty);
            $final_total += $total;
            $html .= "          <div class='product-cart-item'>
              <div class='product-img'>
                               " . $product_image . "
                            </div>
                            <div class='product-info'>
                                <h4 class='title'><a href='#'>" . $product->product_name . "</a></h4>
                                <span class='info'>" . $category->sub_category_name . "</span>
                            </div>
                            <div class='product-quantity'>
                                <div class='pro-qty'>
                                    <input type='text' id='quantity' title='Quantity' value='" . $cart_item->qty . "' />
                                </div>
                            </div>
                            <div class='product-price'>
                                <h4>AED " . $total . "</h4>
                            </div>

                        </div>
                        <hr>
                        </div>";
        }
        return json_encode(['html' => $html, 'cart_count' => $cart_count, 'final_total' => $final_total]);
    }

    function removeCartitems($id)
    {
        $customer_id = '';
        if (!empty(Auth::user()->id)) {
            $customer_id = Auth::user()->id;
        }
        $cart_items = CartItem::where('customer_id', $customer_id)->where('product_id', $id)->delete();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
