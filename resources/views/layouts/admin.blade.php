<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("assets/fonts/fontawesome5-overrides.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/untitled.css")}}">
    @yield("head")
    <style>
        .hover:hover {
            background-color: rgba(255, 255, 255, 0) !important;
            color: white !important;
        }
    </style>
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{url("")}}">
                <div class="sidebar-brand-icon"><img src="{{asset("assets/img/TeAm-2.png")}}" style="width: 100%;">
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="/admin"><i
                            class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <hr class="sidebar-divider"/>
                <div class="sidebar-heading">
                    <p class="mb-0">Market</p>
                </div>
                <li class="nav-item"><a class="nav-link" href="/admin/packages"><i
                            class="fas fa-box"></i><span>Packages</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/categories"><i
                            class="fas fa-folder"></i><span>Categories</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/orders"><i
                            class="fas fa-shopping-cart"></i><span>Orders</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/engagement"><i
                            class="fas fa-dollar-sign"></i><span>Engagement</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/market"><i
                            class="fas fa-cogs"></i><span>Settings</span></a></li>
                {{--                <li class="nav-item">--}}
                {{--                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false"--}}
                {{--                            aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-cog"></i><span>Components</span></a>--}}
                {{--                        <div class="collapse" id="collapse-1">--}}
                {{--                            <div class="border rounded py-2 collapse-inner"--}}
                {{--                                 style="background-color: rgba(255,255,255,0); border-style: none !important;">--}}
                {{--                                <a class="collapse-item text-white-50 hover" href="/admin/packages">Packages</a>--}}
                {{--                                <a class="collapse-item text-white-50 hover" href="/admin/categories">Categories</a>--}}
                {{--                                <a class="collapse-item text-white-50 hover" href="/admin/orders">Orders</a>--}}
                {{--                                <a class="collapse-item text-white-50 hover" href="/admin/market">Settings</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <hr class="sidebar-divider"/>
                <div class="sidebar-heading">
                    <p class="mb-0">Community</p>
                </div>
                <li class="nav-item">
                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false"
                            aria-controls="collapse-3" href="#collapse-3" role="button"><i
                                class="fas fa-folder"></i><span>Pages</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item"
                                                                                  href="login.html">Login</a><a
                                    class="collapse-item" href="register.html">Register</a><a class="collapse-item"
                                                                                              href="forgot-password.html">Forgot
                                    Password</a>
                                <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="404.html">404
                                    Page</a><a class="collapse-item" href="blank.html">Blank Page</a></div>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar" aria-controls="collapsePages">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a
                                class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot
                                Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404
                                Page</a><a class="collapse-item" href="#">Blank Page</a></div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="charts.html"><i class="fas fa-chart-area"></i><span> Charts</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="tables.html"><i
                            class="fas fa-table"></i><span> Tables</span></a></li>
                <hr class="sidebar-divider"/>
                <div class="sidebar-heading">
                    <p class="mb-0">Site</p>
                </div>
            </ul>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                            class="fas fa-bars"></i></button>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#"><span
                                        class="badge badge-danger badge-counter">3+</span><i
                                        class="fas fa-bell fa-fw"></i></a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-primary icon-circle"><i
                                                    class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="mr-3">
                                            <div class="bg-warning icon-circle"><i
                                                    class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your
                                                account.</p>
                                        </div>
                                    </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All
                                        Alerts</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#"><i
                                        class="fas fa-envelope fa-fw"></i><span
                                        class="badge badge-danger badge-counter">7</span></a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                                                   src="{{asset("assets/img/avatars/avatar4.jpeg")}}">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span>
                                            </div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                                                   src="{{asset("assets/img/avatars/avatar2.jpeg")}}">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span>
                                            </div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                                                   src="{{asset("assets/img/avatars/avatar3.jpeg")}}">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span>
                                            </div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a>
                                    <a class="d-flex align-items-center dropdown-item" href="#">
                                        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                                                   src="{{asset("assets/img/avatars/avatar5.jpeg")}}">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span>
                                            </div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All
                                        Alerts</a></div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                 aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#"><span
                                        class="d-none d-lg-inline mr-2 text-gray-600 small">{{auth()->user()->name}}</span><img
                                        class="border rounded-circle img-profile"
                                        src="{{gravatar(auth()->user()->email)}}"></a>
                                <div
                                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                    <a
                                        class="dropdown-item" href="#"><i
                                            class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity
                                        log</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('logout')}}"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield("content")
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto">
                    <div class="link-custom"><a class="link-custom" href="#"><img style="width: 52px;height: 24px;"
                                                                                  src="{{asset("assets/img/logo.png")}}"><span
                                class="text-left link-custom" style="font-size: .8rem;margin-left: 5px;">Skriptz Softwares © 2020</span></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="{{asset("assets/js/bs-init.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{asset("assets/js/theme.js")}}"></script>
@yield("script")
</body>

</html>
