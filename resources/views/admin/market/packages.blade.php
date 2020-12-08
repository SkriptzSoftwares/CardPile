@extends('layouts.admin')

@section('title')
    Cardpile - Packages
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Packages</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <a class="btn btn-primary float-right btn-sm" role="button"><i class="far fa-plus-square"></i> Create Package</a>
                <p class="text-primary m-0 mt-1 font-weight-bold">Packages List</p>
            </div>
            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Last 30 days</th>
                            <th>Sales</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>T-Shirt</td>
                            <td>Holiday Merch</td>
                            <td>45$</td>
                            <td>450$</td>
                            <td>4500$</td>
                            <td><a class="btn btn-sm btn-primary mr-1" role="button"><i class="fas fa-file-alt"></i></a> <a class="btn btn-sm btn-warning mr-1" role="button"><i class="fas fa-cogs"></i></a> <a class="btn btn-sm btn-danger mr-1" role="button"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Last 30 days</th>
                            <th>Sales</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
