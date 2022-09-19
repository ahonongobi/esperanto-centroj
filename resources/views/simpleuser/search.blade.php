@extends('layouts._indexx')
@section('content')
    <!-- Single Blog Banner Start Here -->
    <section class="blog-wrap-layout1">
        <div class="container">
            <div class="row">
                @foreach ($filtercentroj as $centro)
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
                                        Membro la  : {{$centro->created_at}}
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
    <!-- Single Blog Banner End Here -->
@endsection
