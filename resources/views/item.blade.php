@extends('layouts.app')

@section('content')
    <div style="margin: 25px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 text-center"><img src="/storage/images/{{$pack->image}}" style="width: 100%;height: auto;"><button class="btn btn-outline-success my-3" type="button"><i class="fa fa-cart-plus"></i>&nbsp;Add to cart</button></div>
                <div class="col">
                    <div>
                        <h3 class="text-left" style="display:inline !important">{{$pack->name}}</h3>
                        <h5 style="display: inline;float:right">${{number_format($pack->price, 2)}} USD</h5>
                    </div>
                    <div><span class="text-muted" style="position:relative;top:-8px;display:inline">@if($pack->type === 0) Digital File @elseif($pack->type === 1) Physical Item @elseif($pack->type === 2) Service @else @endif</span><span class="text-muted" style="position:relative;top:-8px;display:inline;float:right;">@if($pack->category_id)(category) @endif</span></div>
                    <hr>
{{--                    TODO: Put category :)--}}
                    <p>{{$pack->desc}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
