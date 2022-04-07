<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductFeatured;
use DB;
use Intervention\Image\Facades\Image;
use File;
use Session;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layout = DB::table('layouts')
            ->select('layouts.*')
            ->get();
        $category = Category::all();
        return view('admin.product.add_product', compact('layout', 'category'));
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
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_category_id' => 'required',
            'slogan' => 'required',
            'tags' => 'required',
            'volume' => 'required',
            'wieght' => 'required',
            'layout_id' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'product_gallery' => 'required',


        ]);
        if ($validator->fails()) {
            return redirect('admin/product')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $data = $request->all();
                $featured = array();
                $featured = $request->featured;
                if (empty($featured)) {
                    return redirect('admin/product')->with('error', 'Please select featured ');
                }
                if ($request->hasfile('product_gallery')) {
                    foreach ($request->file('product_gallery') as $image) {

                        $image_name = uniqid() . '.' . $image->extension();
                        $thumbnailFilePath = public_path('/product_image/thumbnail');
                        $img = Image::make($image->path());
                        $img->resize(150, 150, function ($const) {
                            $const->aspectRatio();
                        })->save($thumbnailFilePath . '/' . $image_name);
                        $ImageFilePath = public_path('/product_image/');
                        $image->move($ImageFilePath, $image_name);
                        $images[] = $image_name;
                    }
                }
                $data['product_gallery'] = json_encode($images);
                $insert = Product::create($data);
                if ($insert && !empty($featured)) {
                    foreach ($featured as $key => $value) {
                        $featured_data = array();
                        $featured_data['product_id'] = $insert->id;
                        $featured_data['title'] = $value['title'];
                        $featured_data['description'] = $value['description'];
                        if ($request->hasfile('image')) {

                            $image = $request->file('image');
                            $image_name = uniqid() . '.' . $image->extension();
                            $thumbnailFilePath = public_path('/featured_product_image/thumbnail');
                            $img = Image::make($image->path());
                            $img->resize(150, 150, function ($const) {
                                $const->aspectRatio();
                            })->save($thumbnailFilePath . '/' . $image_name);
                            $ImageFilePath = public_path('/featured_product_image/');
                            $image->move($ImageFilePath, $image_name);
                        }
                        $featured_data['image'] = $image_name;
                        ProductFeatured::create($featured_data);
                    }
                }


                return redirect()->back()->with('message', 'product Added Successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
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
