@extends('layouts.app')

@section('title')
    Cardpile - Shop
@endsection

@section('content')
    <div class="container my-4 py-4" style="background-color: #f2f2f2; border-radius: 10px">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row row-eq-height">

                    @foreach($packs as $pack)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="/storage/images/{{$pack->image}}"
                                                                    style="width: 80%;height: auto;">
                                    <h6 class="mt-1" style="margin-bottom: 0;font-size: 19px;">Item Name</h6><span
                                        class="text-muted" style="font-size: 16px;">Text</span>
                                    <h6 style="margin-top: 5px;">$14.99</h6>
                                    <button class="btn btn-outline-primary btn-sm" type="button"><i
                                            class="fa fa-cart-plus"></i>&nbsp;Add to cart
                                    </button>
                                    <p style="font-size: 14px;margin-bottom: 5px;margin-top: 5px;">Item Description "/public/images/{{$pack->image}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header"><span>Categories</span></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><span>List Group Item 1</span></li>
                            <li class="list-group-item"><span>List Group Item 2</span></li>
                            <li class="list-group-item"><span>List Group Item 3</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 10px;">
                    <div class="card-header"><span>Support</span></div>
                    <div class="card-body"><a class="card-link" href="mailto:info@example.com">Contact Support</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
