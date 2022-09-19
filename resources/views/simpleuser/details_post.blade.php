@extends('layouts._indexx')
@section('content')
    <!-- Single Blog Banner Start Here -->
    <section class="single-blog-wrap-layout2">
        <div class="container">
            <div class="single-blog-box-layout2">
                <div class="blog-banner">
                    <img src="{{ asset('storage/actuality_photos/'.'/'.$info->file1)}}" alt="blog">
                </div>
                <div class="single-blog-content">
                    <div class="blog-entry-content">
                        <ul class="entry-meta meta-color-dark">
                            <li><i class="fas fa-tag"></i>{{ $info->center ?? ".." }}</li>
                            <li><i class="fas fa-calendar-alt"></i>
                                {{ $info->created_at->format('d/m/Y') ?? ".." }}
                            </li>
                            <li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>

                        </ul>
                        <h2 class="item-title">
                            {{ $info->title }}
                        </h2>
                        <ul class="item-social">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://esperanto-centroj.com/details-post/{{ $info->title }}/{{ $info->id }}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://telegram.me/share/url?url=https://esperanto-centroj.com/details-post/{{ $info->title }}/{{ $info->id }}" class="twitter"><i class="fab fa-telegram"></i></a></li>

                        </ul>

                    </div>
                    <div class="blog-details">
                        <p>
                            <div>
                            @php
                                // bro decode the html entities
                                    $desc = html_entity_decode($info->desc);
                                    echo $desc;
                            @endphp
                            </div>

                        </p>


                        <p>
                            {{ $info->description2 ?? ".." }}
                        </p>


                    </div>
                    <div class="blog-tag">

                    </div>

                    <div class="related-item">
                        <div class="section-heading-5 heading-dark">
                            <h3 class="item-heading">VIN ANKAŬ EBLE ŜATUS</h3>
                        </div>
                        <div class="row">
                            @foreach($last3centeraffiche as $item)
                                <div class="col-sm-4 col-12">
                                    <div class="blog-box-layout1 text-left">
                                        <div class="item-img">
                                            <a href="{{url('details/'.$item->title."/".$item->id)}}"><img style="width:100%;
                                       height:210px;
                                       object-fit:cover;
                                       object-position:50% 50%;" src="{{ asset('storage/actuality_photos/'.'/'.$item->file1)}}" alt="blog"></a>
                                        </div>
                                        <div class="item-content">
                                            <ul class="entry-meta meta-color-dark">
                                                <li><i class="fas fa-tag"></i>
                                                    <a href="{{url('details/'.$item->title."/".$item->id)}}">{{ $item->center ?? "" }}</a>
                                                </li>
                                                <li><i class="fas fa-calendar-alt"></i>
                                                    {{ $item->created_at->format('d/m/Y') }}</li>
                                                </li>
                                            </ul>
                                            <h5 class="item-title"><a href="{{url('details/'.$item->title."/".$item->id)}}">
                                                    {{ $item->title ?? ".." }}
                                                </a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="blog-comment">
                        <div class="section-heading-5 heading-dark">
                            <h3 class="item-heading">{{$commentsCount ?? "0"}} KOMENTOJ</h3>
                        </div>
                        @foreach($comments as $comment)
                            <div class="media media-none--xs">
                                <img style="width: 80px; width: 80px;" src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png" alt="Blog Comments" class="img-fluid media-img-auto">
                                <div class="media-body">

                                    <div class="item-subtitle">
                                        {{ $comment->created_at->format('d/m/Y') }}
                                    </div>
                                    <p>
                                        {{ $comment->message ?? "" }}
                                    </p>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="blog-form">
                        <div class="section-heading-5 heading-dark">
                            <h3 class="item-heading">SKRIBU KOMENTO</h3>
                        </div>
                        <form method="post" action="{{url('ajax')}}" class="contact-form-box">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="hidden" name="centre_id" value="{{$id}}">
                            <div class="row gutters-15">



                                <div class="col-12 form-group">
                                        <textarea placeholder="Skribu viajn komentojn..." class="textarea form-control"
                                                  name="message" id="message" rows="9" cols="20" data-error="Message field is required"
                                                  required></textarea>
                                    @if($errors->has('message'))
                                        <p style="color: red;" class="text-red">{{ $errors->first('message') }}</p>
                                    @endif
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group text-center">
                                    <button class="item-btn">POSTKOMENTO</button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Blog Banner End Here -->
@endsection
