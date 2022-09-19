<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esperanco-centroj | </title>
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
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('asset/vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('asset/js/modernizr-3.6.0.min.js')}}"></script>
</head>

<body style="width: 100% !important " class="bg-pearl box-layout sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- ScrollUp Start Here -->
<a href="#wrapper" data-type="section-switch" class="scrollup">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- ScrollUp End Here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper">
    <!-- Add your site or application content here -->
    <!-- Header Area Start Here -->
    <header class="has-mobile-menu">
        <div id="header-topbar" class="pt--14 pb--14 bg--dark border-bootom border-color-accent1">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 d-flex justify-content-start">
                        <div class="header-action-items">
                            <ul>
                                <li class="item-subscribe text-white"><i class="flaticon-envelope"></i>ABONI!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 d-flex justify-content-end">
                        <div class="header-action-items">
                            <ul>
                                <li class="item-social-layout1 text-white"><i class="fab fa-facebook-f"></i>259k <span>ŜATAS</span>
                                </li>
                                <li class="item-social-layout1 text-white"><i class="fab fa-twitter"></i>480k <span>SEKVANTOJ</span>
                                </li>
                                <li class="item-social-layout1 text-white"><i class="fab fa-instagram"></i>280k <span>SEKVANTOJ</span>
                                </li>
                                <li class="item-social-layout1 text-white"><i class="fab fa-youtube"></i>180k <span>ABONANTOJ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-middlebar" class="box-layout-child bg--light border-bootom border-color-accent2">
            <div class="pt--25 pb--25">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4">
                            <div class="header-action-items">
                                <ul>
                                    <li class="offcanvas-menu-trigger-wrap">
                                        <button type="button" class="offcanvas-menu-btn menu-status-open">
                                                <span class="btn-icon-wrap">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                        </button>
                                    </li>
                                    <li class="user-icon"><a href="/register"><i class="flaticon-profile"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center">
                            <div class="logo-area">
                                <a href="/" class="temp-logo" id="temp-logo">
                                    <img src="{{asset('asset/img/logo_reduce.png')}}" alt="logo" class="img-fluid">
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
                                        <a href="/contact" class="cart-info">

                                                <i class="flaticon-envelope"></i>

                                            <div class="cart-amount"></div>
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rt-sticky-placeholder"></div>
        <div id="header-menu" class="header-menu menu-layout1 box-layout-child bg--light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav id="dropdown" class="template-main-menu">
                            <ul>
                                <li class="hide-on-mobile-menu">
                                    <a href="/">Hejmpaĝo</a>

                                </li>
                                <li class="hide-on-mobile-menu">
                                    <a href="/about">Pri ni</a>

                                </li>
                                <li class="hide-on-desktop-menu">
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
                                                    <div class="menu-ctg-title">AUTHORSss</div>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="authors.html">
                                                                <i class="fas fa-users"></i>Authorssss</a>
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
                                    <a href="{{url('contact')}}">Kontaktu nin</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
    <div class="box-layout-child bg-white">
        <!-- Slider Area Start Here -->
        <section class="slider-wrap-layout1">
            <div class="container">
                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="30" data-margin="30"
                     data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                     data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                     data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                     data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                     data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true"
                     data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true"
                     data-r-extra-large-dots="false">
                    <div class="slider-box-layout1">
                        <div class="item-img">
                            <img src="{{asset('asset/slides/GREZILJON.jpg')}}" alt="slider">
                        </div>
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li><i class="fas fa-tag"></i>Kastel Greziljon</li>
                                <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>

                            </ul>
                            <h2 class="item-title"><a href="">
                                    Kastel Greziljon
                                </a></h2>
                        </div>
                    </div>
                    <div class="slider-box-layout1">
                        <div class="item-img">
                            <img src="{{asset('asset/slides/roterdamo.jpg')}}" alt="slider">
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li><i class="fas fa-tag"></i>Roterdamo</li>
                                    <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>

                                </ul>
                                <h2 class="item-title"><a href="">Centro de Roterdamo</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="blog-wrap-layout1">
            <div class="container">
                <div class="row">
                    @foreach ($centroj as $centro)
                    <div class="col-lg-4">
                        <div style="box-shadow: 10px 10px 5px 0px rgba(0,152,50,0.42) inset;
                        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,152,50,0.42) inset;
                        -moz-box-shadow: 10px 10px 5px 0px rgba(0,152,50,0.42) inset;" class="blog-box-layout1">
                            <div class="item-img">
                                <a href="{{url('/info/token='.$centro->id)}}"><img src="{{ asset('storage/actuality_photos/'.$centro->logo)}}" style="width:100%;
                                       height:200px;
                                       object-fit:cover;
                                       object-position:50% 50%;" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">

                                    <li><i class="fas fa-calendar-alt"></i>
                                        Membro la  : {{$centro->created_at->format('d/m/Y')}}
                                    </li>
                                </ul>
                                <h3 class="item-title"><a href="{{url('/info/token='.$centro->id)}}">Centro de {{$centro->centro}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="blog-wrap-layout2">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog-box-layout1">
                            <div class="item-img">
                                <a href=""><img style="height:" src="{{asset('asset/img/CDELILaChaux-de-FondsSvisio.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">

                                </ul>
                                <h2 class="item-title"> <a href="">NOVA ILO</span> POR NI ĈIUJ</a></h2>
                                <p>
                                    Tiu retejo prezentas la Esperanto-centrojn en la tuta mondo. Ĝi estas starigita de
                                    Universala Esperanto Asocio UEA kaj Internacia Ligo de Esperantistaj Instruistoj
                                    ILEI kune. Ĝi ebligas ekkoni ĉiujn centrojn, iliajn agadojn, ofertojn, ecojn.
                                    Ĉiu Esperanto-centro povas akiri surfacon, sub-menuon en tiu paĝaro. Tie la
                                    respondeculoj de la centro, per persona pasvorto, povos daŭre aldoni donitaĵojn,
                                    informojn, agadprogramojn kaj similajn gravajn informojn. La publikaj uzantoj
                                    povos legi la tutan retejon sen aldoni ion ajn, konsulti la paĝaron.
                                </p>
                                <a href="" class="item-btn">Legu Pli<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="row gutters-40">
                            @foreach($allagadoj as $allagado)
                            <div class="col-sm-6 col-12">
                                <div class="blog-box-layout1">
                                    <div class="item-img">
                                        <a href="{{url('details-post/'.$allagado->title.'/'.$allagado->id)}}"><img style="width:100%;
                                       height:200px;
                                       object-fit:cover;
                                       object-position:50% 50%;" src="{{ asset('storage/actuality_photos/'.$allagado->file1)}}" alt="blog"></a>
                                    </div>
                                    <div class="item-content">
                                        <ul class="entry-meta meta-color-dark">
                                            <li><i class="fas fa-tag"></i>Afiŝoj</li>
                                            <li><i class="fas fa-calendar-alt"></i>
                                                {{$allagado->created_at->format('d/m/Y')}}
                                            </li>

                                        </ul>
                                        <h3 class="item-title"> <a href="{{url('details/'.$allagado->title.'/'.$allagado->id)}}">{{$allagado->title}}</a></h3>
                                        <p>
                                            <!-- description first 100 characters -->
                                           @php
                                             $description = $allagado->desc;
                                                $description = substr($description, 0, 100);
                                                $description = substr($description, 0, strrpos($description, ' '));
                                                echo $description.'...';
                                             @endphp

                                        </p>
                                        <a href="{{url('details-post/'.$allagado->title.'/'.$allagado->id)}}" class="item-btn">Legu pli<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach







                        </div>
                        <div class="pagination-layout1">
                            <div class="row pagination d-flex justify-content-center">{!! $allagadoj->appends(Request::all())->links() !!}</div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">Pri ni</h3>
                            </div>
                            <div class="widget-about">
                                <figure style="border-radius: 5px !important;" class="author-figure"><img src="{{asset('asset/img/logo.png')}}" alt="about"></figure>
                                <figure class="author-signature"></figure>
                                <p style="text-align: justify !important;">
                                    Esperanto-centro estas iu strukturo, kiu organizas eventojn en – per – por Esperanto aŭ kie konserviĝas kolektoj de esperantaĵoj.
                                </p>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">ABONI AL NIAJ SOCIAL RETOJ</h3>
                            </div>
                            <div class="widget-follow-us">
                                <ul>
                                    <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-ad">
                                <a href="#"><img src="" alt="" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">KATEGORIOJ</h3>
                            </div>
                            <div class="widget-categories">
                                <ul>
                                    @foreach($centroj as $centro)
                                    <li><a href="{{url('/info/token='.$centro->id)}}">{{$centro->centro}}<span></span></a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-newsletter-subscribe">
                                <h3>Akiru Plej Lastajn Ĝisdatigojn</h3>
                                <p>Informilo Abonu</p>
                                <form method="post" action="{{URL('/subscribe')}}" class="newsletter-subscribe-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="E-mail" class="form-control"
                                               name="email" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-none">
                                        <button type="submit" class="item-btn">ABONI</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->
        <!-- Instagram Start Here -->

        <!-- Instagram End Here -->
        <section style="font-style: italic; color:green; " class="sek1 mb-3" data-nombro="9" id="montrinovajhojn">
            <h4>Laste ŝanĝita: 14 Novembro 2020 (13:08)</h4>
            <h4>URL: <a href="https://esperanto-centroj.com">https://esperanto-centroj.com</a> </h4>
            <h4 style="margin-bottom: 3% !important;">Retpoŝto: abyssiniea@gmail.com</h4>

        </section>
    </div>

    <!-- Footer Area Start Here -->
    <footer class="footer-wrap-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4">
                    <div class="footer-box-layout1">
                        <div class="copyright">© 2022 Esperanto-centroj.</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-box-layout1">
                        <div class="footer-logo">
                            <a href="/"><img src="{{asset('asset/img/logo-footer.png')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-box-layout1">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
    <!-- Search Box Start Here -->
    <div id="header-search" class="header-search">
        <button type="button" class="close">×</button>
        <form method="post" action="{{url('/search')}}" class="header-search-form">
            @csrf
            <input type="search" value="" name="search" placeholder="Skribu ĉi tie........" />
            <button type="submit" class="search-btn">
                <i class="flaticon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- Search Box End Here -->
    <!-- Offcanvas Menu Start -->
    <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">
        <div class="offcanvas-content">
            <div class="offcanvas-logo">
                <a href="/"><img src="{{asset('asset/img/logo_reduce.png')}}" alt="logo"></a>
            </div>
            <ul class="offcanvas-menu">
                <li class="nav-item">
                    <a href="/">HEJMPAĜO
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/about">PRI NI</a>
                </li>
                <li class="nav-item">
                </li>

                <li class="nav-item">
                    <a href="/contact">KONTAKTU NIN</a>
                </li>
            </ul>
            <div class="offcanvas-footer">
                <div class="item-title">Sekvu nin</div>
                <ul class="offcanvas-social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
</div>
<!-- jquery-->
<script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('asset/js/plugins.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel js -->
<script src="{{asset('asset/vendor/OwlCarousel/owl.carousel.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('asset/js/jquery.meanmenu.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('asset/js/jquery.smoothscroll.min.js')}}"></script>
<!-- Main js -->
<script src="{{asset('asset/js/main.js')}}"></script>

</body>


</html>
