@extends('layouts/_indexRespondec')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@section('content')

<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-6">
        <div class="block">
          <div class="title"><strong class="d-block">Update</strong><span class="d-block">Notu: estas kiel facebook. se vi volas modifi la bildojn, vi bezonas forigi la poston.</span></div>
          <div class="block-body">
          <form action="{{url('update'.'/'.$UserAfishojn[0]->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label">Titolo</label>
              <input type="text" name="title" value="{{$UserAfishojn[0]->title}}" placeholder="Titolo " vak class="form-control">
                @if($errors->has('title'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('title') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                <label class="form-control-label">Priskriboj 1</label>
                <textarea name="description1" value="" placeholder="Priskriboj pri la bildo 1" class="form-control" id="" cols="30" rows="">
                  {{$UserAfishojn[0]->description1}}
                </textarea>
                @if($errors->has('description1'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('description1') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                  <label class="form-control-label">Priskriboj 2</label>
                  <textarea name="description2" value=""  class="form-control" id="" cols="30" rows="">
                    {{$UserAfishojn[0]->description2}}
                  </textarea>
                  @if($errors->has('description2'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('description2') }}</p>
			         @endif
                </div>
                <div class="form-group">       
                  <label class="form-control-label">Priskriboj 3</label>
                  
                  <textarea name="description3" value="" placeholder="Priskriboj pri la bildo 3" class="form-control" id="" cols="30" rows="">
                    {{$UserAfishojn[0]->description3}}
                  </textarea>
                  @if($errors->has('description3'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('description3') }}</p>
			         @endif
                </div>
              
                
              <div class="form-group mt-3">       
                <button type="submit" style="background-color: #e95f71" class="btn btn-primary"><i class="fa fa-send"></i>sendi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Horizontal Form-->
      <div style="margin-bottom:5%;" class="col-lg-6">
        <div class="block">
          <div class="title"><strong class="d-block">Volas Publikigi videoj ?</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
          <div class="block-body">
          <form action="{{route('uploadVideo')}}" method="POST"  class="form-horizontal">
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
                <label class="col-sm-3 form-control-label">Upload video</label>
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
</section>
<section>
  <div style="height: 5%" class="clearfix"></div>
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