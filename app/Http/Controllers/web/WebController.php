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
        $category=
        return view('web.index', compact('slider'));
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
        $Order = Order::with(['orderDetails'])
            ->where('order.customer_id', Auth::user()->id)->get();

        $orderHistory = OrderHistory::where('customer_id', Auth::user()->id)->get();
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
    function detailsPage()
    {
        return view('web.details_page');
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
        return view('web.shoping');
    }
    function wallet()
    {
        return view('web.wallet');
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
