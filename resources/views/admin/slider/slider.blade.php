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
                                            <form  action="{{url('/admin/slider/insert')}}" method="POST" enctype="multipart/form-data">
                                           
                                          {{csrf_field()}}
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">image</label>
                                                    <input type="file" name="image" class="form-control" id="placeholderInput"
                                                        placeholder="Placeholder">
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



                 <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Slider Listing</h4>
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
                                                            <th scope="col">image</th>
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

                                                            <td>
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="{{asset('/slider_image/'.$new->image)}}" height="50px">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </td>

                                                              <td>
             <a href="{{route('admin/slider/delete',$new->id)}}" class="productDelete"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            
             <a href="{{url('/admin/slider/edit',$new->id)}}"><i class="fa fa-edit"></i></a>
             </td>

                                @endforeach
                                                    
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
                        </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
