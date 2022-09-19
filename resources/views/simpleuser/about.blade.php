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
                            <li style="color: #fff !important;" class="text-white">Pri ni</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area Start Here -->
    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-box-layout2">
                        <div class="item-subtitle">Saluton!</div>
                        <h2 class="item-title"><span>NOVA</span>  ILO POR NI ĈIUJ</h2>
                        <p>Tiu retejo prezentas la Esperanto-centrojn en la tuta mondo. Ĝi estas starigita de Universala Esperanto Asocio UEA kaj Internacia Ligo de Esperantistaj Instruistoj ILEI kune. Ĝi ebligas ekkoni ĉiujn centrojn, iliajn agadojn, ofertojn, ecojn. Ĉiu Esperanto-centro povas akiri surfacon, sub-menuon en tiu paĝaro. Tie la respondeculoj de la centro, per persona pasvorto, povos daŭre aldoni donitaĵojn, informojn, agadprogramojn kaj similajn gravajn informojn. La publikaj uzantoj povos legi la tutan retejon sen aldoni ion ajn, konsulti la paĝaron.</p>
                        <ul class="item-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box-layout3">
                        <img src="{{asset('asset/img/CDELILaChaux-de-FondsSvisio.jpg')}}" alt="about">
                        <a class="play-btn popup-youtube" href="">
                            <i class="flaticon-play-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End Here -->
@endsection
