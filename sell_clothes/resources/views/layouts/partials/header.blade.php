<header class="header_area">
    <div class="top_menu row m0">
        <div class="container-fluid">
            <div class="float-left">
                <p>Call Us: 0964 99 12 98</p>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    @guest
                        <li>
                            <a href="{{route('login')}}">
                                Login/Register
                            </a>
                        </li>
                    @else
                        @if (Auth::user()->role_id == 1)
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="tr-bg-all tr-login-reg" >Quản trị viên</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                            >Đăng xuất</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('users.index') }}" class="tr-bg-all tr-login-reg" >{{ Auth::user()->first_name }}</a>
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                            >Đăng xuất</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endif
                    @endguest

                    <li>
                        <a href="/">
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row w-100">
                        <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Trang chủ</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Shop Category</a>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-product.html">Product Details</a>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="checkout.html">Product Checkout</a>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="">Shopping Cart</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="confirmation.html">Confirmation</a>
                                                    </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="single-blog.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <li class="nav-item">
                                                <a class="nav-link" href="tracking.html">Tracking</a>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="elements.html">Elements</a>
                                                </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-5">
                            <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                <hr>
                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="/" class="icons">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="#" class="icons">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <hr>

                                <li class="nav-item">
                                    <a href="{{ route('cart.index')}}" class="icons">
                                        <i class="lnr lnr lnr-cart"></i>
                                    </a>
                                </li>

                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>