

<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Webzine Entertainment & Blog Category Responsive Website Template | Lifestyle </title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700,800&display=swap" rel="stylesheet">
  <!-- Template CSS -->


</head>

<body>
<!-- Headers-4 block -->
<div id="home" class="inner-w3pvt-page">
	<div class="overlay-innerpage">
		<!--/top-nav -->
		<div class="top_w3pvt_main container">
			<!--/header -->
			<header class="nav_w3pvt text-center">
				<!-- nav -->
				<nav class="wthree-w3ls">
					<div id="logo">
						<h1> <a class="navbar-brand px-0 mx-0" href="index.html">ILEI
							</a>
						</h1>
					</div>

					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mr-auto">
						<li><a href="index.html">ĉefpaĝo</a></li>
						<li><a href="about.html">Pri ni</a></li>
						<li>
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle toggle-2">Centroj <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
							<a href="#">Centroj <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>

								<li><a href="services.html" class="drop-text">Services</a></li>
								<li><a href="timeline.html" class="drop-text">Timeline</a></li>
								<li><a href="team.html" class="drop-text">Team</a></li>
								<li><a href="typo.html" class="drop-text">Typography</a></li>
								<li><a href="error.html" class="drop-text">Faq's</a></li>
								<li><a href="error.html" class="drop-text">Social Media</a></li>
							</ul>
						</li>
						<li><a href="index.html">Ensaluti</a></li>
						<li><a href="contact.html">Kontaktu</a></li>

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

			<!--/breadcrumb-->
			<div class="inner-w3pvt-page-info">
				<ol class="breadcrumb d-flex">
					<li class="breadcrumb-item">
						<a href="index.html">ĉefpaĝo</a>
					</li>
					<li class="breadcrumb-item active">Single Page</li>
				</ol>

			</div>
			<!--//breadcrumb-->
		</div>
		<!-- //top-nav -->
	</div>
</div>
<!--w3l-banner-slider-main-->

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/sliderPro.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example2' ).sliderPro({
				width: '50%',
				height: 500,
				aspectRatio: 1.5,
				visibleSize: '100%',
				forceSize: 'fullWidth'
			});
	
			// instantiate fancybox when a link is clicked
			$( '#example2 .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
				event.preventDefault();
	
				// check if the clicked link is also used in swiping the slider
				// by checking if the link has the 'sp-swiping' class attached.
				// if the slider is not being swiped, open the lightbox programmatically,
				// at the correct index
				if ( $( '#example2' ).hasClass( 'sp-swiping' ) === false ) {
					$.fancybox.open( $( '#example2 .sp-image' ).parent( 'a' ), { index: $( this ).parents( '.sp-slide' ).index() } );
				}
			});
		});
	</script>
