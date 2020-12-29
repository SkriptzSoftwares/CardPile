@extends('layouts.app')

@section('title')
    Cardpile - Welcome
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset("UEassets/css/Article-Clean.css")}}">
    <link rel="stylesheet" href="{{asset("UEassets/css/Article-List.css")}}">
@endsection

@section('content')
    @if(\App\Helpers\PermissionsHelper::instance()->getPerms('ADMIN'))
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Welcome to Cardpile</h2>
                <p class="text-center">Get Started by going to the Admin Panel and start posting!</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="{{url('admin')}}">Admin Panel</a></div>
        </div>
    </div>
    <hr>
    @endif
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">Getting Started</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">Skriptz</a><span class="date">Nov 15th, 2020</span></p>
                    </div>
                    <div class="text">
                        <p>Get Started by editing the views or download a theme from online. The default look is a placeholder for developers to modify and take example off, so we wouldn't recommend keeping it.</p>
                        <p>After, set up your site, fill in the missing informations.&nbsp;</p>
                        <h2>Aliquam In Arcu </h2>
                        <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="UEassets/img/desk.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="UEassets/img/building.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="UEassets/img/loft.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("UEassets/js/jquery.min.js")}}"></script>

@endsection
