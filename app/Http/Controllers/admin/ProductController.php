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
use App\Models\Stock;

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
        $collection = DB::table('collection')
            ->select('collection.*')
            ->get();  
        $variation = DB::table('variation')
            ->select('variation.*')
            ->get();      
        $category = Category::all();
        return view('admin.product.add_product', compact('layout', 'category','collection','variation'));
    }

    public function fetchproduct()
    {
        $data = Product::with(['category', 'stock'])->get();
        // print_r($data);
        // die;
        return view('admin.product.manage_product', compact('data'));
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
                // $data['tags'] = implode(',', $data['tags']);
                $data['product_gallery'] = json_encode($images);
                $insert = Product::create($data);
                if ($insert && !empty($featured)) {

                    foreach ($featured as $key => $value) {
                        $featured_data = array();
                        $featured_data['product_id'] = $insert->id;
                        $featured_data['title'] = $value['title'];
                        $featured_data['description'] = $value['description'];

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

          $collection = DB::table('collection')
            ->select('collection.*')
            ->get();  
        $variation = DB::table('variation')
            ->select('variation.*')
            ->get();      
        $category = Category::all();
        $product = Product::find($id);
        $product_images = json_decode($product->product_gallery, true, 4);

        $featured = ProductFeatured::where('product_id', $id)->get();
        return view('admin.product.edit_product', compact('layout', 'category', 'product', 'featured', 'product_images','collection','variation'));
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
                foreach (json_decode($update['product_gallery'], true, 4) as $old_img) {
                    $images[] = $old_img;
                }


                $data['product_gallery'] = json_encode($images);
                $insert  = $update->fill($data)->save();
                if ($insert && !empty($featured)) {

                    foreach ($featured as $key => $value) {
                        if (isset($value['row_id'])) {
                            if (isset($value['image'])) {
                                $file_path = public_path('featured_product_image') . '/' . $value['hidden_image'];
                                $file_path_thumb = public_path('featured_product_image/thumbnail') . '/' . $value['hidden_image'];
                                if (File::exists($file_path)) {
                                    File::delete($file_path); //for deleting only file try this

                                }
                                if (File::exists($file_path_thumb)) {
                                    File::delete($file_path_thumb); //for deleting only file try this

                                }
                                $image = $value['image'];
                                $image_name = uniqid() . '.' . $image->extension();
                                $thumbnailFilePath = public_path('/featured_product_image/thumbnail');
                                $img = Image::make($image->path());
                                $img->resize(150, 150, function ($const) {
                                    $const->aspectRatio();
                                })->save($thumbnailFilePath . '/' . $image_name);
                                $ImageFilePath = public_path('/featured_product_image/');
                                $image->move($ImageFilePath, $image_name);
                                $up_images = $image_name;
                            } else {
                                $up_images = $value['hidden_image'];
                            }
                            $check_row_id = ProductFeatured::findOrfail($value['row_id']);
                            $check_row_id_data = array(
                                'product_id' => $id,
                                'title' => $value['title'],
                                'description' => $value['description'],
                                'image' => $up_images
                            );
                            $check_row_id->fill($check_row_id_data)->save();
                        } else {
                            $featured_data = array();
                            $featured_data['product_id'] = $id;
                            $featured_data['title'] = $value['title'];
                            $featured_data['description'] = $value['description'];

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
        $delete = ProductFeatured::where('product_id', $id);
        if ($delete && !empty($delete->image)) {
            $file_path = public_path('featured_product_image') . '/' . $delete->image;
            $file_path_thumb = public_path('featured_product_image/thumbnail') . '/' . $delete->image;
            if (File::exists($file_path)) {
                File::delete($file_path); //for deleting only file try this

            }
            if (File::exists($file_path_thumb)) {
                File::delete($file_path_thumb); //for deleting only file try this

            }
        }

        $delete->delete();

        $delete1 = Product::find($id);
        if (!empty($delete1->product_gallery)) {
            $image = json_decode($delete1->product_gallery, true, 4);
        }

        if (!empty($image)) {
            foreach ($image as $key => $value) {
                $file_path = public_path('product_image') . '/' . $value;
                $file_path_thumb = public_path('product_image/thumbnail') . '/' . $value;
                if (File::exists($file_path)) {
                    File::delete($file_path); //for deleting only file try this

                }
                if (File::exists($file_path_thumb)) {
                    File::delete($file_path_thumb); //for deleting only file try this

                }
            }
        }


        $delete1->delete();
        $delete_from_stock = Stock::where('product_id', $id)->delete();
        return redirect()->back()->with('message', ' Product Deleted Successfully');
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
    function delete_product_image($id, $image_id)
    {
        $images = '';
        $delete = Product::find($id);
        $image = json_decode($delete->product_gallery, true, 4);
        $file_path = public_path('product_image') . '/' .  $image[$image_id];
        $file_path_thumb = public_path('product_image/thumbnail') . '/' .  $image[$image_id];
        if (File::exists($file_path)) {
            File::delete($file_path); //for deleting only file try this

        }
        if (File::exists($file_path_thumb)) {
            File::delete($file_path_thumb); //for deleting only file try this

        }
        unset($image[$image_id]);
        if (!empty($image)) {
            foreach ($image as $old_img) {
                $images[] = $old_img;
            }
        } else {
            $images = '';
        }

        $delete['product_gallery'] = json_encode($images);
        $delete->save();

        return redirect()->back()->with('message', 'Product Image Deleted Successfully');
    }
}
