@extends('layouts.admin')

@section('title')
    Cardpile - Market Settings
@endsection

@section('head')
    <style>
        /* The switch - the box around the slider */
        .switch {
            top: 2px;
            position: relative;
            display: inline-block;
            width: 30px;
            height: 18px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(12px);
            -ms-transform: translateX(12px);
            transform: translateX(12px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Settings</h3>
        @include('inc.messages')
        <div role="tablist" id="accordion-1">
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1"
                                        href="#accordion-1 .item-1">Notifications</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse show item-1">
                    <div class="card-body">
                        <div class="col">
                            <h6 style="display: inline-block;font-size: 18px">Market System</h6>
                            <label class="switch mb-3" style="display: inline-block">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="width: 70%;">Alerts</th>
                                        <th style="width: 30%;">
                                            <button class="btn btn-outline-primary btn-sm float-right" type="button"
                                                    data-toggle="modal" data-target="#createAlertModal">
                                                <i class="fa fa-plus-square-o"></i></button>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div role="group" class="btn-group float-right">
                                                <button class="btn btn-outline-primary" type="button"><i
                                                        class="fa fa-cogs"></i></button>
                                                <button class="btn btn-outline-warning" type="button"><i
                                                        class="fa fa-eye"></i></button>
                                                <button class="btn btn-outline-danger" type="button"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2"
                                        href="#accordion-1 .item-2">Categories</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-2">
                    <div class="card-body">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                            dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                            metus.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3"
                                        href="#accordion-1 .item-3">Gateways</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-3">
                    <div class="card-body">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                            dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                            metus.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4"
                                        href="#accordion-1 .item-4">Legal</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-4">
                    <div class="card-body">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                            dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                            metus.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5"
                                        href="#accordion-1 .item-5">Taxes</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-5">
                    <div class="card-body">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                            dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                            metus.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-success mt-3" type="button"><i class="fa fa-floppy-o"></i> Save</button>
    </div>

    {{--  Modals  --}}
    <div class="modal fade" id="createAlertModal" tabindex="-1" role="dialog" aria-labelledby="createAlertModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createAlertModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
