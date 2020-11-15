@extends('layouts/_indexRespondec')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@section('content')
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-10">
        <div class="block">
          <div class="title"><strong class="d-block">Aldoni</strong><span class="d-block">Aldoni homoj por kontakti ilin pli facile....</span></div>
          <div class="block-body">
          <form method="POST" action="{{route('membroj')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label class="form-control-label">Nomo</label>
                <input type="text" name="name" placeholder="Nomo " class="form-control">
                @if($errors->has('name'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('name') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                <label class="form-control-label">Prenomo </label>
                <input type="text" name="surname" placeholder="Prenomo " class="form-control">
                @if($errors->has('surname'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('surname') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                <label class="form-control-label">Posto</label>
                <input type="text" name="poste" placeholder="Prezidanto,sekretario,membro, ktp... " class="form-control">
                @if($errors->has('poste'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('poste') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                  <label class="form-control-label">Telefono </label>
                  <input type="text" name="numero" placeholder="Telefono " class="form-control">
                  @if($errors->has('numero'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('numero') }}</p>
			         @endif
              </div>
              <div class="form-group">       
                <label class="form-control-label">Email </label>
                <input type="email" name="email" placeholder="Email " class="form-control">
                @if($errors->has('email'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('email') }}</p>
			         @endif
              </div>
            
              
              <div class="form-group  file-upload-wrapper">
                  <label  class="form-control-label">Foto</label> <br>
                <input type="file" name="file" id="input-file-now" class="file-upload" />
                @if($errors->has('file'))
                  <p style="color: green;" class="text-red">{{ $errors->first('file') }}</p>
                  
			         @endif
              </div>
              <div>       
                <input type="submit" value="Sendi" class="btn btn-primary">
              </div>
            </form>
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