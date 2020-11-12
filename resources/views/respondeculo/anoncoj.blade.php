@extends('layouts/_indexRespondec')
@section('content')
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-6">
        <div class="block">
          <div class="title"><strong class="d-block">Posti afisoj</strong><span class="d-block">vi povas posti tri fotoj kaj priskriboj.</span></div>
          <div class="block-body">
            <form>
              <div class="form-group">
                <label class="form-control-label">Titolo</label>
                <input type="text" placeholder="Titolo " class="form-control">
              </div>
              <div class="form-group">       
                <label class="form-control-label">Priskriboj </label>
                <textarea name="" class="form-control" id="" cols="30" rows=""></textarea>
              </div>
              
              
                
                <div class="form-groupform-group file-upload-wrapper">
                  <input type="file" id="input-file-now" class="file-upload" />
                </div>
              <div class="form-group mt-3">       
                <input type="submit" value="Sendi" class="btn btn-primary">
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
            <form class="form-horizontal">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Pri kiu video esstas ?</label>
                <div class="col-sm-9">
                  <textarea name="" class="form-control" id="" cols="30" rows=""></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Upload video</label>
                <div class="col-sm-9">
                  <input id="inputHorizontalWarning" type="file"  class="form-control form-control-warning"><small class="form-text">metu youtube link,vimeo aux enshti via propa.</small>
                </div>
              </div>
              <div class="form-group row">       
                <div class="col-sm-9 offset-sm-3">
                  <input type="submit" value="Sendi" class="btn btn-primary"><i class="fa fa-send"></i>
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

@endsection