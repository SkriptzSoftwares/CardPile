@extends('layouts.admin')

@section('title')
    Cardpile - Packages
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Packages</h3>
        @include('inc.messages')
        <div class="card shadow">
            <div class="card-header py-3">
                <a class="btn btn-primary float-right btn-sm" role="button" href="{{url('/admin/packages/create')}}"><i class="far fa-plus-square"></i> Create
                    Package</a>
                <p class="text-primary m-0 mt-1 font-weight-bold">Packages List</p>
            </div>
            <div class="card-body">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Last 30 days</th>
                            <th>Sales</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $pack)
                            <tr>
                                <td>{{$pack->name}}</td>
                                @if($pack->stock)
                                    <td>{{$pack->stock}}</td>
                                @else
                                    <td>∞</td>
                                @endif
                                <td>{{$pack->price}}</td>
                                <td>450$</td>
                                <td>4500$</td>
                                <td>
                                    <a class="btn btn-sm btn-warning mr-1" href="{{url("admin/packages/" . $pack->id . "/edit")}}" role="button"><i class="fas fa-cogs"></i></a>
                                    <button class="btn btn-sm btn-danger mr-1" type="button" data-toggle="modal"
                                            data-target="#{{$pack->name}}-Modal"><i class="fas fa-trash"></i></button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{$pack->name}}-Modal" tabindex="-1" role="dialog"
                                         aria-labelledby="{{$pack->name}}-ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{$pack->name}}-ModalLabel">Are you
                                                        sure?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Do you really want to delete the package
                                                    <strong>{{$pack->name}}</strong>? This action is NOT reversible!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel
                                                    </button>
                                                    <form action="{{ url('/admin/packages', ['id' => $pack->id]) }}"
                                                          method="post">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        {!! method_field('delete') !!}
                                                        {!! csrf_field() !!}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Last 30 days</th>
                            <th>Sales</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="ml-auto">
                        {{ $packages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
