<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZereFarm</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">



</head>
<body>

<div class="wrapper">
    <div class="top_navbar">
        <div class="hamburger">
            <div class="hamburger__inner">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
        </div>
        <div class="menu">
            <div class="logo">
                <a href="{{route('welcome')}}">ZereFarm</a>
            </div>
            <div class="right_menu">
                <ul>
                    <li class="toggleProfile">
                        <i class="fa fa-user"></i>
                        <span class="profilename">{{auth()->user()->name}}</span>
                        <div class="profile_dd">
                            <div class="dd_item">Profile</div>
                            <div class="dd_item">Change Password</div>
                            <div class="dd_item">
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main_container">
        <div class="sidebar">
            <div class="sidebar__inner">
                <div class="profile">
                    <div class="img">

                    </div>
                    <div class="profile_info">
                        <p>Welcome</p>
                        <p class="profile_name">{{auth()->user()->name}}</p>
                    </div>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="{{route('home')}}" class="active">
                            <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                            <span class="title">Categories</span>
                        </a>
                        <ul class="collapse list-unstyled" id="categoriesSubmenu">
                            <li>
                                <a href="{{route('categories.index')}}">
                                    <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    <span class="title">All Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('categories.create')}}">
                                    <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="title">Create Category</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#productsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <span class="icon"><i class="fa fa-product-hunt" aria-hidden="true"></i></span>
                            <span class="title">Products</span>
                        </a>
                        <ul class="collapse list-unstyled" id="productsSubmenu">
                            <li>
                                <a href="{{route('products.index')}}">
                                    <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    <span class="title">All Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('products.create')}}">
                                    <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="title">Add Product</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{route('users.index')}}">
                            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <span class="title">Users</span>
                        </a>
                    </li>

                </ul>


            </div>
        </div>
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @yield('content')
        </div>
    </div>

</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
<script>

</script>
</body>
</html>
