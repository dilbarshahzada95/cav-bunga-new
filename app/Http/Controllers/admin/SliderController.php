<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use  DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
use File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.slider', compact('data'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return  redirect()->back()->with('error', $validator->errors());
        } else {
            try {
                if ($request->hasfile('image')) {

                    $image = $request->file('image');
                    $image_name = uniqid() . '.' . $image->extension();
                    $thumbnailFilePath = public_path('/slider_image/thumbnail');
                    $img = Image::make($image->path());
                    $img->resize(150, 150, function ($const) {
                        $const->aspectRatio();
                    })->save($thumbnailFilePath . '/' . $image_name);
                    $ImageFilePath = public_path('/slider_image/');
                    $image->move($ImageFilePath, $image_name);
                }
                $data = new Slider();
                $data->image = $image_name;
                $data->save();

                return redirect()->back()->with('message', 'Slider Added Successfully');
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
        $data = Slider::findOrFail($id);
        return view('admin.slider.edit_slider', compact('data'));
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return  redirect('admin/slider/edit/' . $id)->with('error', $validator->errors());
        } else {
            try {
                $data = Slider::findOrFail($id);
                if ($request->hasfile('image')) {
                    $file_path = public_path('slider_image') . '/' . $data->image;
                    $file_path_thumb = public_path('slider_image/thumbnail') . '/' . $data->image;
                    if (File::exists($file_path)) {
                        File::delete($file_path); //for deleting only file try this

                    }
                    if (File::exists($file_path_thumb)) {
                        File::delete($file_path_thumb); //for deleting only file try this

                    }

                    $image = $request->file('image');
                    $image_name = uniqid() . '.' . $image->extension();
                    $thumbnailFilePath = public_path('/slider_image/thumbnail');
                    $img = Image::make($image->path());
                    $img->resize(150, 150, function ($const) {
                        $const->aspectRatio();
                    })->save($thumbnailFilePath . '/' . $image_name);
                    $ImageFilePath = public_path('/slider_image/');
                    $image->move($ImageFilePath, $image_name);
                    $data->image = $image_name;
                } else {

                    $data->image = $request->img_slider;
                }


                $data->save();

                return redirect('/admin/slider')->with('message', 'Slider Updated Successfully');
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
        $del = Slider::findOrFail($id);
        $file_path = public_path('slider_image') . '/' . $del->image;
        $file_path_thumb = public_path('slider_image/thumbnail') . '/' . $del->image;
        if (File::exists($file_path)) {
            File::delete($file_path); //for deleting only file try this

        }
        if (File::exists($file_path_thumb)) {
            File::delete($file_path_thumb); //for deleting only file try this

        }
        $del->delete();
        return redirect()->back();
    }
}
