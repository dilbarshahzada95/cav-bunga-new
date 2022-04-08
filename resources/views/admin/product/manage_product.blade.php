@extends('layouts.admin.master')
@section('title', 'Admin | Dashboard')
@section('content')

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
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
                              <div class="table-responsive table-card mt-3 mb-1">
      <table id="myTable">
      <thead>
        <tr>
          <th scope="col">SL.NO </th>
          <th scope="col">TITLE </th>
          <th scope="col">DESCRIPTION</th>
          <th scope="col">PRIORITY</th>
          <th scope="col">DELETE</th>
          <th scope="col">EDIT</th>
          </tr>
      </thead>
      <tbody>
   
         
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>
       
        </tbody>
    </table>
                                    
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
    </script>

@endsection
