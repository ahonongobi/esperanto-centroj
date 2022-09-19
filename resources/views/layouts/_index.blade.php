
<!--
Espaeranto
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Esperanto centroj | Home </title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700,800&display=swap" rel="stylesheet">
  <!-- Template CSS -->

   

</head>

<body>
    <div id="home">
        <!--/top-nav -->
        <div class="top_w3pvt_main container">
            <!--/header -->
            <header class="nav_w3pvt text-center ">
                <!-- nav -->
                <nav class="wthree-w3ls">
                    <div id="logo">
                        <h1> <a class="navbar-brand px-0 mx-0" href="/">ILEI/UEA
                            </a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mr-auto">
                        <li class="active"><a href="#">Ĉefpaĝo</a></li>
                        <li><a href="prini">Pri ni</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toggle-2">Centroj <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Centroj  <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                 @foreach ($centroj as $centro)
                            <li><a href="{{url('/info/token='.$centro->id)}}" class="drop-text">{{$centro->centro}}</a></li>
                                 @endforeach
                                
                            </ul>
                        </li>
                    <li><a href="{{route('registerpage')}}">Ensaluti</a></li>
                    <li><a href="{{route('contact')}}">Kontakto</a></li>

                        <li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                <div class="tooltip">Facebook</div>
                            </a> </li>
                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-twitter" aria-hidden="true"></span>
                                <div class="tooltip">Twitter</div>
                            </a> </li>
                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-instagram" aria-hidden="true"></span>
                                <div class="tooltip">Instagram</div>
                            </a> </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </header>
            <!--//header -->
        </div>
        <!-- //top-nav -->
        <!-- banner slider -->
        <div id="homepage-slider" class="st-slider">
            <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
			<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
			<input type="radio" class="cs_anchor radio" name="slider" id="slide4" />
            <div class="images">
                <div class="images-inner">
                    <div class="image-slide">
                        <div class="banner-w3pvt-1">
                            <div  class="overlay-w3ls d-flex">
                                <h3 id="slide4" class="para-w3pv" style="color: yellow; " data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft"> <span>CDELI La Chaux-de-Fonds,</span></h3>
                                <h3 id="slide4" class="para-w3pv" style="color: yellow; " data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft"> <span>Svislando</h3>

                                
                            </div>
                           
                        </div>
                    </div>
                    

                    <div class="image-slide">
                        <div class="banner-w3pvt-2">
                            <div class="overlay-w3ls d-flex">
                                <h2 id="slide4" class="para-w3pv" style="color: yellow; text-align: start;" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft"> <span style="background-position: center top;">Kastelo Grezijono, </span></h2>
                                <h2 id="slide4" class="para-w3pv" style="color: yellow; text-align: end;" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft"> <span>Francio</h2>

                            </div>
                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-3">
                            <div class="overlay-w3ls">
                                <h2 class="para-w3pv sub-title" style="color: yellow;" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">Roterdamo</h2>

                            </div>
                        </div>
					</div>
					<div class="image-slide">
                        <div class="banner-w3pvt-4">
                            <div class="overlay-w3ls">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="labels">
                <div class="fake-radio">
                    <label for="slide1" class="radio-btn"></label>
                    <label for="slide2" class="radio-btn"></label>
					<label for="slide3" class="radio-btn"></label>
					<label for="slide4" class="radio-btn"></label>
                </div>
            </div>
            <!-- banner-hny-info -->
            <div class="banner-hny-info">
                <h3>Esperanto-centroj
                   </h3> <br>
                <div class="top-buttons mx-auto text-center mt-md-5 mt-3">
                    <a href="{{route('loginPage')}}" style="color: white;" class="btn more mr-2"><i class="fa fa-user"></i> Ensalutu</a>
                <a href="{{route('contact')}}" class="btn"><i class="fa fa-send"></i> Kontaktu <span style="text-transform: lowercase;">nin</span></a>
                </div>
                <div class="d-flex hny-stats-inf">
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                        <h5 class="counter">{{$centroCout}}</h5>
                            <p class="para-w3pvt">Centroj</p>
                        </div>
                    </div>
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                        <h5 class="counter">{{$countlandoj}}</h5>
                            <p class="para-w3pvt">Landoj</p>
                        </div>
                    </div>
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                        <h5 class="counter">{{$amatoroj}}</h5>
                            <p class="para-w3pvt">Amatoroj</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- //banner-hny-info -->
        </div>
        <!-- //banner slider -->
    </div>
    <!-- //banner -->

    <!-- //home -->
