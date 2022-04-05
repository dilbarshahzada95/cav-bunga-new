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
                                <h4 class="mb-sm-0">Add Category</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Add Category</li>
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
                                         <form  action="{{url('/admin/category/insert')}}" method="POST" enctype="multipart/form-data">
                                           
                                          {{csrf_field()}}
                                        <div class="row gy-4">
                                           
                                            <!--end col-->
                                            <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Parent Category</label>
                                                            <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" name="parent_category_id" >
                                                                <option selected>Choose...</option>
                                                             @foreach ($parent_category as $data)
                                                            <option value="{{$data->id}}">
                                                            {{$data->category_name}}
                                                            </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Category Name</label>
                                                    <input type="text" name="sub_category_name" class="form-control" id="placeholderInput"
                                                        placeholder="Category Name">
                                                </div>
                                            </div>
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Image</label>
                                                    <input type="file" name="sub_category_image" class="form-control" id="labelInput">
                                                </div>
                                            </div>

                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Title</label>
                                                    <input type="text" name="sub_category_title" class="form-control" id="labelInput" placeholder="Title">
                                                </div>
                                            </div>

                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleFormControlTextarea5" class="form-label">Description
                                                        </label>
                                                    <textarea class="form-control" name="sub_category_description" id="exampleFormControlTextarea5" placeholder="Description"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>

                                              <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Layout</label>
                                                            <select id="ForminputState" name="layout_id" class="form-select" data-choices data-choices-sorting="true" >
                                                           <option selected>Choose...</option>
                                                            @foreach ($layout as $data)
                                                            <option value="{{$data->id}}">
                                                            {{$data->layout_name}}
                                                            </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                              

                                             <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                        
                                      </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>



                 <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Category Listing</h4>
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
                                                                    <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck">
                                                                    <label class="form-check-label" for="responsivetableCheck"></label>
                                                                </div>
                                                            </th>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Parent Category</th>
                                                            <th scope="col">Category Name</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Layout</th>
                                                            <th scope="col">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $new)
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck01">
                                                                    <label class="form-check-label" for="responsivetableCheck01"></label>
                                                                </div>
                                                            </th>
                                                            <td><a href="#" class="fw-medium">{{@$i +=1}}</a></td>
                                                            <td>{{$new->parent_category_id}}</td>
                                                            <td>{{$new->sub_category_name}}</td>
                                                            <td><img src="{{asset('/category_image/'.$new->sub_category_image)}}" height="50px"></td>
                                                            <td>{{$new->sub_category_title}}</td>
                                                            <td>{{$new->sub_category_description}}</td>
                                                            <td>{{$new->layout_id}}</td>
                                                                                                       <td>
             <a href="" class="productDelete"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            
             <a href=""><i class="fa fa-edit"></i></a>
             </td>
                                                        </tr>
                                                     
                                                        @endforeach
                                                    </tbody>
                                                  
                                                </table>
                                                <!-- end table -->
                                            </div>
                                            <!-- end table responsive -->
                                        </div>

                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
