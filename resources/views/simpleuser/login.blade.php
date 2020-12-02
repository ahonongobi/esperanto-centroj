
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title> Esperanto centroj | Enreitgi</title>
	<!-- Meta tag Keywords -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Effect Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="assets/css/loginCss.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //web-fonts -->
    <style>
        
    </style>
</head>


<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
   
	<!-- //title -->
	<!-- content -->
	<div style="margin-top: 10%;" class="sub-main-w3">
	<form action="{{route('login')}}" method="post">
		@csrf
			<h2>Ensalutu Nun
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					 Retpoŝto
				</label>
				<input placeholder="Retpoŝto" name="email" type="email">
				@if($errors->has('email'))
				<p style="color:green" class="">{{ $errors->first('email') }}</p>
			     @endif
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Pasvorto
				</label>
				<input placeholder="Pasvorto" name="password" type="password" >
				@if($errors->has('password'))
				<p style="color:green" class="">{{ $errors->first('password') }}</p>
			     @endif
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span>Restu Ensalutita</span>
						</label>
					</li>
					<li>
						<a href="{{route('contact')}}">Ĉu vi forgesis la pasvorton?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
            <input type="submit" value="Ensaluti">
            
        </form>
       
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="assets/js/canva_moving_effect.js"></script>
	<!-- //effect js -->
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
</body>

</html>