<!-- Headers-4 block 
<section class="w3l-header-6-main mobile-header">
    <div class="header-section-hny">
        <div class="header-top">
            <div class="container">
                <!-- /header-top-inn
                <div class="header-inn-top row">
                    <div class="logo-brand col-6">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" alt="" title="Webzine" style="max-height:30px;width:100%;" />
                        </a>
                    </div>
                    <div class="menu-overlay-left col-6 ml-auto">
                        <div class="two-pops d-flex">
                            <a href="#" class="author-user"><span class="fa fa-user"
                                    aria-hidden="true"></span></a>


                            <!-- overlay-menuv-menu 
                            <div class="overlay-menuv-hny">
                                <input type="checkbox" id="op"></input>
                                <div class="side-menu-hny">
                                    <label for="op" class="menuopen">
                                        <span class="fa fa-bars" aria-hidden="true"></span></label>
                                </div>
                                <div class="overlay-menuv overlay-menuv-hugeinc">
                                    <label for="op" class="menuclose"><span class="fa fa-times"
                                            aria-hidden="true"></span></label>
                                    <div class="side-show-content text-left">

                                        <div class="quick-links-side gap-top">
                                            <h3 class="side-title">About Webzine</h3>
                                            <p> Lorem ipsum dolor sit amet, adipi scingelit. Vestibulum orci justo,
                                                vehicula vel sapien sit amet.
                                            </p>

                                        </div>

                                        <div class="quick-links-side gap-top">
                                            <h3 class="side-title">Top Authors</h3>
                                            <ul>
                                                <li><a href="#">John Smith</a></li>
                                                <li><a href="#">Jackson</a></li>
                                                <li><a href="#">Lucas Smith</a></li>
                                                <li><a href="#">Daniel Doe</a></li>
                                            </ul>
                                        </div>
                                        <div class="quick-links-side gap-top">
                                            <h3 class="side-title">Categories</h3>
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="lifestyle.html">Lifestyle</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="#">Author</a></li>
                                            </ul>
                                        </div>
                                        <div class="quick-links-side follow-us gap-top">
                                            <h3 class="side-title">Follow Us</h3>
                                            <ul class="social-icons-top">
                                                <li><a class="facebook" href="#"><span class="fa fa-facebook"
                                                            aria-hidden="true"></span></a>
                                                </li>
                                                <li><a class="twitter" href="#"><span class="fa fa-twitter"
                                                            aria-hidden="true"></span></a></li>
                                                <li><a class="google" href="#"><span class="fa fa-google-plus"
                                                            aria-hidden="true"></span></a>
                                                </li>
                                                <li><a class="instagram" href="#"><span class="fa fa-instagram"
                                                            aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="search-right">

                                <a href="#search" title="search"><span class="fa fa-search"
                                        aria-hidden="true"></span></a>
                                <!-- search popup 


                                <div id="search" class="pop-overlay">
                                    <div class="popup">

                                        <form action="#" method="post" class="search-box">
                                            <input type="search" placeholder="Keyword" name="search" required="required"
                                                autofocus="">
                                            <button type="submit" class="btn mt-3">Search</button>
                                        </form>

                                    </div>

                                    <a class="close" href="#">×</a>
                                </div>
                                <!-- /search popup 
                            </div>
                        </div>
                        <!-- overlay-menuv-menu 
                    </div>
                </div>
                <!-- //header-top-inn-
            </div>
        </div>
        <header class="header-hny-block">
            <div class="container">
                 <!-- /.nav-collapse 
                 <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mr-lg-auto">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Home</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="home-1.html">Home V1</a>
                                    </div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lifestyle.html">Lifestyle</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Food</a>
							   </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <div class="social-right">
                                    <ul class="social-icons-top">
                                        <li><a class="facebook" href="#"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a class="twitter" href="#"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a></li>
                                        <li><a class="google" href="#"><span class="fa fa-google-plus"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a class="instagram" href="#"><span class="fa fa-instagram"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </nav>

                <!-- /.nav-collapse -
        </header>
    </div>
