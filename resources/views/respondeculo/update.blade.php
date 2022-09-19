@extends('layouts/_indexRespondecx')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <!-- container -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="container mt-3">
                            <form action="{{url('update'.'/'.$UserAfishojn[0]->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-control-label">Titolo</label>
                                    <input type="text" name="title" value="{{$UserAfishojn[0]->title}}" placeholder="Titolo " vak class="form-control">
                                    @if($errors->has('title'))
                                        <p style="color: red;" class="text-red">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Priskriboj 1</label>
                                    <textarea name="description1" placeholder="Priskriboj pri la bildo 1" class="form-control quill-editors1" id="myTextarea2" cols="30" rows="">
                                      {{$UserAfishojn[0]->description1}}
                                    </textarea>
                                    @if($errors->has('description1'))
                                        <p style="color: red;" class="text-red">{{ $errors->first('description1') }}</p>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control-label">Priskriboj 2</label>
                                    <textarea name="description2"   class="form-control quill-editors" id="long_desc2" cols="30" rows="">
                                    {{$UserAfishojn[0]->description2}}
                                  </textarea>
                                    @if($errors->has('description2'))
                                        <p style="color: green;" class="text-red">{{ $errors->first('description2') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Priskriboj 3</label>

                                    <textarea name="description3" value="" placeholder="Priskriboj pri la bildo 3" class="form-control quill-editors" id="long_desc3" cols="30" rows="">
                                        {{$UserAfishojn[0]->description3}}
                                      </textarea>
                                    @if($errors->has('description3'))
                                        <p style="color: green;" class="text-red">{{ $errors->first('description3') }}</p>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <!-- end card-body-->
                                            <div class="img-fluid mt-3 mb-3">
                                                <img style="width:100%;
                                                   height:200px;
                                                   object-fit:cover;
                                                   object-position:50% 50%;"
                                                     src="{{asset('storage/actuality_photos/'.$UserAfishojn[0]->file1)}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Bildo 1(Trenu kaj faligi bildon/Alklaku por enmeti)</label>
                                                <input style="max-width: 100%;" type="file" name="file1" value="{{old('file1')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                                @if($errors->has('file1'))
                                                    <p style="color: green;" class="text-red">{{ $errors->first('file1') }}</p>
                                                @endif
                                            </div>
                                            <div class="form-group mb-3">
                                                <!--if file2 is not empty-->
                                                @if($UserAfishojn[0]->file2 != null)
                                                    <div class="img-fluid mt-3 mb-3">
                                                        <img style="width:100%;
                                                           height:200px;
                                                           object-fit:cover;
                                                           object-position:50% 50%;"
                                                             src="{{asset('storage/actuality_photos/'.$UserAfishojn[0]->file2)}}" alt="" class="img-fluid">
                                                    </div>
                                                @endif
                                                <lanel>Bildo 2(Trenu kaj faligi bildon/Alklaku por enmeti)</lanel>
                                                <input style="max-width: 100%;"  type="file" name="file2" value="{{old('file2')}}" id="input-file-now" data-plugins="dropify" data-height="200"/>
                                                @if($errors->has('file2'))
                                                    <p style="color: green;" class="text-red">{{ $errors->first('file2') }}</p>
                                                @endif
                                            </div>
                                            <div class="form-group mt-3">
                                                <!--if file3 is not empty-->
                                                @if($UserAfishojn[0]->file3 != null)
                                                    <div class="img-fluid mt-3 mb-3">
                                                        <img style="width:100%;
                                                           height:200px;
                                                           object-fit:cover;
                                                           object-position:50% 50%;"
                                                             src="{{asset('storage/actuality_photos/'.$UserAfishojn[0]->file3)}}" alt="" class="img-fluid">
                                                    </div>
                                                @endif
                                                <label for="">Bildo 3(Trenu kaj faligi bildon/Alklaku por enmeti)</label>
                                                <input style="max-width: 100%;" type="file" name="file3" value="{{old('file3')}}" id="input-file-now" data-plugins="dropify" data-height="200"  />
                                                @if($errors->has('file3'))
                                                    <p style="color: green;" class="text-red">{{ $errors->first('file3') }}</p>
                                                @endif
                                            </div>
                                        </div> <!-- end card-->
                                    </div><!-- end col -->
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" style="background-color: #e95f71" class="btn btn-primary"><i class="fa fa-send"></i>sendi</button>
                                </div>
                            </form>
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

