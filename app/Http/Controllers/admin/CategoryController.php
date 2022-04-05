<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $parent_category=DB::table('main_category')
                         ->select('main_category.*')
                         ->get();

        $layout=DB::table('layouts')
                         ->select('layouts.*')
                         ->get();

        $result=Category::select('sub_category.*','main_category.category_name','layouts.layout_name')
                          ->leftjoin('main_category','sub_category.parent_category_id','=','main_category.id')
                          ->leftjoin('layouts','sub_category.layout_id','=','layouts.id')
                          ->get();
                          // print_r($data[0]['category_name']);exit();
        return view('admin.category.category',compact('parent_category','layout','result'));
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
             $data = new Category;
             $data->parent_category_id=$request->parent_category_id;
             $data->sub_category_name=$request->sub_category_name;
             $data->layout_id=$request->layout_id;
             if($request->hasfile('sub_category_image'))
        {
            $file=$request->file('sub_category_image');

            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('category_image',$filename);
            $data->sub_category_image=$filename;    
        }
        else{
            return $request;
            $data->$sub_category_image='';
        }
             $data->sub_category_title=$request->sub_category_title;
             $data->sub_category_description=$request->sub_category_description;
             $data->save();
             return redirect()->back()->with('message', 'Category Added Successfully');
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
        $parent_category=DB::table('main_category')
                         ->select('main_category.*')
                         ->get();

        $layout=DB::table('layouts')
                         ->select('layouts.*')
                         ->get();
        $data = Category::findOrFail($id);
        return view('admin.category.edit_category',compact('data','parent_category','layout'));
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
        $data =Category::findOrFail($id);
             $data->parent_category_id=$request->parent_category_id;
             $data->sub_category_name=$request->sub_category_name;
             $data->layout_id=$request->layout_id;
             if($request->hasfile('sub_category_image'))
        {
            $file=$request->file('sub_category_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('category_image',$filename);
            $data->sub_category_image=$filename;    
        }
           else{
            // return $request;
           $data->sub_category_image=$request->img_cat;
        }
            $data->sub_category_title=$request->sub_category_title;
            $data->sub_category_description=$request->sub_category_description;
            $data->save();
            return redirect('/admin/category')->with('message', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $del=Category::findOrFail($id);
         $del->delete();
         return redirect()->back();
    }
}