</section>
<!--w3l-banner-slider-main
<section class="w3l-banner-slider-main">
	<div class="container-fluid" >
		<div class="content-baner-inf">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-50" src="assets/images/slides/CDELI_La_Chaux-de-Fonds.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50"  src="assets/images/slides/GREZILJON.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" style="width: 100%;" src="assets/images/slides/GREZILJON.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="assets/images/slides/GREZILJON.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-50" src="assets/images/slides/GREZILJON.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
		</div>
	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</section>

-->
 
<!-- //w3l-banner-slider-main -->

@yield('content')
<!-- footer-66 -->
<footer class="w3l-footer-66">
    <section class="footer-inner-main py-md-5 py-5">
        <div class="container">
            <div class="footer-top row">
                <div class="sub-one-left col-lg-4 col-md-6">
                    <h6>Pri esperanto centroj</h6>
                    <p>Tiu retejo prezentas la Esperanto-centrojn en la tuta mondo. Ĝi estas starigita de
						Universala Esperanto Asocio UEA kaj Internacia Ligo de Esperantistaj Instruistoj
						ILEI kune. Ĝi ebligas ekkoni ĉiujn centrojn, iliajn agadojn, ofertojn, ecojn.
						Ĉiu Esperanto-centro povas akiri surfacon, sub-menuon en tiu paĝaro. Tie la
						respondeculoj de la centro, per persona pasvorto, povos daŭre aldoni donitaĵojn,
						informojn, agadprogramojn kaj similajn gravajn informojn. La publikaj uzantoj
						povos legi la tutan retejon sen aldoni ion ajn, konsulti la paĝaron.</p>
                    <div class="columns-2">
                        <ul class="social-footer">
                            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            </li>
                            <img width="200" src="{{asset('assets/images/slides/UEA.JPG')}}"
                                class="img-fluid rounded-circle admin-img admin-img1" alt="">
                                <img width="200" src="{{asset('assets/images/slides/ilei.png')}}"
                                class="img-fluid rounded-circle admin-img admin-img1" alt="">

                        </ul>
                    </div>
                </div>
                <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                    <h6>Lastaj afiŜoj</h6>
                    @foreach ($agadoj as $agado)
							@foreach ($aga  as $agas)
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="{{ asset('storage/actuality_photos/'.$agado->file1)}}" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                            <h5 class="inner">{{substr($agado->desc,0,20)}}...</h5>
                            </a>
                            <div class="td-post-date">{{date('d-m-Y', strtotime($agado->created_at))}}</div>
                        </div>

                    </div>
                    @endforeach
                    @endforeach
                    
                    

                </div>

                <div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
                    <h6>Ĉefpaĝo</h6>
                    <div class="columns-2 d-flex">
                        <ul class="footer-sub-gd mr-5">
                        <li><a href="{{route('contact')}}">Kontaktu nin</a></li> |
                            <li><a href="#">Pri ni</a></li> |
                        <li><a href="{{url('logon')}}">Ensaluti | </a></li>
                        <li><a href="{{url('register')}}">Registrigi | </a></li>
                            <li><a href="#">Confidenciality</a></li>
                        </ul>
                        <ul class="footer-sub-gd">
                            <li><a href="{{url('logon')}}">Ensaluti</a></li>
                            <li><a href="{{url('register')}}">Registrigi</a></li>
                            
                            <li><a href="#">Politiko kaj konfidenco</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="below-section">
        <div class="container">
            <div class="copyright-footer text-center">

                <p>© <script> document.write(new Date().getFullYear()); </script> Esperanto-centrojn. Ĉiuj rajtoj rezervitaj.| Realigita de 
					<a href="#" target="_blank">Mireille Grosjean, Prezidanto de ilei kaj Gobi Ayssinie Ahonon, Softvara inĝeniero</a>
                </p>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <script>
            (function() {
       if (!localStorage.getItem('cookieconsent')) {
           document.body.innerHTML += '\
           <div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
            Ĉi tiu retejo uzas kuketojn por plibonigi viajn preferojn. Daŭrante foliumi ĉi tiun retejon, vi konsentas ilian uzon. \
               <a class="btn more black text-white" href="#">Mi komprenas</a>\
           </div>\
           ';
           document.querySelector('.cookieconsent a').onclick = function(e) {
               e.preventDefault();
               document.querySelector('.cookieconsent').style.display = 'none';
               localStorage.setItem('cookieconsent', true);
           };
       }
   })();
        </script>
        <!-- /move top -->
    </div>
    <!-- copyright -->



</footer>
<!--//footer-66 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

</body>

</html>
