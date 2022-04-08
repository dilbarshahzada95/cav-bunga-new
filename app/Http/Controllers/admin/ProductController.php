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
use Illuminate\http\UploadedFile;

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

    public function fetchproduct()
    {
        return view('admin.product.manage_product');
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
                // print_r($featured);
                // die;

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
                        print_r($value['image']);
                        if ($value['image']) {

                            $image = $value['image'];
                            $image_name = uniqid() . '.' . $image->extension();
                            $thumbnailFilePath = public_path('/featured_product_image/thumbnail');
                            $img = Image::make($image->path());
                            $img->resize(150, 150, function ($const) {
                                $const->aspectRatio();
                            })->save($thumbnailFilePath . '/' . $image_name);
                            $ImageFilePath = public_path('/featured_product_image/');
                            $image->move($ImageFilePath, $image_name);
                        }

                        $featured_data['image'] =  $image_name;
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
        $layout = DB::table('layouts')
            ->select('layouts.*')
            ->get();
        $category = Category::all();
        $product = Product::find($id);
        $product_images = json_decode($product->product_gallery, true, 4);

        $featured = ProductFeatured::where('product_id', $id)->get();
        return view('admin.product.edit_product', compact('layout', 'category', 'product', 'featured', 'product_images'));
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
            return redirect('admin/product/edit/' . $id)

                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $data = $request->all();
                $update = Product::find($id);
                $featured = array();
                $featured = $request->featured;

                if (empty($featured)) {
                    return redirect('admin/product/edit/' . $id)->with('error', 'Please select featured ');
                }
                if ($data['product_gallery']) {
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
                } else {
                }

                $data['product_gallery'] = json_encode($images);
                $insert = Product::create($data);
                if ($insert && !empty($featured)) {

                    foreach ($featured as $key => $value) {
                        $featured_data = array();
                        $featured_data['product_id'] = $insert->id;
                        $featured_data['title'] = $value['title'];
                        $featured_data['description'] = $value['description'];
                        print_r($value['image']);
                        if ($value['image']) {

                            $image = $value['image'];
                            $image_name = uniqid() . '.' . $image->extension();
                            $thumbnailFilePath = public_path('/featured_product_image/thumbnail');
                            $img = Image::make($image->path());
                            $img->resize(150, 150, function ($const) {
                                $const->aspectRatio();
                            })->save($thumbnailFilePath . '/' . $image_name);
                            $ImageFilePath = public_path('/featured_product_image/');
                            $image->move($ImageFilePath, $image_name);
                        }

                        $featured_data['image'] =  $image_name;
                        ProductFeatured::create($featured_data);
                    }
                }


                return redirect('admin/product/fetch')->with('message', 'product Updated Successfully');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
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
    function delete_featured($id)
    {
        $delete = ProductFeatured::find($id);
        $file_path = public_path('featured_product_image') . '/' . $delete->image;
        $file_path_thumb = public_path('featured_product_image/thumbnail') . '/' . $delete->image;
        if (File::exists($file_path)) {
            File::delete($file_path); //for deleting only file try this

        }
        if (File::exists($file_path_thumb)) {
            File::delete($file_path_thumb); //for deleting only file try this

        }
        $delete->delete();
    }
}
