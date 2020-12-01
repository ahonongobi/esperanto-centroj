@extends('layouts/_indexRespondec')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
          <p>{{substr($post->description1,0,5)."..."}}</p>
            <img class="agado"  width="" height="" src="{{ asset('storage/actuality_photos/'.$post->file1)}}" alt="" srcset="">
              
            <div>
              <div class="d-flex ml-3">
                <button  type="submit" onclick="return confirm('Chu vi certas?')" href="{{url('delete'.'/'.$post->id)}}" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;"><i class="fa fa-trash"></i>forigi</button>
                <a  onclick="return confirm('Chu vi certas?')" class="btn btn-warning mt-2" href="{{url('update'.'/'.$post->id)}}" style="margin-left:1px;"><i class="fa fa-edit"></i>Modifii</a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="">
              <p>{{$post->title}}</p>
                <!-- 3084 for modify dark color -->
              </div>
            <p>{{substr($post->description2,0,5)."..."}}</p>
              <img class="agado"  width="" height="" src="{{ asset('storage/actuality_photos/'.$post->file1)}}" alt="" srcset="">
                
              <div>
                <div class="d-flex ml-3">
                  <button  type="submit" onclick="return confirm('Chu vi certas?')" href="{{url('delete'.'/'.$post->id)}}" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;"><i class="fa fa-trash"></i>forigi</button>
                  <a  onclick="return confirm('Chu vi certas?')" class="btn btn-warning mt-2" href="{{url('update'.'/'.$post->id)}}" style="margin-left:1px;"><i class="fa fa-edit"></i>Modifii</a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4">
            <div class="user-block block text-center">
              <div class="">
              <p>{{$post->title}}</p>
                <!-- 3084 for modify dark color -->
              </div>
            <p>{{substr($post->description3,0,5)."..."}}</p>
              <img class="agado"  width="" height="" src="{{ asset('storage/actuality_photos/'.$post->file3)}}" alt="" srcset="">
                
              <div>
                <div class="d-flex ml-3">
                  <button  type="submit" onclick="return confirm('Chu vi certas?')" href="{{url('delete2'.'/'.$post->id)}}" class="btn btn-secondary mt-2 mr-2" style="margin-left:1px;"><i class="fa fa-trash"></i>forigi</button>
                  <a  onclick="return confirm('Chu vi certas?')" class="btn btn-warning mt-2" href="{{url('update'.'/'.$post->id)}}" style="margin-left:1px;"><i class="fa fa-edit"></i>Modifii</a>
                </div>
              </div>
            </div>
            
          </div>
        @endforeach
       

        
      </div>
      
      <div class="row d-flex justify-content-center">{!! $posts->appends(Request::all())->links() !!}</div>

      
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