<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact esperanto centroj</title>
  <link rel="stylesheet" href="assetcontact/css/style.css">
  <link rel="stylesheet" href="assetcontact/css/font-awesome.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

</head>
<body>
<section class="w3l-contact-1">
    <div class="contacts-9 section-gap">
      <div class="wrapper">
        <div>
          <a href="/">
            <img src="{{asset('asset/img/logo_reduce.png')}}" style="width:400px" alt="" srcset="">
          </a>
        </div>
        <h4 class="sub-title text-center"></h4>
        <h3 class="global-title text-center">Kontaktu nin</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Voku Nin</h6>
                <p><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Retpoŝtu Nin</h6>
                <p><a href="mailto:contact@esperanto-centroj.com" class="mail">contact@esperanto-centroj.com</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div  style="display: none" class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div style="display: none" class="cont-right">
                <h6>Adreso</h6>
                <p>C</p>
              </div>
            </div>
          </div>
          <div class="map-content-9">
          <form action="{{route('contact')}}" method="post">
            @csrf
              <div class="twice-two">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Nomo">
                @if($errors->has('name'))
	          			<p style="color: red;" class="text-red">{{ $errors->first('name') }}</p>
			         @endif
                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Retadreso"
                  >
                  @if($errors->has('email'))
	          			<p style="color: red;" class="text-red">{{ $errors->first('email') }}</p>
			         @endif
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subjekto"
                >
                  @if($errors->has('subject'))
	          			<p style="color: red;" class="text-red">{{ $errors->first('subject') }}</p>
			         @endif
              </div>
              <textarea name="message" class="form-control" id="message" placeholder="Mesaĝo"
                ></textarea>
                @if($errors->has('message'))
	          			<p style="color: red;" class="text-red">{{ $errors->first('message') }}</p>
			         @endif
              <button type="submit" class="btn btn-contact">Sendi mesaĝon</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->
<!-- footer-66 -->

<!--//footer-66 -->
</body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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