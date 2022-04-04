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
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                           
                                          
                                            <!--end col-->
                                            <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Parent Category</label>
                                                            <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" >
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Category Name</label>
                                                    <input type="text" class="form-control" id="placeholderInput"
                                                        placeholder="Category Name">
                                                </div>
                                            </div>
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Image</label>
                                                    <input type="file" class="form-control" id="labelInput">
                                                </div>
                                            </div>

                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="Title">
                                                </div>
                                            </div>

                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Description
                                                        </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea5" placeholder="Description"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>

                                             <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Layout</label>
                                                            <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" >
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                              

                                             <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                          
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