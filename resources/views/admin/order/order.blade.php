
@extends('layouts.admin.master')
@section('title', 'Admin | Dashboard')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Manage Orders</h4>
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
                                                            <th class="sort" data-sort="customer_name">Date</th>
                                                            <th class="sort" data-sort="email">Order Id</th>
                                                            <th class="sort" data-sort="phone">Order Status</th>
                                                            <th class="sort" data-sort="date"> Customer Name</th>
                                                            <th class="sort" data-sort="status">Contact No</th>
                                                            <th class="sort" data-sort="status">Customer Type</th>
                                                            <th class="sort" data-sort="status">Products</th>
                                                            <th class="sort" data-sort="status">Sale Amount</th>
                                                            <th class="sort" data-sort="status">Sale Type</th>
                                                            <th class="sort" data-sort="status">Status</th>
                                                            <th class="sort" data-sort="action">Action</th>
                                                            </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                        <tr>
                                                            <td>1</td>
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                            <td class="customer_name">Mary Cousar</td>
                                                            <td class="email">marycousar@velzon.com</td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td class="date">06 Apr, 2021</td>
                                                            <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td class="phone">580-464-4694</td>
                                                            <td>
                                                                <div class="d-flex gap-2">
                                                                    <div class="edit">
                                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                                        data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                              
                                            
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                        </lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
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