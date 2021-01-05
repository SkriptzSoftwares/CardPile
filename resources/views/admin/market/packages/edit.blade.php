@extends('layouts.admin')

@section('title')
    Cardpile - Edit package
@endsection

@section('head')
    <script>
        function displayFileSelector(elValue) {
            document.getElementById('file').style.display = elValue.value == 0 ? 'block' : 'none';
        }


    </script>
@endsection

@section('content')

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Edit Package</h3>
        @include('inc.messages')
        <form action="{{route('packages.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-auto col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-sm-3"><label for="name">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div><input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$pack->name}}" id="name" name="name" placeholder="Name" style="border-radius: 5px;" />
                        <div class="input-group-append"></div>
                    </div>
                </div>
                <div class="col-auto col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-sm-3"><label for="price">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div><input type="number" value="{{$pack->price}}" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" style="border-top-right-radius: 5px;border-bottom-right-radius: 5px;" />
                        <div class="input-group-append"></div>
                    </div>
                </div>
                <div class="col-auto col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-sm-3"><label for="stock">Stock (-1 for no limit)</label><input type="number" @if($pack->stock) value="{{$pack->stock}}" @else value="-1" @endif class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" placeholder="Stock" /></div>
                <div class="col-auto col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-sm-3"><label for="stock">Type</label><select class="form-control" name="type" onchange="displayFileSelector(this)"><option value="0" @if($pack->type === 0) selected @endif>Digital File</option><option value="1" @if($pack->type === 1) selected @endif>Physical Good</option><option value="2" @if($pack->type === 2) selected @endif>Service</option></select></div>
            </div>
            <div class="form-row mt-4">
                <div class="col-md-12 col-lg-9 mt-sm-3"><label for="desc">Description</label><textarea class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" placeholder="Description" rows="8" style="resize: none" maxlength="950">{{$pack->desc}}</textarea></div>
                <div class="col-auto col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="form-row">
                        <div class="col mt-sm-3"><label for="cat">Category</label><select id="cat" class="form-control" name="category"><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select>
                            <div
                                class="input-group">
                                <div class="input-group-prepend"></div>
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col align-self-start mt-sm-3"><label for="image" style="z-index: -1; display: block">Image</label><input type="file" id="image" name="image" />
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="col align-self-start mt-sm-3" id="file" style="@if($pack->type === 0) display: block @else display: none @endif"><label for="file" style="z-index: -1; display: block">Digital File</label><input type="file" id="file" name="file" />
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col"><button class="btn btn-primary mt-2" type="submit">Submit</button></div>
            </div>
        </form>
    </div>
@endsection
