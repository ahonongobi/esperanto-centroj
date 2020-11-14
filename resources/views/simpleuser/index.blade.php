@extends('layouts/_index')

@section('content')
<section class="about">
	<div class="container p-md-5">
		<div class="about-hny-info text-left px-md-5">
			<h3 class="tittle-w3ls mb-3"><span class="pink">NOVA ILO</span> POR NI ĈIUJ</h3>
			<p class="sub-tittle mt-3 mb-4">Tiu retejo prezentas la Esperanto-centrojn en la tuta mondo. Ĝi estas starigita de
				Universala Esperanto Asocio UEA kaj Internacia Ligo de Esperantistaj Instruistoj
				ILEI kune. Ĝi ebligas ekkoni ĉiujn centrojn, iliajn agadojn, ofertojn, ecojn.</p>
			<a class="btn more black" href="" role="button">Legu pli</a>
		</div>
	</div>
</section>

<section class="w3l-mag-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-2">
		<div class="container">
			<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center">Lastatempaj <span> Novaĵoj</span></h3>
				@foreach($pictures as $picture)
				<div class="ban-content-inf row py-lg-3">
					<div class="maghny-gd-1 col-lg-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$picture->file1)}}" alt="">
								<figcaption class="w3set-hny">
									<div>
										<h4 class="top-text">{{$picture->description1}}
											<span>{{$picture->center}}</span></h4>
										<p>{{date('d-m-Y', strtotime($picture->created_at))}} </p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
					<div class="maghny-gd-1 col-lg-6">
						<div class="row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$picture->file2)}}">
										<figcaption>
											<div>
												<!--<h4>woman near <span>pigeons</span></h4> -->
												<p>{{date('d-m-Y', strtotime($picture->created_at))}} </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5 class="top-title"><a href="#">{{$picture->description2}}</a></h5>

								<div class="mag-post-meta mt-3"><span
										class="meta-author text-uppercase">
									<span class="author-date">{{date('d-m-Y', strtotime($picture->created_at))}}</span>
								</div>
								<a href="#" class="read-more btn mt-3">Legu pli</a>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$picture->file3)}}">
										<figcaption>
											<div>
												<!--<h4>Man standing on railroad near <span>plants</span></h4>-->
												<p>{{date('d-m-Y', strtotime($picture->created_at))}} </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5 class="top-title"><a href="#">
									{{$picture->description3}}</a></h5>
								<div class="mag-post-meta mt-3"> <span
										class="meta-author text-uppercase" 
									<span class="author-date">{{date('d-m-Y', strtotime($picture->created_at))}}</span>
								</div>
								<a href="#" class="read-more btn mt-3">Legu pli</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="blog-inner-grids py-md-4 row">
				<div class="mag-content-left-hny col-lg-8">
					<!--/mag-hny-content-1-->
					<div class="mag-hny-content">
						<h3 class="hny-title">Lastaj <span>Agadprogramojn</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							@foreach ($agadoj as $agado)
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$agado->file1)}}" alt="">
										<figcaption>
											<div>
												<h4>{{$agado->title}} <span>{{$agado->center}}</span></h4>
												<p>{{date('d-m-Y', strtotime($agado->created_at))}}</p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
									{{$agado->desc}}</a></h5>

								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">{{date('d-m-Y', strtotime($agado->created_at))}}</span>
								</div>
							</div>
							
							@endforeach
							
						</div>
					</div>
					<!--//mag-hny-content-1-->
					<!--//mag-left-grid-1
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">Bonega <span>vivsitlo</span></h3>
						
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid4.jpg" alt="">
										<figcaption>
											<div>
												<h4>Sittin people beside table inside <span> room</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid5.jpg">
										<figcaption>
											<div>
												<h4>Tidy Room Filled with <span>furniture</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
						
						<div class="row mng-front-cont mt-5">
							<div class="mag-small-post col-md-6">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a> </h4>
										<div class="mag-post-meta mt-3"> <span
												class="meta-author"><span>By&nbsp;</span><a href="#"
													class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>
										<div class="mag-post-meta mt-3"> <span
												class="meta-author"><span>By&nbsp;</span><a href="#"
													class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a> </h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>


							</div>
							<div class="mag-small-post col-md-6">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m12.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a> </h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m9.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m10.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a> </h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m11.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!--//mag-left-grid-2-->
					<!--/mag-hny-content-1-->
					<div class="mag-hny-content my-lg-5 mt-5">
						<h3 class="hny-title">Esperanto-<span>centroj</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							@foreach ($centroj as $centro)
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
									<img class="img-fluid" src="{{ asset('storage/actuality_photos/'.$centro->logo)}}">
										<figcaption>
											<div>
												<h4><span>{{$centro->centro}}</span></h4>
												<p>{{date('m-d-Y',strtotime($centro->created_at))}}</p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
								{{$centro->vortoj}}</a></h5>
 
								<div style="margin-bottom: 10%;" class="mag-post-meta"><a href="{{url('/info/'.$centro->id)}}" class="btn more black">Legu Pli</a>
								<span class="author-date">{{date('m-d-Y',strtotime($centro->created_at))}}</span>
									
								</div>
							</div>
							@endforeach
							
						</div>
					
					</div>
					
					<!--//mag-hny-content-1-->
					<!--/mag-hny-content-3
					<div class="mag-hny-content mb-5">
						<h3 class="hny-title">Esperanto-<span>centrojn</span></h3>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/slides/images/cdeli .jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										Esperanto centro de la Chaux-de-Fonds,Svisio</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"> <span>Publikigi&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Eta priskribo pri la centro kaj divercesoj...</p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>
						<div class="maghny-grids-inf row my-5">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/slides/images/helsinki.JPG " class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										Esperanto centro de Helsinki.</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Publikigi&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Eta priskribo pri la centro kaj divercesoj.... </p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>
						<div class="maghny-grids-inf row my-5">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/slides/images/JoCa Kotonuo balkono.JPG " class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										Esperanto centro de Cotonou,Benin.</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Publikigi&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Eta priskribo pri la centro kaj divercesoj.... </p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>
						<div class="maghny-grids-inf row my-5">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/slides/Roterdamo_Nederlando_Centra_Oficejo_de_UEA_NOM_A_METTRE.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										Esperanto centro de Roterdamo.</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Publikigi&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Eta priskribo pri la centro kaj divercesoj.... </p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/slides/images/Herzberg antau la Kulturcentro.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										Esperanto centro de Herzberg antau la Kulturcentro</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Publikigi&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Eta priskribo pri la centro kaj divercesoj.... </p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>

					</div> -->
					
					<!--//mag-hny-content-3-->
					<!--/mag-left-grid-6-->
					<div class="mag-hny-content my-lg-5 mb-5">
						<h3 class="hny-title">Plej<span>ŝatata</span></h3>
						<div class="fashny-grids-inf row">
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid11.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Food</h4>

											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid12.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Fashions</h4>

											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid13.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Celebrities</h4>

											</div>
										</div>
									</a>
								</div>
							</div>

						</div>

					</div>
					<!--//mag-hny-content-6-->

					<!--/mag-hny-content-3-->
					<div class="mag-hny-content my-lg-5 mb-5">
						<h3 class="hny-title">Listoj de <span>Agadprogramojn</span></h3>
						@foreach($allagadoj as $allagado)
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="{{ asset('storage/actuality_photos/'.$allagado->file1)}}" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
									{{$allagado->title}}</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"> <span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">{{date('d-m-Y', strtotime($allagado->created_at))}}</span>
								</div>
							<p class="para my-3">{{$allagado->desc}}</p>
								<a href="#" class="read-more btn">Legu pli</a>

							</div>


						</div>
						@endforeach
					

					</div>
					<!--//mag-hny-content-3-->
					<!--//mag-left-grid-5-->
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Centraj  <span>Eventoj</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/slides/images/JoCa Kotonuo en korto.JPG" alt=""></a>
								</div>
								<h5><a href="#">
									seminario pri virina gvidado...</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Centro JoCa&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/slides/images/UEA Roterdamo movebalaj shrankoj.JPG" alt=""></a>
								</div>
								<h5><a href="#">
										UEA Reoterdamo movebalaj shrankoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/slides/images/JoCa Kotonuo en korto.JPG" alt=""></a>
								</div>
								<h5><a href="#">
									seminario pri virina gvidado...</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>Centro JoCa&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/slides/images/UEA Roterdamo movebalaj shrankoj.JPG" alt=""></a>
								</div>
								<h5><a href="#">
										UEA Reoterdamo movebalaj shrankoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-left-grid-5-->
					<!--/social-->
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Sekvu nin <span> on</span></h3>
						<!--/social-media-->
						<div class="mag-small-post my-lg-3">
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
								<div class="grid-social-box col-lg-3 col-sm-6 ">
									<a href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6 ">
									<a href="#" class="sub-facebook google"><span class="fa fa-google"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>


								</div>
								<div class="grid-social-box col-lg-3 col-sm-6 ">
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
					<!--/health
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Be <span>Health</span></h3>
						
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid18.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid19.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					//health-->
					<!--/mag-hny-content-4-->
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">membroj  <span>de estraro</span></h3>
						<!--  Demos -->
						<div id="demos">
							<div class="owl-carousel owl-theme grid-col-4">
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid1.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid2.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid3.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid6.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid7.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid8.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid1.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid3.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid2.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-hny-content-4-->
				</div>

				<div class="mag-content-right-hny col-lg-4">
					<aside>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Plej <span>Vidita</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Group of women dancing on stage</a> </h4>

										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Photo of man wearing astronaut suit hanging near cameras</a>
										</h4>

										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Pancake with chocolate syrup on ceramic plate</a> </h4>


										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">White and pink petaled flowers on metal fence near
												concrete</a>
										</h4>


										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Top <span>Categories</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">

										<a href="#"><img src="assets/images/m11.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Fashion</a> </h4>


									</div>
								</div>



								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m10.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details align-items-center col-9">
										<h4 class="mag-post-cate">
											<a href="#">Culture</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">

										<a href="#"><img src="assets/images/m12.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">LifeStyle</a>
										</h4>

									</div>
								</div>
								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m9.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Food</a>
										</h4>



									</div>
								</div>


								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m13.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Business</a>
										</h4>
									</div>
								</div>

							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<div class="mag-small-post">
								<div class="mag-add-post">
									<a href="#"><img src="assets/images/add.jpg" alt=""
											class="img-fluid"></a>
								</div>
							</div>
						</div>

						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Plej  <span>novaj filmetoj</span></h4>
							<div class="mag-small-post">
								@foreach ($videoj as $video)
								<div class="post-video-grid">
									<video  class="agado" width="350" height="240" controls>
										<source src="{{asset('storage/actuality_photos/'.$video->videos)}}" type="video/mp4">
										<source src="movie.ogg" type="video/ogg">
									  Your browser does not support the video tag.
									  </video> 
									<h4 class="mag-post-title">
									<a href="#">{{$video->desc}}</a> </h4>
								</div>
								@endforeach
								
						
							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Popularaj<span> Afiŝoj </span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">

										<h6 class="num-text">01</h6>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>


									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">02</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">

										<h6 class="num-text">03</h6>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">04</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>



									</div>
								</div>


								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">05</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>



									</div>
								</div>

								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">06</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>



									</div>
								</div>

								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">07</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a>
										</h4>



									</div>
								</div>

							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Lastatempaj <span>Komentoj</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">Anna Delpan</a> </h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>
									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#"> Daniel Doe</a>
										</h4>
										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">Steve Smith</a> </h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">John Smith</a>
										</h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



							</div>
						</div>
						
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Ne  <span>maltrafu tiuj</span></h4>
							<div class="mag-small-post dont-miss-grids-inf">
								<div class="maghny-gd-1">
									<div class="maghny-grid mb-3 dont-miss">
										<a href="#"><img class="img-fluid" src="assets/images/m5.jpg" alt=""></a>
									</div>
									<h5><a href="#">
											Eta skribo koncerne ciu esperanto centro kaj diversajoj....</a></h5>
									<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.
									</p>
									<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
												class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
											class="meta-author"><span>By&nbsp;</span><a href="#"
												class="author-name">John
												Brain</a> </span>
										<span class="author-date">Jan 5, 2020</span>
									</div>
								</div>
								

							</div>
						</div>
						
						</div>
					</aside>
				</div>
			</div>
			<!--/newsletter-->
			<div class="form-inner-newsletter py-lg-5">

				<div class="newsletter-infhny p-md-5 p-4">
					<div class="newsletter-inn-con p-lg-5">
						<p>NI ŜATAS DIVASI LASTAJN NOVA OFOJN DE ESPERANTO</p>
						<h2>ABONU NUN!</h2>

						<form action="#" method="post" class="newsletter-form mt-md-5">
							<div class="form-input">
								<input type="email" name="email" class="form-control"
									placeholder="Enter your email address" required="">
							</div>
							<div class="form-input mt-md-4 mt-3"><button class="btn">ABONU</button></div>
						</form>
					</div>
				</div>
			</div>
			<!--//newsletter-->
		</div>
	</div>
	<!--//mag-content-->
	<!-- /slider -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/grids.owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 0,
				responsiveClass: true,
				autoplay: true,
				autoplayTimeout: 2000,
				autoplaySpeed: 1000,
				autoplayHoverPause: true,
				responsive: {
					0: {
						items: 1,
						nav: false
					},
					480: {
						items: 2,
						nav: true,
						margin: 20
					},
					667: {
						items: 3,
						nav: true,
						margin: 20
					},
					1000: {
						items: 5,
						nav: true,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- /slider -->
</section>

@endsection