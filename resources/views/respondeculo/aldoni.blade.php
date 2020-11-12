@extends('layouts/_indexRespondec')
@section('content')
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-10">
        <div class="block">
          <div class="title"><strong class="d-block">Aldoni</strong><span class="d-block">Aldoni homoj por kontakti ilin pli facile....</span></div>
          <div class="block-body">
            <form>
              <div class="form-group">
                <label class="form-control-label">Nomo</label>
                <input type="text" placeholder="Nomo " class="form-control">
              </div>
              <div class="form-group">       
                <label class="form-control-label">Prenomo </label>
                <input type="text" placeholder="Prenomo " class="form-control">
              </div>
              <div class="form-group">       
                  <label class="form-control-label">Telefono </label>
                  <input type="number" placeholder="Telefono " class="form-control">
                </div>
                <div class="form-group">       
                  <label class="form-control-label">Email </label>
                  <input type="email" placeholder="Email " class="form-control">
                </div>
              
                
                <div class="form-groupform-group file-upload-wrapper">
                    <label class="form-control-label">Foto</label> <br>
                  <input type="file" id="input-file-now" class="file-upload" />
                </div>
              <div id="" class="form-group mt-3 mobile">       
                <input type="submit" value="Sendi" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Horizontal Form-->
      
      <!-- Inline Form-->
      
      <!-- Modal Form-->  
     </div>
  </div>
      
</section>

@endsection