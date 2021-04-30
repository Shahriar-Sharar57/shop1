<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/ela.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css">
    <script src="{{asset('contents/admin')}}/assets/js/jquery-3.5.1.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/sweetalert.min.js"></script>
    @stack('css')
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel print_none">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('admin')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    @if(Auth::user()->user_role=='1')
                    <li>
                        <a href="{{url('admin/user')}}"><i class="menu-icon fa fa-user"></i>User </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{url('admin/banner')}}"><i class="menu-icon fa fa-image"></i>Banner </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Manage Website</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-cog"></i><a href="{{url('admin/manage/basic')}}">Basic Information</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('admin/manage/social')}}">Social Media</a></li>
                            <li><i class="fa fa-table"></i><a href="">Contact Address</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-product-hunt"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">Add Product</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('admin/product')}}">All Product</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('admin/product/category')}}">Product Category</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('admin/product/main/category')}}">Product Main Category</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cart-plus"></i>eCommerce</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">Today Order</a></li>
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">All Order</a></li>
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">All Delivery List</a></li>
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">All Order Cancel List</a></li>
                            <li><i class="fa fa-cog"></i><a href="{{url('#')}}">All Customer List</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('admin/contactus')}}"><i class="menu-icon fa fa-comments"></i>Visitor Information </a></li>
                    <li><a href="{{url('/')}}" target="_blank"><i class="menu-icon fa fa-globe"></i>Live Site </a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="menu-icon fa fa-power-off"></i>Logout </a></li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header print_none">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{asset('contents/admin')}}/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('contents/admin')}}/images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">1</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 1 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">2</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 2 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{asset('contents/admin')}}/images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('contents/admin')}}/images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
          @yield('content')
        </div>
        <div class="clearfix"></div>
        <footer class="site-footer print_none">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12">
                        Copyright &copy; 2020 Admin Panel.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/main.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
</body>
</html>
