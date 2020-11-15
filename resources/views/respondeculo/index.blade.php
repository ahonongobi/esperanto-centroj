@extends('layouts/_indexRespondec')

@section('content')
<section style="" class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-4">
        <div class="user-block block text-center">
          <div class="">
          <p>{{$post->title}}</p>
            <!-- 3084 for modify dark color -->
          </div>
        <p>{{substr($post->desc,0,5)."..."}}</p>
          <img class="agado"  width="400" height="250" src="{{ asset('storage/actuality_photos/'.$post->file1)}}" alt="" srcset="">
            
          <div>
            <div class="d-flex ml-3">
              <button  type="submit" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;">forigi</button>
              <button type="submit" class="btn btn-warning mt-2" style="margin-left:1px;">Modifii</button>
            </div>
          </div>
        </div>
        
      </div>
      @endforeach
     
      
      
    </div>
    
  
      <div class="row d-flex justify-content-center">{!! $posts->appends(Request::all())->links() !!}</div>
    
    @foreach ($membroj as $membro)
    <div class="public-user-block block">
      <div class="row d-flex align-items-center">                   
        <div class="col-lg-4 d-flex align-items-center">
          <div class="order">{{$membro->id}}</div>
        <div class="avatar"> <img src="{{ asset('storage/actuality_photos/'.$membro->photo)}}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">{{$membro->name}}</strong><span class="d-block">@ {{$membro->surname}}</span></a>
        </div>
        <div class="col-lg-4 text-center">
        <div class="contributions">{{$membro->poste}}</div>
        </div>
        <div class="col-lg-4">
          <div class="details d-flex">
          <div class="item"><i class="fa fa-phone"></i><strong>{{$membro->numero}}</strong></div>
          <div class="item"><i class="fa fa-envelope"></i><strong>{{$membro->email}}</strong></div>
            <div class="item"><i class="fa fa-user"></i><strong>Uzanto</strong></div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    
    
  </div>
</section>
<section>
  
</section>
<section id="agadojn" class="margin-bottom-sm">
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
  
    <div class="row d-flex justify-content-center">{!! $UseVideoj->appends(Request::all())->links() !!}</div>
  
</section>
@endsection