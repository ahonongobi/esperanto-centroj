

<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title> Esperanto-centrojn </title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700,800&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


  <meta name="csrf-token" content="{{ csrf_token() }}" />


</head>

<body>
<!-- Headers-4 block -->
<div id="home" class="inner-w3pvt-page" style="background-image: url('{{ asset('storage/actuality_photos/3210514804.jpg')}}')">
	<div class="overlay-innerpage">
		<!--/top-nav -->
		<div class="top_w3pvt_main container">
			<!--/header -->
			<header class="nav_w3pvt text-center">
				<!-- nav -->
				<nav class="wthree-w3ls">
					<div id="logo">
						<h1> <a class="navbar-brand px-0 mx-0" href="/">ILEI
							</a>
						</h1>
					</div>

					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mr-auto">
						<li><a href="/">ĉefpaĝo</a></li>
						<li><a href="">Pri ni</a></li>
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
						<li><a href="{{route('registerpage')}}">Ensaluti</a></li>
						<li><a href="{{route('contact')}}">Kontaktu</a></li>

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

	
</section>
<!-- //w3l-banner-slider-main -->
<section>
	
</section>
<section class="w3l-mag-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">

		<div class="container">
			<h3 class="hny-title text-center">Rigardu <span> Eventoj</span></h3>

			<ul>
				@foreach ($allpost as $gobi)
				<li class="booking-card" style="">

					<div class="book-container">
						<img style="max-width: 100%;min-width:100%; max-height:100%;" src="{{ asset('storage/actuality_photos/'.'/'.$gobi->file1)}}" alt="" srcset="">

						<p style="height: 5%"></p>
					<h2 class="title">{{$gobi->title}}</h2>
						
					  </div>
					  
					
					<div class="informations-container">
					  <h2 class="title">Je suis moi aussi un billet</h2>
					  <p class="sub-title">{{$gobi->description1}}</p>
					  <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
				</svg>De 0 à 35 €</p>
					  <div class="more-information">
						<div class="info-and-date-container">
						  <div class="box info">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
				  </svg>
							<p></p>
						  </div>
						  <div class="box date">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
				  </svg>
							<p></p>
						  </div>
						</div>
					<p class="disclaimer"></p>
						</div>
					</div>
				  </li>	

				  
				<li class="booking-card" style="">

					<div class="book-container">
						<img style="max-width: 100%;min-width:100%; max-height:100%;" src="{{ asset('storage/actuality_photos/'.'/'.$gobi->file2)}}" alt="" srcset="">

						<p style="height: 5%"></p>
					<h2 class="title">{{$gobi->title}}</h2>
						<p class="sub-title">Et moi je suis un 2ème sous-titre</p>
					  </div>
					  
					
					<div class="informations-container">
					  <h2 class="title">Je suis moi aussi un billet</h2>
					  <p class="sub-title">{{$gobi->description1}}</p>
					  <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
				</svg>De 0 à 35 €</p>
					  <div class="more-information">
						<div class="info-and-date-container">
						  <div class="box info">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
				  </svg>
							<p>Parlement de Bretagne à RENNES</p>
						  </div>
						  <div class="box date">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
				  </svg>
							<p>À partir du Dimanche 3 Juin 2020</p>
						  </div>
						</div>
					<p class="disclaimer">{{$gobi->description2}}</p>
						</div>
					</div>
				  </li>	
				  
				<li class="booking-card" style="">

					<div class="book-container">
						<img style="max-width: 100%;min-width:100%; max-height:100%;" src="{{ asset('storage/actuality_photos/'.'/'.$gobi->file3)}}" alt="" srcset="">

						<p style="height: 5%"></p>
					<h2 class="title">{{$gobi->title}}</h2>
						<p class="sub-title">Et moi je suis un 2ème sous-titre</p>
					  </div>
					  
					
					<div class="informations-container">
					  <h2 class="title">Je suis moi aussi un billet</h2>
					  <p class="sub-title">{{$gobi->description1}}</p>
					  <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
				</svg>De 0 à 35 €</p>
					  <div class="more-information">
						<div class="info-and-date-container">
						  <div class="box info">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
				  </svg>
							<p>Parlement de Bretagne à RENNES</p>
						  </div>
						  <div class="box date">
							<svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
					  <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
				  </svg>
							<p>À partir du Dimanche 3 Juin 2020</p>
						  </div>
						</div>
					<p class="disclaimer">{{$gobi->description3}}</p>
						</div>
					</div>
				  </li>	

				  
				
				@endforeach
				

		   </ul>
		   <div class="row pagination d-flex justify-content-center">{!! $allpost->appends(Request::all())->links() !!}</div>

			<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center"> Freŝaj<span> novaĵoj</span></h3>
				@if($count2==0)
			         <center><p>Ne havas novajn agadprogramojn</p></center>
				@endif
				<div class="ban-content-inf row py-lg-3">
                      @foreach ($recentposts as $recentpost)
					  <div class="maghny-gd-1 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$recentpost->file1)}}">
								<figcaption>


								</figcaption>
							</figure>
						</div>
						<h5 class="top-title mb-3"><a href="#">{{$recentpost->title}} </a> </h5>
					<p>{{$recentpost->desc}}</p>
						<div class="mag-post-meta mt-3"><span class="meta-author text-uppercase"><span>By&nbsp;</span><a
									href="#" class="author-name"> John
									Brain</a> </span>
						<span class="author-date">{{date('d-m-Y',strtotime($recentpost->created_at))}}</span>
						</div>
						<div style="display: flex; ">
							<a href="blog-single" class="read-more btn mt-3">Legu pli</a>
							<a  style="margin-left: 60%;" href="#komment" class=""><img width="32" height="32" src="{{asset('assets/images/slides/images/chat.png')}}" alt="" srcset=""></a>
						<input type="hidden" name="token" id="token2" value="{{csrf_token()}}">
						<a style="margin-left: 40px; cursor:pointer" id="ajaxbtn" href="{{url('likes/'.$recentpost->id.'/'.$id.'/'.$recentpost->file1)}}"  class=""><img  src="{{asset('assets/images/slides/images/like_variation.png')}}" alt="" srcset=""></a>
							
						</div>
					</div>
					  @endforeach
					
				</div>
			</div>
			<div class="blog-inner-grids py-md-4">
				<div class="mag-content-left-hny">
					<!--//mag-left-grid-1-->
					<div class="mag-hny-content mb-lg-5">
						<h3 class="hny-title">Agadoj <span></span></h3>
						
							@if($count2==0)
						<center><p>Ne havas novajn agadprogramojn</p></center>
					        @endif
						<div class="maghny-grids-inf row">
							@foreach ($allposts as $allpost)
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$recentpost->file1)}}" alt="">

									</figure>
								</div>
								<h5><a href="#">
								{{$allpost->title}}</a></h5>
								<p>{{$allpost->desc}}</p>
								<div class="mag-post-meta"><a href="#"><img src="{{asset('assets/images/admin.jpg')}}"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
										<span class="author-date">{{date('d-m-Y',strtotime($allpost->created_at))}}</span>
								</div>
							</div>
							@endforeach
							
					</div>
					<div class="row pagination d-flex justify-content-center">{!! $allposts->appends(Request::all())->links() !!}</div>

					<!--//mag-left-grid-2-->
                  
					<!--/mag-left-grid-6-->
					
					<div class="container">
						<h3 class="hny-title">Videoj<span>Kategorioj</span></h3>
						@if($count3==0)
						<center><p>Ne havas novajn agadprogramojn</p></center>
					        @endif
						<div class="row">
							@foreach ($videos as $video)
							<div class="col-lg-4 col-12">
								<video  class="agado" width="350" height="240" controls>
									<source src="{{asset('storage/actuality_photos/'.$video->videos)}}" type="video/mp4">
									<source src="movie.ogg" type="video/ogg">
								  Your browser does not support the video tag.
								  </video> 
		
								<h4>
									<div></div>
									<a style="font-weight:bold; font-size:16px;" href="#">{{$video->desc}}</a> </h4>
							  </div>			
							@endforeach

						  
						</div>
					  </div>
					  <div class="row pagination d-flex justify-content-center">{!! $videos->appends(Request::all())->links() !!}</div>

					<!--//mag-hny-content-6-->
					<!--/social-->
					<!-- infos -->

					<div class="mag-hny-content my-lg-5 pt-lg-5">
						<h3 class="hny-title">Specifajoj <span></span></h3>
						<!--/social-media-->
						@if($countInfo==0)
							<p><center>Ne ankoaraux</center></p>

						@else
						<div class="mag-small-post my-lg-3 my-4">
							<div class="social-media-icons row">
								
								<div  class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-user"
											aria-hidden="true"></span>
										<div  class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Nomo</span>
										<span class="sub_social_info sub_social_info_name"> {{$infos[0]->center}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color:yellow" href="#" class="sub-facebook twitter"><span class="fa fa-location-arrow"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Lokejo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->lokejo}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: orange" href="#" class="sub-facebook twitter"><span class="fa fa-book"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Bibliotheque</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->bibliothque}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-book"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Libroservo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->libroservo}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-coffee"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Mangheblo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->mangheblo}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: yellow" href="#" class="sub-facebook twitter"><span class="fa fa-bed"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Dormeblo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->dormeblo}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: orange" href="#" class="sub-facebook twitter"><span class="fa fa-users"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Kursejo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->kursejoklasochambro}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-112 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-phone"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Telefono</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->Telefono}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-10 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-meetup"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Specifaj trajtoj</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->trajto}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-10 mt-3">
									<a style="background-color:yellow" href="#" class="sub-facebook twitter"><span class="fa fa-envelope"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Kontaktadreso</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->Kontaktadreso}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: orange" href="#" class="sub-facebook twitter"><span class="fa fa-meetup"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Agado</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->agado}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: #f0f0f0" href="#" class="sub-facebook twitter"><span class="fa fa-window-maximize"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Retejo</span>
											<span class="sub_social_info sub_social_info_name">{{$infos[0]->retejo}}</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: yellow" href="#" class="sub-facebook twitter"><span class="fa fa-hacker-news"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Jaro</span>
											<span class="sub_social_info sub_social_info_name">Jaro</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-12 mt-3">
									<a style="background-color: orange" href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">Kiel atingi</span>
											<span class="sub_social_info sub_social_info_name">{{$email[0]->email}}</span>
										</div>
									</a>
								</div>
								
								<!--/social-media-->
							</div>
						</div>
						@endif
					
					</div>
					<!--end info-->
					<div class="mag-hny-content my-lg-5 pt-lg-5">
						<h3 class="hny-title">Sekvu nin <span></span></h3>
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
									<a href="#" class="sub-facebook google"><span class="fa fa-hand-o-right"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">+14,507</span>
											<span class="sub_social_info sub_social_info_name">Like</span>
										</div>
									</a>


								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook dribble"><span class="fa fa-comments"
											aria-hidden="true"></span>
										<div class="soc-info">
										<span class="sub_social_info sub_social_info_counter">{{$Countcomments}}</span>
											<span class="sub_social_info sub_social_info_name">Commentaire</span>
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
			
			<div class="container">
				<div class="row bootstrap snippets bootdeys">
					<div class="col-md-12 col-sm-12">
						<div class="comment-wrapper">
							<div class="panel panel-info">
								<div class="panel-heading">
									Komentoj
								</div>
								<div id="komment" class="panel-body">

								<form action="{{url('ajax')}}" method="post">
									
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
								<input type="hidden" name="centre_id" value="{{$id}}">
									<textarea name="message" id="message" class="form-control" placeholder="skribu komento..." rows="3"></textarea>
									@if($errors->has('message'))
									<p style="color: red;" class="text-red">{{ $errors->first('message') }}</p>
							   @endif
								<br>
								<button  id="" class="btn btn-info pull-right">Postu <i class="fa fa-send"></i></button>

								  </form>
							      
									
									<div class="clearfix"></div>
									<hr>
									<ul class="media-list">
										@foreach ($comments as $comment)
										<li class="media">
											<a href="#" class="pull-left">
												<img style="border-radius: 50%;" src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
											</a>
											<div class="media-body">
												<span class="text-muted pull-right">
												<small style="font-size: 20px;"  class="text-muted">{{$comment->created_at->format('d-m-Y')}}</small>
												</span>
												<strong class="text-success">@Komentanto</strong>
												<p>
													{{$comment->message}}
													
												</p>
											</div>
										</li>
										@endforeach
										
										
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				</div>
			<!--/newsletter
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
			//newsletter-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/sliderPro.min.js')}}"></script>
	<script>
	
	$(document).ready(function(){
		$('#ajaxbtn').click(function(){
			
			
			var token = $("#token2").val();
		     alert(token);
			
			$.ajax({
				url:"{{ url('likes') }}", 
			    type:"POST", 
				data:"centre_id="+ <?php echo $id; ?> "&_token="+token, 
				sucess:function(data){
				   console.log(data);
				},
			});
		});

	});
		
	</script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message')){
            var type= "{{Session::get('alert-type','info')}}";
            switch(type){
              case'info':
              toastr.info("{{Session::get('message')}}");
              break;
              case'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
              case'success':
              toastr.success("{{Session::get('message')}}");
              break;
            } 
          } 
          
           
  
        @endif
        
	  </script>
 
</body>

</html>