@extends('layouts.admin.master')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Manage Product</h4>
                            <div class="flex-shrink-0">

                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <div class="live-preview">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0" id="example">
                                        <thead class="table-light">
                                            <tr>

                                                <th scope="col">ID</th>
                                                <th scope="col">Product name</th>
                                                <th scope="col">Category </th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $dat)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $dat->product_name }}</td>
                                                    <td>{{ isset($dat->category['sub_category_name']) ? $dat->category['sub_category_name'] : '' }}
                                                    </td>
                                                    <td>{{ $dat->price }}</td>
                                                    <td>{{ isset($dat->stock['qty']) ? $dat->stock['qty'] : 0 }}</td>
                                                    <td>
                                                        <a href="{{ route('admin/product/delete', $dat->id) }}"
                                                            class="productDelete"><i
                                                                class="fa fa-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                                        <a href="{{ url('/admin/product/edit', $dat->id) }}"><i
                                                                class="fa fa-edit"></i></a>


                                                </tr>
                                                @php
                                                    $i++;
                                                @endphp
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
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            var manageTable = $('#example').DataTable();

        });
    </script>
@endsection
