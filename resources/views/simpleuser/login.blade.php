@php
$bg = array('CDELILaChaux-de-FondsSvisio.jpg','Multifunkt-Kongressze-Wellnesst-Grogastro-und-auch-56098.jpeg','cdeli.jpg');
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
@endphp
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Ensalutu | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="esperanto, centroj, mondo, ilei, uea" name="description" />
    <meta content="esperanto" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets-admin/images/favicon.ico')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    <!-- Bootstrap css -->
    <link href="{{asset('assets-admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('assets-admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
    <!-- icons -->
    <link href="{{asset('assets-admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{asset('assets-admin/js/head.js')}}"></script>
    <!-- MATERIAL DESIGN ICONIC FONT  cdn-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <style>
        .auth-fluid-right{
            background-image: url("{{asset('asset/img/'.$selectedBg)}}");
            background-size: cover;
            background-repeat: no-repeat;

        }
        @media  only screen and (max-width: 600px) {
            form {

                margin-right: 10% !important;
            }
        }

    </style>
</head>

<body class="auth-fluid-pages pb-0">

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center ml-md-4 d-flex h-100">
            <div class="p-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="/" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('asset/img/logo_reduce.png')}}" alt="" height="80">
                                    </span>
                        </a>

                        <a href="/" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('asset/img/logo_reduce.png')}}" alt="" height="22">
                                    </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">Ensaluti</h4>
                <p class="text-muted mb-4">Enigu vian retpoŝtadreson kaj pasvorton por aliri konton.</p>

                <!-- form -->
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                         <!--alert -->
                        @if (session('message'))
                            <div class="alert alert-danger" role="alert">
                                <i class="fa fa-info"></i> {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Retpoŝta adreso</label>
                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enigu vian retpoŝton">
                        @if($errors->has('email'))
                            <p style="color:green" class="">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <a href="{{URL("forgesispasvorto")}}" class="text-muted float-end"><small>Ĉu vi forgesis vian pasvorton?</small></a>
                        <label for="password" class="form-label">Pasvorto</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="Enigu vian pasvorton">
                            <div class="input-group-text" data-password="false">
                                <span class="fa fa-eye"></span>
                            </div>
                            @if($errors->has('password'))
                                <p style="color:green" class="">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Memoru min</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button style="background-color: green !important;" class="btn btn-success" type="submit">Ensaluti </button>
                    </div>
                    <!-- social-->

                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Ĉu vi ne havas konton?  <a href="/register" class="text-muted ms-1"><b>Aliĝu</b></a></p>
                </footer>


            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div  style="" class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">NOVA ILO POR NI ĈIUJ!</h2>
            <p class="lead"><i class="fa fa-quote"></i>&quot; retejo prezentas la Esperanto-centrojn en la tuta mondo. Ĝi estas starigita de Universala Esperanto Asocio UEA kaj Internacia Ligo de Esperantistaj Instruistoj ILEI kune. Ĝi ebligas ekkoni ĉiujn centrojn, iliajn agadojn, ofertojn, ecojn. Ĉiu Esperanto-centro povas akiri surfacon, sub-menuon en tiu paĝaro. Tie la respondeculoj de la centro, per persona pasvorto, povos daŭre aldoni donitaĵojn, informojn, agadprogramojn kaj similajn gravajn informojn. La publikaj uzantoj povos legi la tutan retejon sen aldoni ion ajn, konsulti la paĝaron. &quot;  <i class=""></i>
            </p>
            <h5 class="text-white">
                - Gobi abyssinie (admin de la retejo)
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- Vendor js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="{{asset('assets-admin/js/vendor.min.js')}}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- App js -->
<script src="{{asset('assets-admin/js/app.min.js')}}"></script>

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
