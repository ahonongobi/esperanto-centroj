@extends('layouts/_indexRespondec')
@section('content')
<section class="margin-bottom-sm">
  <div class="container-fluid">
    <div class="row d-flex align-items-stretch">
      <div class="col-lg-4">
        <div class="stats-with-chart-1 block">
          <div class="title"> <strong class="d-block">Video evento 1</strong><span class="d-block">Priskribo</span></div>
          <video width="350" height="240" controls>
            <source src="img/videos/CRUD Tutorial - ReactJS, NodeJS, MySQL [Part 2].mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 
         
            <div class="d-flex ml-3">
              <button  type="submit" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;">forigi</button>
              <button type="submit" class="btn btn-warning mt-2" style="margin-left:1px;">Modifii</button>
            </div>
          
        </div>
      </div>
      <div class="col-lg-4">   
        <div class="stats-with-chart-1 block">
          <div class="title"> <strong class="d-block">Video evento 2</strong><span class="d-block">Priskribo</span></div>
          <video width="350" height="240" controls>
            <source src="img/videos/CRUD Tutorial - ReactJS, NodeJS, MySQL [Part 2].mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 
          <div>
            <div class="d-flex ml-3">
              <button  type="submit" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;">forigi</button>
              <button type="submit" class="btn btn-warning mt-2" style="margin-left:1px;">Modifii</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stats-with-chart-1 block">
          <div class="title"> <strong class="d-block">Video evento ...</strong><span class="d-block">Priskribo</span></div>
          <video width="350" height="240" controls>
            <source src="img/videos/CRUD Tutorial - ReactJS, NodeJS, MySQL [Part 2].mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 
          <div>
            <div class="d-flex ml-3">
              <button  type="submit" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;">forigi</button>
              <button type="submit" class="btn btn-warning mt-2" style="margin-left:1px;">Modifii</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection