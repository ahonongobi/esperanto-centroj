@extends('layouts/_indexRespondecx')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <!-- container -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form  action="{{route('afichoj')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="d-flex justify-content-end">

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary">Publikigi</button>
                                    </div>
                                </div>
                                <h4 class="header-title">Afisho</h4>
                                <p class="sub-header">Priskribu vian eventon donante titolon, tiam elektu tri bildojn kaj priskribu ilin</p>
                                <div class="form-group mb-3">
                                    <label class="form-control-label">Titolo</label>
                                    <input type="text" name="title" value="{{old('title')}}" placeholder="Titolo " vak class="form-control">
                                    @if($errors->has('title'))
                                        <p style="color: green;" class="text-red">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Priskriboj </label>
                                    <textarea name="description" value="{{old('description')}}" placeholder="Textarea" class="form-control quill-editor">
                               <p>Saluton Mondo!</p>
                                <p>Iu komenca <strong>grasa</strong> teksto</p>
                                <p><br></p>
                            </textarea>
                                    @if($errors->has('description'))
                                        <p style="color: green;" class="text-red">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>


                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="card">
                                            <!-- end card-body-->
                                            <div class="form-group mb-3">
                                                <label for="">Bildo 1(Trenu kaj faligi bildon/Alklaku por enmeti)</label>
                                                <input style="max-width: 100%;" type="file" name="file" value="{{old('file')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                                @if($errors->has('file'))
                                                    <p style="color: green;" class="text-red">{{ $errors->first('file') }}</p>
                                                @endif
                                            </div>

                                        </div> <!-- end card-->
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->
                                <!-- submit button -->

                                <!-- end Snow-editor-->
                            </div> <!-- end card-body-->
                        </form>

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

