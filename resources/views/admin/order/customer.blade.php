@extends('layouts.admin.master')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Customer List</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">

                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">No
                                                </th>
                                                <th class="sort" data-sort="Name">Name</th>
                                                <th class="sort" data-sort="Email">Email</th>
                                                <th class="sort" data-sort="Phone">Phone</th>
                                                <th class="sort" data-sort="Street">Street</th>
                                                <th class="sort" data-sort="Mobile">Mobile</th>
                                                <th class="sort" data-sort="City">City</th>
                                                <th class="sort" data-sort="Pincode">Pincode</th>
                                                <th class="sort" data-sort="Country">Country</th>


                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach($customer_details as $response)
                                                <tr>
                                                    <td>{{@$i +=1}}</td>
                                                    <td>{{$response->name}}</td>
                                                    <td>{{$response->email}}</td>
                                                    <td>{{$response->phone}}</td>
                                                    <td>{{$response->street}}</td>
                                                    <td>{{$response->mob}}</td>
                                                    <td>{{$response->city}}</td>
                                                    <td>{{$response->pincode}}</td>
                                                    <td>{{$response->country}}</td>
                                                @endforeach



                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                            </lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find
                                                any
                                                orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('script')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function chanageStatus(status, id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "order/changeStatus",
                method: "POST",
                data: {
                    status: status,
                    id: id,

                },
                success: function(response) {
                    var abc = JSON.parse(response);

                    if (abc.status == 'success') {

                        swal("Status Updated Successfully!", {
                            icon: "success",
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    } else {
                        return false;
                    }
                }
            });
        }
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@endsection
