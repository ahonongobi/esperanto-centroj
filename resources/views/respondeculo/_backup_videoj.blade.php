@extends('layouts/_indexRespondec')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@section('content')
<section id="agadojn" class="margin-bottom-sm">
  <div class="row d-flex justify-content-center">{!! $UseVideoj->appends(Request::all())->links() !!}</div>
  <div class="container-fluid">
    <div class="row d-flex align-items-stretch">
      
      @foreach ($UseVideoj as $UseVideo)
      <div class="col-lg-4">
        <div class="stats-with-chart-1 block">
        <div class="title"> <strong class="d-block">{{$UseVideo->title}}</strong><span class="d-block">{{$UseVideo->desc}}</span></div>
          <video  class="agado" width="" height="" controls>
            <source src="{{ asset('storage/actuality_photos/'.$UseVideo->videos)}}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 
         
            <div class="d-flex ml-3">
            <a  type="submit" onclick="return confirm('Chu vi certas?')" href="{{url('delete'.'/'.$UseVideo->id)}}" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;"><i class="fa fa-trash"></i> forigi</a>
            <a type="submit" onclick="alerte2()" class="btn btn-warning mt-2" style="margin-left:1px;"><i class="fa fa-edit"></i>Modifii</a>
            </div>
          
        </div>
      </div>
      @endforeach
     
      
      
    </div>
    
  </div>
  
</section>
<section>
  
    
  
</section>
<script>
  document.querySelector('.alertes').addEventListener('click',success);
  
  function alerte2(){
      //swal('Ups!','Vous avez pas d abonnement ','warning');

      swal({
     title: "Deleted!",
     text: "Your row has been deleted.",
     button: "Close", // Text on button
     icon: "success", //built in icons: success, warning, error, info
     timer: 3000, //timeOut for auto-close
      buttons: {
        confirm: {
          text: "OK",
          value: true,
          visible: true,
          className: "",
          closeModal: true
        },
        cancel: {
          text: "Cancel",
          value: false,
          visible: true,
          className: "",
          closeModal: true,
        }
      }
     });
  }
</script>
@endsection