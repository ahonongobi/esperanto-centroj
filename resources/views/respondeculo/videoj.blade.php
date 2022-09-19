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
                            </strong><span class="d-block">Enretigi video</span>
                        </h2>
                        <div class="container">
                            <div class="block">
                                <div class="block-body">
                                    <form id="fileUploadForm" method="POST" action="{{route('uploadVideo')}}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group mt-3">
                                            <label for="">Priskriboj </label>
                                            <textarea name="desc" value="{{old('desc')}}" id="myTextarea2" placeholder="Textarea" class="form-control quill-editors">
                                           <p>Saluton Mondo!</p>
                                            <p>Iu komenca <strong>grasa</strong> teksto</p>
                                            <p><br></p>
                                        </textarea>
                                            @if($errors->has('desc'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('desc') }}</p>
                                            @endif
                                        </div>



                                        <div class="form-group mb-3">
                                            <label for="">Bildo 1(Trenu kaj faligi bildon/Alklaku por enmeti)</label>
                                            <input style="max-width: 100%;" type="file" name="file" value="{{old('file')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                            @if($errors->has('file'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('file') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

