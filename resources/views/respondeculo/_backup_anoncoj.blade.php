@extends('layouts/_indexRespondec')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@section('content')
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-6">
        <div class="block">
          <div class="title"><strong class="d-block">Enretigi afiŝojn</strong><span class="d-block">vi povas enretigi tri fotoj kaj priskriboj.</span></div>
          <div class="block-body">
          <form method="POST" action="{{route('afichoj')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label class="form-control-label">Titolo</label>
                <input type="text" name="title" placeholder="Titolo " class="form-control">
              </div>
              <div class="form-group">       
                <label class="form-control-label">Priskriboj </label>
                <textarea name="description" class="form-control" id="" cols="30" rows=""></textarea>
              </div>
              
              
                
                <div class="form-groupform-group file-upload-wrapper">
                  <input type="file" name="file" id="input-file-now" class="file-upload" />
                </div>
              <div class="form-group mt-3"> 
                <button type="submit" style="background-color: #e95f71;" class="btn btn-primary"><i class="fa fa-send"></i>sendi</button>      
               
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Horizontal Form-->
      <div class="col-lg-6 mb-5">
        <div class="block">
          <div class="title"><strong class="d-block">Volus Publikigi videoj ?</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
          <div class="block-body">
            <form action="{{route('uploadVideo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Pri kiu video estas ?</label>
                  <div class="col-sm-9">
                    <textarea name="desc" class="form-control" id="" cols="30" rows=""></textarea>
                    @if($errors->has('desc'))
                    <p style="color: green;" class="text-red">{{ $errors->first('desc') }}</p>
                 @endif
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Elektu video</label>
                  <div class="col-sm-9">
                    <input id="inputHorizontalWarning" name="videos" type="file"  class="form-control form-control-warning"><small class="form-text">metu youtube link,vimeo aux enshti via propa.</small>
                    @if($errors->has('videos'))
                    <p style="color: green;" class="text-red">{{ $errors->first('videos') }}</p>
                 @endif
                  </div>
                </div>
                <div class="form-group row">       
                  <div class="col-sm-9 offset-sm-3">
                    <button type="submit" style="background-color: #e95f71;" class="btn btn-primary"><i class="fa fa-send"></i>sendi</button>
                    
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
      <!-- Inline Form-->
      
      <!-- Modal Form-->  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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