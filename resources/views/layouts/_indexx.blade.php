<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esperanto-centroj</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome-all.min.css')}}">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{asset('asset/font/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('asset/js/modernizr-3.6.0.min.js')}}"></script>
</head>

<body class="sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper">
    <!-- Add your site or application content here -->
    <!-- Header Area Start Here -->
    <header class="has-mobile-menu">
        <div id="header-middlebar" class="pt--29 pb--29 bg--dark">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4">
                        <div class="header-action-items">
                            <ul>
                                <li class="item-social-layout2"> <a href="https://www.facebook.com/sharer/sharer.php?u=https://esperanto-centroj.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="item-social-layout2"> <a href="https://telegram.me/share/url?url=https://esperanto-centroj.com/"><i class="fab fa-telegram"></i></a></li>
                                <li class="item-social-layout2"> <a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="logo-area">
                            <a href="/" class="temp-logo" id="temp-logo">
                                <img src="{{asset('asset/img/logo-footer.png')}}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="header-action-items">
                            <ul>
                                <li class="header-search-box divider-style-border">
                                    <a href="#header-search" title="Search">
                                        <i class="flaticon-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li class="cart-wrap divider-style-border">
                                    <div class="cart-info">
                                        <i class="flaticon-envelope"></i>
                                        <div class="cart-amount"></div>
                                    </div>

                        </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
<div id="rt-sticky-placeholder"></div>
<div id="header-menu" class="header-menu menu-layout1 bg--light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav id="dropdown" class="template-main-menu">
                    <ul>
                        <li class="hide-on-mobile-menu">
                            <a href="/">Hejmo</a>

                        </li>

                        <li>
                            <a href="/about">Pri ni</a>
                        </li>
                        <li>
                            <a href="#">Centroj</a>
                            <ul class="dropdown-menu-col-1">
                                @foreach ($centroj as $centro)
                                    <li>
                                        <a href="{{url('/info/token='.$centro->id)}}">{{$centro->centro}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a href="{{url('logon')}}">Ensaluti</a>

                        </li>
                        <li class="possition-static hide-on-mobile-menu d-none">
                            <a href="#"></a>
                            <div class="template-mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="menu-ctg-title">Hejmo</div>

                                        </div>
                                        <div class="col-3">
                                            <div class="menu-ctg-title">Hejmo</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index6.html">
                                                        <i class="fas fa-home"></i>Home 6</a>
                                                </li>
                                                <li>
                                                    <a href="index7.html">
                                                        <i class="fas fa-home"></i>Home 7</a>
                                                </li>
                                                <li>
                                                    <a href="index8.html">
                                                        <i class="fas fa-home"></i>Home 8</a>
                                                </li>
                                                <li>
                                                    <a href="index9.html">
                                                        <i class="fas fa-home"></i>Home 9</a>
                                                </li>
                                                <li>
                                                    <a href="index10.html">
                                                        <i class="fas fa-home"></i>Home 10</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <div class="menu-ctg-title">Home</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index11.html">
                                                        <i class="fas fa-home"></i>Home 11</a>
                                                </li>
                                                <li>
                                                    <a href="index12.html">
                                                        <i class="fas fa-home"></i>Home 12</a>
                                                </li>
                                                <li>
                                                    <a href="index13.html">
                                                        <i class="fas fa-home"></i>Home 13</a>
                                                </li>
                                            </ul>
                                            <div class="menu-ctg-title">ARCHIVES</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="archives1.html">
                                                        <i class="fab fa-cloudversify"></i>Archive 1</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <div class="menu-ctg-title">ARCHIVES</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="archives2.html">
                                                        <i class="fab fa-cloudversify"></i>Archive 2</a>
                                                </li>
                                            </ul>
                                            <div class="menu-ctg-title">AUTHORS</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="authors.html">
                                                        <i class="fas fa-users"></i>Authors</a>
                                                </li>
                                            </ul>
                                            <div class="menu-ctg-title">PAGES</div>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="404.html">
                                                        <i class="fas fa-user-secret"></i>404 Error</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">Kontaktu nin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Header Area End Here -->

<!-- Blog Area Start Here -->
@yield('content')

<!-- Blog Area End Here -->
<!-- Footer Area Start Here -->
<footer class="footer-wrap-layout2">
    <div class="container">
        <div class="footer-box-layout2">
            <div class="footer-logo">
                <a href="/"><img src="{{asset('asset/img/logo-footer.png')}}" alt="logo"></a>
            </div>
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://esperanto-centroj.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://telegram.me/share/url?url=https://esperanto-centroj.com"><i class="fab fa-telegram"></i></a></li>

            </ul>
            <div class="copyright">© 2022 Esperanto-centroj. All Rights Reserved.</div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
<!-- Search Box Start Here -->
<div id="header-search" class="header-search">
    <button type="button" class="close">×</button>
    <form method="post" action="{{url('search')}}" class="header-search-form">
        <input type="search" name="search" value="" placeholder="Skribu ĉi tie(nomo de la centro)........" />
        <button type="submit" class="search-btn">
            <i class="flaticon-search"></i>
        </button>
    </form>
</div>
<!-- Search Box End Here -->
</div>
<!-- jquery-->
<script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('asset/js/plugins.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('asset/js/jquery.meanmenu.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('asset/js/jquery.smoothscroll.min.js')}}"></script>
<!-- Main js -->
<script src="{{asset('asset/js/main.js')}}"></script>

</body>


</html>
