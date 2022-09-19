@extends('layouts._indexx')
@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section style="background-image: url('https://images.squarespace-cdn.com/content/v1/5788eade6a4963f2a543ea10/1505142728840-54UBF51C7TROMZMQYF07/GreenMainBanner.jpg?format=2500w')" class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div  class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Centroj</h1>
                        <ul>
                            <li>
                                <a class="text-white" href="/">Hejmo</a>
                            </li>
                            <li style="color: #fff !important;" class="text-white">Centroj</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    <section class="blog-wrap-layout21">
        <div class="container">
            <h2>Malkovru eventoj</h2>
            <div class="row gutters-40">
                @foreach($allpost as $gobi)
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="blog-box-layout9">
                            <div class="item-img">
                                <a href="{{url('details/'.$gobi->title."/".$gobi->id)}}"><img style="width:100%;
                                       height:300px;
                                       object-fit:cover;
                                       object-position:50% 50%;" src="{{ asset('storage/actuality_photos/'.'/'.$gobi->file1)}}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li><i class="fas fa-tag"></i>{{ $gobi->center ?? ".." }}</li>
                                    <li><i class="fas fa-calendar-alt"></i>
                                        {{ $gobi->created_at->format('d/m/Y') ?? ".." }}</li>
                                    </li>
                                </ul>
                                <h3 class="item-title"><a href="single-blog.html">
                                        {{ $gobi->title }}</a></h3>
                                </a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Blog Area End Here -->
    <!-- Blog Area Start Here -->

    <section class="blog-wrap-layout22">
        <div class="container">
            @if($count2!==0)
            <h3 class="hny-title text-center">Freŝaj<span> novaĵoj</span></h3>
            @endif
            <div class="row gutters-50">

                @if($count2==0)
                    <center style="margin-left: 30%"><p>Ne havas novajn agadprogramojn</p></center> <br>
                @else
                    <div class="col-xl-9 col-lg-8">
                        @foreach ($recentposts as $recentpost)

                            <div class="blog-box-layout4">
                                <div class="item-img">
                                    <a href="{{url('details-post/'.$recentpost->title."/".$recentpost->id)}}"><img src="{{ asset('storage/actuality_photos/'.$recentpost->file1)}}" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">

                                        <li><i class="fas fa-calendar-alt"></i>
                                            Publikiĝis {{date('d-m-Y',strtotime($recentpost->created_at)) ?? '...'}}</li>
                                        </li>

                                    </ul>
                                    <h3 class="item-title"><a href="{{url('details-post/'.$recentpost->title."/".$recentpost->id)}}">
                                            {{ $recentpost->title }}</a></h3>
                                    </a>
                                    </h3>
                                    <p>
                                        {{ $recentpost->desc }}

                                    </p>
                                    <div class="action-area">
                                        <a href="{{url('details-post/'.$recentpost->title."/".$recentpost->id)}}" class="item-btn">Legu pli<i class="fas fa-arrow-right"></i></a>
                                        <ul class="response-area">
                                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-layout1">

                        </div>

                    </div>

                @endif


                <div class="col-xl-3 col-lg-4 sidebar-widget-area sidebar-break-md">
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">Sekvu nin</h3>
                        </div>
                        <div class="widget-follow-us">
                            <ul>
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i></a></li>

                                <li class="single-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>




                    <div class="widget">
                        <div class="widget-ad">
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">Aliaj centroj</h3>
                        </div>
                        <div class="widget-categories">
                            <ul>
                                @foreach($centroj4 as $centro)
                                    <li>
                                        <!--display only 4 -->
                                        <a href="">{{ $centro->centro ?? "" }}</a>

                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutters-40" id="no-equal-gallery">
                @foreach ($allposts as $allpost)
                    <div class="col-sm-6 no-equal-item">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                                <a href="{{url('details/'.$allpost->title."/".$allpost->id)}}"><img style="width:100%;
                                       height:300px;
                                       object-fit:cover;
                                       object-position:50% 50%;" src="{{ asset('storage/actuality_photos/'.$allpost->file1)}}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li><i class="fas fa-tag"></i>Clinic</li>
                                    <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                                    <li><i class="far fa-clock"></i>5 Mins Read</li>
                                </ul>
                                <h3 class="item-title"><a href="{{url('details/'.$allpost->title."/".$allpost->id)}}">
                                        {{ $allpost->title }}</a></h3>
                                </a></h3>
                                <p>
                                    @php
                                        // decode desc to html
                                        $desc = html_entity_decode($allpost->description1);
                                        // strip tags
                                        $desc = strip_tags($desc);
                                        // truncate
                                        $desc = Str::limit($desc, 100);
                                        echo $desc;
                                    @endphp

                                </p>
                                <div class="action-area">
                                    <a href="{{url('details/'.$allpost->title."/".$allpost->id)}}" class="item-btn">Legu pli<i class="fas fa-arrow-right"></i></a>
                                    <ul class="response-area">
                                        <li><a href="#"><i class="far fa-heart"></i>12</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="pagination-layout1">
                <div class="row pagination d-flex justify-content-center">{!! $allposts->appends(Request::all())->links() !!}</div>

            </div>

            <!-- video section -->
            <div class="row gutters-40" id="no-equal-gallery">
                @foreach ($videos as $video)
                    <div class="col-sm-4 no-equal-item">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                                <video height="300" width="100%" controls>
                                    <source src="{{ asset('storage/actuality_photos/'.$video->file1)}}" type="video/mp4">
                                </video>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">

                                    <li><i class="fas fa-calendar-alt"></i>
                                        Publikigis {{ $video->created_at->format('d M Y') }}
                                    </li>
                                    </li>

                                </ul>
                                <h3 class="item-title"><a href="">
                                    </a></h3>
                                </a></h3>
                                <p>
                                    @php
                                        $desc = $video->desc;
                                        // html_entity_decode($desc);
                                       echo  $desc = substr($desc, 0, 500);


                                    @endphp

                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="pagination-layout1">
                <div class="row pagination d-flex justify-content-center">{!! $allposts->appends(Request::all())->links() !!}</div>

            </div>
        </div>
        <!-- video section -->
        <div class="container">
            <h3 class="hny-title">Specifaĵoj <span></span></h3>
            <table  class="table table-bordered border-primary">
                <thead>
                <tr style="background-color: green">
                    <th style="width: 50%;" class="text-white" scope="col">Vortigo</th>
                    <th class="text-white" scope="col">Valoro</th>

                </tr>
                </thead>
                <style>
                    .table td, .table th {
                        border-color: green !important;
                    }
                </style>
                <tbody>

                <tr>
                    <td>Nomo</td>
                    <td>{{$infos[0]->center ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Bibliotheque</td>
                    <td>{{$infos[0]->bibliothque ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Libroservo</td>
                    <td>{{$infos[0]->libroservo ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Retpaĝo</td>
                    <td>{{$infos[0]->retejo ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Jaro de fondo</td>
                    <td>{{$infos[0]->jaro ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Kursejo</td>
                    <td>{{$infos[0]->kursejoklasochambro ?? "..."}}</td>
                </tr>

                <tr>
                    <td>Agado</td>
                    <td>{{$infos[0]->agado ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Retadreso de la Centro</td>
                    <td>{{$email[0]->email ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Stratadreso</td>
                    <td>{{$infos[0]->Kontaktadreso ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Manĝejo</td>
                    <td>{{$infos[0]->mangheblo ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{$infos[0]->Telefono ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Jaro de fondo</td>
                    <td>{{$infos[0]->jaro ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Dormeblo</td>
                    <td>{{$infos[0]->dormeblo ?? "..."}}</td>
                </tr>
                <tr>
                    <td>Specifaj trajtoj</td>
                    <td>{{$infos[0]->trajto ?? "..."}}</td>
                </tr>

                </tbody>
            </table>
        </div>
        </div>



        </div>


    </section>
    @endsection
