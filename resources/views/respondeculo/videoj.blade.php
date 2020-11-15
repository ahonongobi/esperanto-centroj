@extends('layouts/_indexRespondec')
@section('content')
<section id="agadojn" class="margin-bottom-sm">
  <div class="row d-flex justify-content-center">{!! $UseVideoj->appends(Request::all())->links() !!}</div>
  <div class="container-fluid">
    <div class="row d-flex align-items-stretch">
      
      @foreach ($UseVideoj as $UseVideo)
      <div class="col-lg-4">
        <div class="stats-with-chart-1 block">
        <div class="title"> <strong class="d-block">{{$UseVideo->title}}</strong><span class="d-block">{{$UseVideo->desc}}</span></div>
          <video  class="agado" width="350" height="240" controls>
            <source src="{{ asset('storage/actuality_photos/'.$UseVideo->videos)}}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 
         
            <div class="d-flex ml-3">
              <button  type="submit" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;">forigi</button>
              <button type="submit" class="btn btn-warning mt-2" style="margin-left:1px;">Modifii</button>
            </div>
          
        </div>
      </div>
      @endforeach
     
      
      
    </div>
    
  </div>
  
</section>
<section>
  
    
  
</section>
@endsection