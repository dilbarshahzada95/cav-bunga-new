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
        return view('web.cart');
    }
    function detailsPage($id)
    {
        $data = Product::findOrFail($id);
        return view('web.details_page', compact('data'));
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
        $getFilterData = Product::orderBy('id', 'asc');
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
