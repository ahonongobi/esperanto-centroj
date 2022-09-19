@extends('layouts/_indexRespondecx')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <!-- container -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{route('savepost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <div class="d-flex justify-content-end">

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>Publikigi</button>
                                </div>
                            </div>
                            <h4 class="header-title">Evento</h4>
                            <p class="sub-header">Priskribu vian eventon donante titolon, tiam elektu tri bildojn kaj priskribu ilin</p>
                            <div class="form-group mb-3">
                                <label class="form-control-label">Titolo</label>
                                <input type="text" name="title" value="{{old('title')}}" placeholder="Titolo " vak class="form-control">
                                @if($errors->has('title'))
                                    <p style="color: green;" class="text-red">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Priskriboj pri la bildo 1</label>
                                <textarea name="description1" value="{{old('description1')}}" placeholder="Textarea" class="form-control quill-editors" id="myTextarea2">
                               <p>Saluton Mondo!</p>
                                <p>Iu komenca <strong>grasa</strong> teksto</p>
                                <p><br></p>
                            </textarea>
                                @if($errors->has('description1'))
                                    <p style="color: green;" class="text-red">{{ $errors->first('description1') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-control-label">Priskriboj 2</label>
                                <textarea name="description2" value="{{old('description2')}}" placeholder="Priskriboj (Laŭvola)" class="form-control quill-editors" id="long_desc2" cols="30" rows=""></textarea>
                                @if($errors->has('description2'))
                                    <p style="color: green;" class="text-red">{{ $errors->first('description2') }}</p>
                                @endif
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-control-label">Priskriboj 3</label>

                                <textarea name="description3" value="{{old('description3')}}" placeholder="Priskriboj (Laŭvola)" class="form-control quill-editors" id="long_desc3" cols="30" rows=""></textarea>
                                @if($errors->has('description1'))
                                    <p style="color: green;" class="text-red">{{ $errors->first('description3') }}</p>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                         <!-- end card-body-->
                                        <div class="form-group mb-3">
                                            <label for="">Bildo 1(Trenu kaj faligi bildon/Alklaku por enmeti)</label>
                                            <input style="max-width: 100%;" type="file" name="file1" value="{{old('file1')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                            @if($errors->has('file1'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('file1') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Bildo 2(Trenu kaj faligi bildon/Alklaku por enmeti): Laŭvola</label>
                                            <input style="max-width: 100%;"  type="file" name="file2" value="{{old('file2')}}" id="input-file-now" data-plugins="dropify" data-height="200"/>
                                            @if($errors->has('file2'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('file2') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Bildo 3(Trenu kaj faligi bildon/Alklaku por enmeti): Laŭvola</label>
                                            <input style="max-width: 100%;" type="file" name="file3" value="{{old('file3')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                            @if($errors->has('file3'))
                                                <p style="color: green;" class="text-red">{{ $errors->first('file3') }}</p>
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

