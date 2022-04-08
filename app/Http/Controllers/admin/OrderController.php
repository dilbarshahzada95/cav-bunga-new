<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CustomerDetails;
use App\Models\Product;
use DB;
use App\Models\OrderHistory;
use App\Models\OrderStatusHistory;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $order = Order::with(['CustomerDetails', 'OrderDetails', 'orderDetails.productlist'])->where('order_status_id', '!=', 6)->get();
        $order_status = DB::table('order_status')->get();
        return view('admin.order.order', compact('order', 'order_status'));
    }

    function changeStatus(Request $request)
    {
        $order = Order::where('transaction_id', '=', $request->id)->first();
        $order->order_status_id = $request->status;
        $order->save();

        OrderStatusHistory::create([
            'order_id' => $request->id,
            'order_status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


        if ($request->status == 6) {
            OrderHistory::create($order->toArray());
        }
        return json_encode(['status' => 'success']);
    }
    function delieveryDate(Request $request)
    {
        $order = Order::where('transaction_id', '=', $request->id)->first();
        $order->delievery_date = $request->date;
        $order->save();
        return json_encode(['status' => 'success']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderHistory()
    {
        $order = Order::with(['CustomerDetails', 'OrderDetails', 'orderDetails.productlist'])->where('order_status_id', '=', 6)->get();
        return view('admin.order.order_history', compact('order'));
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
