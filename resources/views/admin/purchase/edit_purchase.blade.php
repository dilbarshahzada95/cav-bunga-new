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
                                <h4 class="mb-sm-0">Edit Purchase</h4>



                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Edit Purchase</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Purchase</h4>
                                 
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

                                         <form action="{{url('admin/purchase/update',$data->id)}}"  method="POST" enctype="multipart/form-data" >
                                            {{csrf_field()}}
                                        <div class="row gy-4">
                                           
                                          
                                            <!--end col-->
                                            <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Product Name</label>
                                                            <select id="ForminputState"  name="product_id"  class="form-select" data-choices data-choices-sorting="true" >
                                                            @foreach($product as $dat)
                                                            <?php if($dat->product_name !='all') {
                                                            ?>
                                                            <option <?php if($data->product_id==$dat->id){ echo "selected";} ?> value="{{$dat->id}}">
                                                            {{$dat->product_name}}</option>
                                                            <?php } ?>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Supplier</label>
                                                       <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" name="supplier_id" >
                                                                <option selected>Choose...</option>
                                                              @foreach($supplier as $dat)
                                                            <?php if($dat->first_name !='all') {
                                                            ?>
                                                            <option <?php if($data->supplier_id==$dat->id){ echo "selected";} ?> value="{{$dat->id}}">
                                                            {{$dat->first_name}}</option>
                                                            <?php } ?>
                                                            @endforeach
                                                            </select>
                                                </div>
                                            </div>
                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Date</label>
                                                    <input type="date" name="transaction_date" value="{{$data->transaction_date}}" class="form-control" id="labelInput">
                                                </div>
                                            </div>

                                             <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Quantity</label>
                                                    <input type="text" name="qty"  class="form-control" id="labelInput" value="{{$data->qty}}" placeholder="Quantity">
                                                </div>
                                            </div>

                                               <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Purchase Price</label>
                                                    <input type="text" name="purchase_price" class="form-control" value="{{$data->purchase_price}}" id="labelInput" placeholder="Purchase Price">
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

        </div>
        <!-- container-fluid -->
    </div>
@endsection
