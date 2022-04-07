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
                                                    <input type="text" name="product_name" value="{{old('product_name')}}"  class="form-control" id="manufacturer-name-input"
                                                        placeholder="Product Name">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">product
                                                        category</label>
                                                    <select id="ForminputState" name="product_category_id" value="{{old('product_category_id')}}" class="form-select"
                                                        data-choices data-choices-sorting="true">
                                                        <option selected>Choose...</option>
                                                        <option>acdef</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Slogan</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Slogan">
                                                </div>


                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">sku</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="sku">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">Tags</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Tags">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Volume</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Tags">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Weight</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Tags">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">layout</label>
                                                    <select id="ForminputState" name="layout_id" class="form-select"
                                                        data-choices data-choices-sorting="true">
                                                        <option selected>Choose...</option>
                                                        <option>acdef</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label" for="meta-description-input">Product
                                                        Description</label>
                                                    <textarea name="" class="form-control" id="meta-description-input" placeholder="Product Description" rows="4"></textarea>
                                                </div>


                                                <div class="col-md-3">
                                                    <label class="form-label"
                                                        for="manufacturer-name-input">Price</label>
                                                    <input type="text" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Price">
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="form-label" for="manufacturer-name-input">Product
                                                        gallery</label>
                                                    <input type="file" name="" class="form-control" id="manufacturer-name-input"
                                                        placeholder="Image">
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



        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Product Listing</h4>
                        <div class="flex-shrink-0">

                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">

                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 42px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="responsivetableCheck">
                                                    <label class="form-check-label" for="responsivetableCheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Layout</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Parent Category</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="responsivetableCheck01">
                                                    <label class="form-check-label" for="responsivetableCheck01"></label>
                                                </div>
                                            </th>
                                            <td><a href="#" class="fw-medium">#VZ2110</a></td>
                                            <td>10 Oct, 14:47</td>
                                            <td class="text-success"><i
                                                    class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('admin/assets/images/users/avatar-3.jpg') }}"
                                                            alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Jordan Kennedy
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mastering the grid</td>
                                            <td>$9.98</td>
                                            <td>Mastering the grid</td>
                                            <td>
                                                <a href="" class="productDelete"><i
                                                        class="fa fa-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                <a href=""><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end table responsive -->
                        </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/product.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
@endsection