</section>
<!-- //w3l-banner-slider-main -->
<section class="w3l-mag-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container">
			<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center"> Freŝaj<span> novaĵoj</span></h3>
				<div class="ban-content-inf row py-lg-3">

					<div class="maghny-gd-1 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="assets/images/slides/images/CDELI.JPG">
								<figcaption>


								</figcaption>
							</figure>
						</div>
						<h5 class="top-title mb-3"><a href="#">Unika Pako de Revuaj Novaĵoj por Via Retejo, Estas
							multaj variaĵoj, kiuj fokusas pri prezentado </a> </h5>
							<p> Vivamus a ligula quam. Ut blandit eu leo ​​non suscipit. Duis feugiat tortor sed.Nulla quis
							lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis
							lorem neque</p>
						<div class="mag-post-meta mt-3"><span class="meta-author text-uppercase"><span>By&nbsp;</span><a
									href="#" class="author-name"> John
									Brain</a> </span>
							<span class="author-date">Jan 5, 2020</span>
						</div>
						<div style="display: flex; ">
							<a href="blog-single" class="read-more btn mt-3">Legu pli</a>
							<a  style="margin-left: 60%;" href="blog-single" class=""><img width="32" height="32" src="assets/images/slides/images/chat.png" alt="" srcset=""></a>
							<a style="margin-left: 40px;" href="blog-single" class=""><img src="assets/images/slides/images/like_variation.png"" alt="" srcset=""></a>
							
						</div>
					</div>
					<div class="maghny-gd-1 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="assets/images/slides/images/JoCa Kotonuo.JPG">
								<figcaption>


								</figcaption>
							</figure>
						</div>
						<h5 class="top-title mb-3"><a href="#">Unika Pako de Revuaj Novaĵoj por Via Retejo, Estas
							multaj variaĵoj, kiuj fokusas pri prezentado </a> </h5>
							<p> Vivamus a ligula quam. Ut blandit eu leo ​​non suscipit. Duis feugiat tortor sed.Nulla quis
							lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis
							lorem neque<</p>
						<div class="mag-post-meta mt-3"> <span
								class="meta-author text-uppercase"><span>By&nbsp;</span><a href="#" class="author-name">
									John
									Brain</a> </span>
							<span class="author-date">Jan 5, 2020</span>
						</div>
						<div style="display: flex; ">
							<a href="blog-single" class="read-more btn mt-3">Legu pli</a>
							<a  style="margin-left: 60%;" href="blog-single" class=""><img width="32" height="32" src="assets/images/slides/images/chat.png" alt="" srcset=""></a>
							<a style="margin-left: 40px;" href="blog-single" class=""><img src="assets/images/slides/images/like_variation.png"" alt="" srcset=""></a>
							
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner-grids py-md-4">
				<div class="mag-content-left-hny">
					<!--//mag-left-grid-1-->
					<div class="mag-hny-content mb-lg-5">
						<h3 class="hny-title">Agadoj <span></span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid9.jpg" alt="">

									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid5.jpg">

									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid12.jpg" alt="">

									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>

							<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
									<div class="maghny-grid">
										<figure class="effect-lily">
											<img class="img-fluid" src="assets/images/grid17.jpg" alt="">
	
										</figure>
									</div>
									<h5><a href="#">
											There are many variations that focuses on presenting</a></h5>
									<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
									<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
												class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
											class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
												Brain</a> </span>
										<span class="author-date">Jan 5, 2020</span>
									</div>
								</div>

								<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
										<div class="maghny-grid">
											<figure class="effect-lily">
												<img class="img-fluid" src="assets/images/grid14.jpg" alt="">
		
											</figure>
										</div>
										<h5><a href="#">
												There are many variations that focuses on presenting</a></h5>
										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
										<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
													class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
												class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
													Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
									<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
											<div class="maghny-grid">
												<figure class="effect-lily">
													<img class="img-fluid" src="assets/images/grid18.jpg" alt="">
			
												</figure>
											</div>
											<h5><a href="#">
													There are many variations that focuses on presenting</a></h5>
											<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
											<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
														class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
													class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
														Brain</a> </span>
												<span class="author-date">Jan 5, 2020</span>
											</div>
										</div>
						</div>
					</div>
					<!--//mag-left-grid-2-->

					<!--/mag-left-grid-6-->
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">Videoj<span>Kategorioj</span></h3>
						<div class="fashny-grids-inf row">
							<div class="fashion-gd-1 col-lg-3">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="post-video-grid">
												<div class="video-content mb-3">
													<a href="#notify" class="play-button btn"><span class="fa fa-play"
															aria-hidden="true">
			
														</span></a>
			
													<!-- notify-popup-->
													<div id="notify" class="notify-pop-overlay">
														<div class="notify-popup">
															<h5>Watch Our Video</h5>
															<iframe src="https://player.vimeo.com/video/156953364" frameborder="0"
																allow="autoplay; fullscreen" allowfullscreen></iframe>
															<a class="close" href="#coming-s">&times;</a>
														</div>
													</div>
													<!-- //notify-popup -->
												</div>
												<h4 class="mag-post-title">
													<a href="#">A New Report Shows That Fashion Ads Are Still Overwhelmingly
														White
														Dresses</a> </h4>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-3">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="post-video-grid">
												<div class="video-content mb-3">
													<a href="#notify" class="play-button btn"><span class="fa fa-play"
															aria-hidden="true">
			
														</span></a>
			
													<!-- notify-popup-->
													<div id="notify" class="notify-pop-overlay">
														<div class="notify-popup">
															<h5>Watch Our Video</h5>
															<iframe src="https://player.vimeo.com/video/156953364" frameborder="0"
																allow="autoplay; fullscreen" allowfullscreen></iframe>
															<a class="close" href="#coming-s">&times;</a>
														</div>
													</div>
													<!-- //notify-popup -->
												</div>
												<h4 class="mag-post-title">
													<a href="#">A New Report Shows That Fashion Ads Are Still Overwhelmingly
														White
														Dresses</a> </h4>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-3">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="post-video-grid">
												<div class="video-content mb-3">
													<a href="#notify" class="play-button btn"><span class="fa fa-play"
															aria-hidden="true">
			
														</span></a>
			
													<!-- notify-popup-->
													<div id="notify" class="notify-pop-overlay">
														<div class="notify-popup">
															<h5>Watch Our Video</h5>
															<iframe src="https://player.vimeo.com/video/156953364" frameborder="0"
																allow="autoplay; fullscreen" allowfullscreen></iframe>
															<a class="close" href="#coming-s">&times;</a>
														</div>
													</div>
													<!-- //notify-popup -->
												</div>
												<h4 class="mag-post-title">
													<a href="#">A New Report Shows That Fashion Ads Are Still Overwhelmingly
														White
														Dresses</a> </h4>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-3">
									<div class="fas-gallery-grid">
										<a href="#">
											<div class="content">
												<div class="post-video-grid">
													<div class="video-content mb-3">
														<a href="#notify" class="play-button btn"><span class="fa fa-play"
																aria-hidden="true">
				
															</span></a>
				
														<!-- notify-popup-->
														<div id="notify" class="notify-pop-overlay">
															<div class="notify-popup">
																<h5>Watch Our Video</h5>
																<iframe width="1221" height="763" src="https://www.youtube.com/embed/R8wFz2u0U8U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																<a class="close" href="#coming-s">&times;</a>
															</div>
														</div>
														<!-- //notify-popup -->
													</div>
													<h4 class="mag-post-title">
														<a href="#">A New Report Shows That Fashion Ads Are Still Overwhelmingly
															White
															Dresses 2</a> </h4>
												</div>
											</div>
										</a>
									</div>
								</div>
						</div>

					</div>
					<!--//mag-hny-content-6-->
					<!--/social-->
					<div class="mag-hny-content my-lg-5 pt-lg-5">
						<h3 class="hny-title">Sekvu nin <span>on</span></h3>
						<!--/social-media-->
						<div class="mag-small-post my-lg-3 my-4">
							<div class="social-media-icons row">
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook"><span class="fa fa-facebook"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>

									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook google"><span class="fa fa-google"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>


								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook dribble"><span class="fa fa-dribbble"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<!--/social-media-->
							</div>
						</div>
					</div>
					<!--//social-->
				</div>
			</div>
			<!--/newsletter-->
			<div class="form-inner-newsletter py-lg-5">

				<div class="newsletter-infhny p-5 mt-lg-0 mt-5">
					<div class="newsletter-inn-con p-lg-5">
						<p>Ĉu vi ŝatus aboni ĉi tiun centron aŭ fariĝi membro?</p>
						<h2>Registriĝu ĉi tie por esti kontaktita!</h2>

						<form action="#" method="post" class="newsletter-form mt-md-5">
							<div class="form-input">
								<input type="text" name="name" class="form-control "
									placeholder="Enigu vian nomo " required="">
								<input type="email" name="email" class="form-control mt-3"
									placeholder="Enigu vian retpoŝtan adreson" required="">
							</div>
							<div class="form-input mt-4"><button class="btn">Subscribe</button></div>
						</form>
					</div>
				</div>
			</div>
			<!--//newsletter-->
		</div>
	</div>
	<!--//mag-content-->
