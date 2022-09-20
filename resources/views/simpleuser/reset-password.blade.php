<!DOCTYPE html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Forgesis pasvorton</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap css -->
		<link href="{{asset('assets-admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{asset('assets-admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{asset('assets-admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{asset('assets-admin/js/head.js')}}"></script>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('asset/img/logo_reduce.png')}}" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Enigu vian retadreson kaj ni sendos al vi retpoŝton kun instrukcioj por restarigi vian pasvorton.</p>
                                </div>

                                <form method="POST" action="{{URL('submitPasswordReset')}}">
                                    <!--sho success message-->
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('message')}}
                                        </div>
                                    @endif
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Retadreso</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Via retpoŝta adreso">
                                        <!-- show error message -->
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Pasvorto</label>
                                        <input class="form-control" name="password" type="password" id="emailaddress" required="" placeholder="Pasvorto">
                                        <!-- show error message -->
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Konfirmo de pasvorto</label>
                                        <input class="form-control" name="password_confirmation" type="password" id="emailaddress" required="" placeholder="Konfirmo de pasvorto">
                                        <!-- show error message -->
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-success" type="submit"> Restarigi pasvorton </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Reen al<a href="/logon" class="text-white ms-1"><b>Ensaluti</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('assets-admin/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets-admin/js/app.min.js')}}"></script>
        
    </body>

</html>