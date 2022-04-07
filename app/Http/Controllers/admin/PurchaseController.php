<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=DB::table('product')
                         ->select('product.*')
                         ->get();
        $supplier=DB::table('supplier')
                         ->select('supplier.*')
                         ->get();

        $purchase=purchase::select('purchase.*','supplier.first_name','product.product_name')
                          ->leftjoin('product','purchase.product_id','=','product.id')
                          ->leftjoin('supplier','purchase.supplier_id','=','supplier.id')
                          ->get();

        return view('admin.purchase.purchase',compact('product','supplier','purchase'));
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

         $data = new Purchase;
             $data->product_id=$request->product_id;
             $data->supplier_id=$request->supplier_id;
             $data->transaction_date=$request->transaction_date;
             $data->qty=$request->qty;
             $data->purchase_price=$request->purchase_price;
             $data->save();

        $check_atleast_one_exist=DB::table('product_stock_details')->select('id','qty')->where('product_id',$request->product_id)->first();

       if (empty($check_atleast_one_exist)) {
          $insert=  DB::table('product_stock_details')->insert([
                'product_id' => $request->product_id,
                'qty'=>$request->qty
            ]);
       }else{
        $update= DB::table('product_stock_details')->where('product_id',$request->product_id)->update([
                'qty'=>$request->qty+$check_atleast_one_exist->qty
            ]);
       }

             return redirect()->back()->with('message', 'Purchase Added Successfully');

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
        $product=DB::table('product')
                         ->select('product.*')
                         ->get();
        $supplier=DB::table('supplier')
                         ->select('supplier.*')
                         ->get();

        $data=purchase::findOrFail($id);
        return view('admin.purchase.edit_purchase',compact('data','supplier','product'));
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

             $data =Purchase::findOrFail($id);
             $data->product_id=$request->product_id;
             $data->supplier_id=$request->supplier_id;
             $data->transaction_date=$request->transaction_date;
             $data->qty=$request->qty;
             $data->purchase_price=$request->purchase_price;
             $data->save();

        $check_atleast_one_exist=DB::table('product_stock_details')->select('id','qty')->where('product_id',$request->product_id)->first();

       if (empty($check_atleast_one_exist)) {
          $insert=  DB::table('product_stock_details')->insert([
                'product_id' => $request->product_id,
                'qty'=>$request->qty
            ]);
       }else{

        $update= DB::table('product_stock_details')->where('product_id',$request->product_id)->update([
                'qty'=>$request->qty+$check_atleast_one_exist->qty
            ]);
       }

             return redirect('admin/purchase')->with('message', 'Purchase Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $stock_update=0;
         $del=Purchase::findOrFail($id);
     $current_qty=DB::table('product_stock_details')->select('qty')->where('product_id',$del->product_id)->first();

            $stock_update=$current_qty->qty-$del->qty;
    $update= DB::table('product_stock_details')->where('product_id',$del->product_id)->update([
                'qty'=>$stock_update
           ]);
    if ($update) {
      $del->delete();


         return redirect()->back();
    }

    }
}