</section>
<!-- footer-66 -->
<footer class="w3l-footer-66">
    <section class="footer-inner-main py-md-5 py-5">
        <div class="container">
            <div class="footer-top row">
                <div class="sub-one-left col-lg-4 col-md-6">
                    <h6>Pri Esperanto Centroj</h6>
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

                        </ul>
                    </div>
                </div>
                <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                    <h6>Editor Pics</h6>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="assets/images/m4.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="assets/images/m1.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>
                    <div class="row editor-pics mb-3">
                        <div class="col-3 item-pic">
                            <img src="assets/images/m3.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="col-9 item-details">
                            <a href="#">
                                <h5 class="inner">More Than 120 ER Visits Linked To Synthetic WordPress In
                                    NYC...</h5>
                            </a>
                            <div class="td-post-date">Jan 22, 2019</div>
                        </div>

                    </div>

                </div>

                <div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
                    <h6>Information</h6>
                    <div class="columns-2 d-flex">
                        <ul class="footer-sub-gd mr-5">
                            <li><a href="#">Celebrities</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="lifestyle.html">Lifestyle</a></li>
                            <li><a href="#">Blog Page</a></li>
                        </ul>
                        <ul class="footer-sub-gd">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Signup</a></li>
                            <li><a href="#">Author</a></li>
                            <li><a href="#">Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="below-section">
        <div class="container">
            <div class="copyright-footer text-center">

                <p>© 2020 Esperanto-centrojn. Ĉiuj rajtoj rezervitaj.| Realigita de 
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
        <!-- /move top -->
    </div>
    <!-- copyright -->



</footer>
<!--//footer-66 -->
</body>

</html>