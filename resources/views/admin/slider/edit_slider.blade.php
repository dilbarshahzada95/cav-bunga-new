@extends('layouts.admin.master')
@section('title', 'Admin | Dashboard')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
              <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Slider</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Slider</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Slider</h4>
                                 
                                </div><!-- end card header -->
                                      @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <form action="{{url('admin/slider/update',$data->id)}}"  method="POST" enctype="multipart/form-data" >
                                            {{csrf_field()}}
                                           
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">image</label>
                                                 <div class="box">
<div class="js--image-preview">
<img style="width: 254px;" class="upload" src="{{asset('slider_image/'.$data->image)}}">
</div>
<br>
<div class="upload-options">
<label>
<input style="border: none !important;"  type="file" name="image"  class="image-upload" id="imgs"  onchange="validateImage()"  > </label>
<input  type="hidden" name="img_slider"  class="image-upload" value="{{$data->image}}" >
</div>
</div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                          
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>



         

        </div>
        <!-- container-fluid -->
    </div>
@endsection
