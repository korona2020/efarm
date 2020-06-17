<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+355 68 54 33 123</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <a href="https://api.whatsapp.com/send?phone=355685433123" data-toggle="tooltip" data-placement="bottom" title="">
                            <img src="{{asset('images/socialmedia/wapp.ico')}}" alt="" >
                        </a>
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                        <a href="https://www.instagram.com/zere_farm" data-toggle="tooltip" data-placement="bottom" title="">
                            <img src="{{asset('images/socialmedia/fb.ico')}}" alt="">
                        </a>
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                        <a href="https://www.instagram.com/zere_farm" data-toggle="tooltip" data-placement="bottom" title="">
                            <img src="{{asset('images/socialmedia/insta.ico')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        @auth
            <a class="navbar-brand" href="{{route('admin.home') }}">ZereFarm</a>
        @endauth
        @guest
            <a class="navbar-brand" href="{{route('home') }}">ZereFarm</a>
        @endauth


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{ route('shop') }}">Shop</a>
                        <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                        <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>

                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                @if(!Auth::check())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="{{ route('address.get',['id'=> Auth::user()->getId()]) }}" class="dropdown-item">Location</a>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endif
                <li class="nav-item cta cta-colored"><a href="{{ route('cart') }}" class="nav-link"><span class="icon-shopping_cart"></span>[{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}]</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
