@extends('layouts/_indexRespondecx')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <!-- container -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h2 style="margin-left: 10%" class="">
                            </strong><span class="d-block">Aldoni aliajn respondeculojn (maksimume tri)</span>
                        </h2>
                        <div class="container">
                            <div class="block">
                                <div class="block-body">
                                    <form method="POST" action="{{route('membroj')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-control-label">Nomo</label>
                                            <input type="text" name="name" placeholder="Nomo " class="form-control mt-3">
                                            @if($errors->has('name'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Indidua nomo </label>
                                            <input type="text" name="surname" placeholder="Indidua nomo" class="form-control mt-3">
                                            @if($errors->has('surname'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('surname') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Titolo</label>
                                            <input type="text" name="poste" placeholder="Prezidanto,sekretario,membro, ktp... " class="form-control mt-3">
                                            @if($errors->has('poste'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('poste') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Telefono </label>
                                            <input type="text" name="numero" placeholder="Telefono " class="form-control mt-3">
                                            @if($errors->has('numero'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('numero') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Email </label>
                                            <input type="email" name="email" placeholder="Email " class="form-control mt-3">
                                            @if($errors->has('email'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>


                                        <div class="form-group  file-upload-wrapper ">
                                            <label  class="form-control-label">Foto</label> <br>
                                            <input style="max-width: 100%;"  type="file" name="file" id="input-file-now" class="file-upload mt-3" data-plugins="dropify" data-height="200" />
                                            @if($errors->has('file'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('file') }}</p>

                                            @endif
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" style="background-color: #e95f71;" class="btn btn-primary"><i class="fa fa-send"></i>sendi</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- content -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

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
@endsection

