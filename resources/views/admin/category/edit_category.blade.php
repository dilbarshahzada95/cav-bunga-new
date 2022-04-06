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
                        <h4 class="mb-sm-0">Edit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Category</h4>

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
                                <div class="row gy-4 col-md-12">

                                    <form action="{{ url('admin/category/update', $data->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <!--end col-->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Parent
                                                        Category</label>
                                                    <select id="ForminputState" name="parent_category_id"
                                                        class="form-select" data-choices data-choices-sorting="true">
                                                        @foreach ($parent_category as $dat)
                                                            <?php if($dat->category_name !='all') {
                                                                        ?>
                                                            <option <?php if ($data->parent_category_id == $dat->id) {
    echo 'selected';
} ?> value="{{ $dat->id }}">
                                                                {{ $dat->category_name }}</option>
                                                            <?php } ?>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Category
                                                        Name</label>
                                                    <input type="text" name="sub_category_name"
                                                        value="{{ $data->sub_category_name }}" class="form-control"
                                                        id="placeholderInput" placeholder="Category Name">
                                                </div>
                                            </div>



                                            <div class=" col-md-3">
                                                <div>
                                                    <label for="labelInput" class="form-label">Title</label>
                                                    <input type="text" name="sub_category_title"
                                                        value="{{ $data->sub_category_title }}" class="form-control"
                                                        id="labelInput" placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Layout</label>
                                                    <select id="ForminputState" name="layout_id" class="form-select"
                                                        data-choices data-choices-sorting="true">
                                                        @foreach ($layout as $dat)
                                                            <?php if($dat->layout_name !='all') {
                                            ?>
                                                            <option <?php if ($data->layout_id == $dat->id) {
    echo 'selected';
} ?> value="{{ $dat->id }}">
                                                                {{ $dat->layout_name }}</option>
                                                            <?php } ?>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div>
                                                    <label for="exampleFormControlTextarea5"
                                                        class="form-label">Description
                                                    </label>
                                                    <textarea class="form-control" name="sub_category_description" id="exampleFormControlTextarea5"
                                                        placeholder="Description"
                                                        rows="3">{{ $data->sub_category_description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <label for="labelInput" class="form-label">Image</label>
                                                    <div class="js--image-preview">
                                                        <img style="width: 254px;" class="upload"
                                                            src="{{ asset('/category_image/' . $data->sub_category_image) }}">
                                                    </div>
                                                    <br>
                                                    <div class="upload-options">
                                                        <label>
                                                            <input style="border: none !important;" type="file"
                                                                name="sub_category_image" class="image-upload" id="imgs"
                                                                onchange="validateImage()"> </label>
                                                        <input type="hidden" name="img_cat" class="image-upload"
                                                            value="{{ $data->sub_category_image }}">
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
