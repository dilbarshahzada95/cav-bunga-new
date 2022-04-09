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
                        <h4 class="mb-sm-0">Add Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Product</h4>

                        </div><!-- end card header -->
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                            role="tab">
                                            General Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata"
                                            role="tab">
                                            Advanced
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card header -->
                            <form action="{{ url('admin/product/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">Product
                                                        Name</label>
                                                    <input type="text" name="product_name"
                                                        value="{{ old('product_name') }}" class="form-control"
                                                        id="manufacturer-name-input" placeholder="Product Name"
                                                        autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">product
                                                        category</label>
                                                    <select id="ForminputState" name="product_category_id"
                                                        value="{{ old('product_category_id') }}" class="form-select"
                                                        data-choices data-choices-sorting="true">
                                                        <option value="">Choose...</option>
                                                        @foreach ($category as $cat)
                                                            <option value="{{ $cat->id }}">
                                                                {{ $cat->sub_category_name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Slogan</label>
                                                    <input type="text" name="slogan" value="{{ old('slogan') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="Slogan" autocomplete="off">
                                                </div>


                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">sku</label>
                                                    <input type="text" name="sku" value="{{ old('sku') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="sku" autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">Tags</label>
                                                    <input type="text" name="tags" value="{{ old('tags') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="Tags" autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Volume</label>
                                                    <input type="number" name="volume" value="{{ old('volume') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="Volume" autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Weight</label>
                                                    <input type="number" name="wieght" value="{{ old('wieght') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="wieght" autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">layout</label>
                                                    <select id="ForminputState" name="layout_id"
                                                        value="{{ old('layout_id') }}" class="form-select"
                                                        data-choices data-choices-sorting="true">
                                                        <option value="">Choose...</option>
                                                        @foreach ($layout as $lay)
                                                            <option value="{{ $lay->id }}">
                                                                {{ $lay->layout_name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="meta-description-input">Product
                                                        Description</label>
                                                    <textarea name="product_description" value="{{ old('product_description') }}" class="form-control"
                                                        id="meta-description-input" placeholder="Product Description"
                                                        rows="4" autocomplete="off"></textarea>
                                                </div>


                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Price</label>
                                                    <input type="number" name="price" value="{{ old('price') }}"
                                                        class="form-control" id="manufacturer-name-input"
                                                        placeholder="Price" autocomplete="off">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">Product
                                                        gallery</label>
                                                    <input type="file" name="product_gallery[]"
                                                        value="{{ old('product_gallery') }}" class="form-control"
                                                        id="manufacturer-name-input" placeholder="Image" multiple>
                                                </div>

                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                            <div class="row">
                                                <div class="card-body">
                                                    <label for="SelectImage">featured product data</label>
                                                    <div class="row" x-data="handler()">
                                                        <table class="table table-bordered table-striped"
                                                            id="vehicle_table">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Title</th>
                                                                    <th>Description</th>
                                                                    <th>Image</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan="8" class="text-right"><button
                                                                            type="button" class="btn btn-info"
                                                                            onclick="addNewField(1)"><i
                                                                                class="las la-plus"></i> Add
                                                                            Data</button>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                </div>




                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-12 pull-right">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                            </form>
                            <!-- end tab content -->
                        </div>

                        <!-- end card body -->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>




    </div>
    <!-- container-fluid -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/product.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
@endsection
