
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Effect Login Form Responsive Widget Template :: w3layouts</title>
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
    <h1>Ensaluta areo</h1>
    <h1>
        <i class="fas fa-arrow-left"></i>
    </h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
	<form action="{{route('register')}}" method="post">
		@csrf
			<h2>Registrighu nun
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Via nomo
				</label>
			<input placeholder="nomo de la centro" name="name" type="text" value="{{old('name')}}">
				@if($errors->has('name'))
				<p style="color: green;" class="text-red">{{ $errors->first('name') }}</p>
			    @endif
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					Via Retadresao
				</label>
			<input placeholder="Retpoŝto" name="email" value="{{old('email')}}" type="email">
				@if($errors->has('email'))
				<p style="color: green;" class="text-red">{{ $errors->first('email') }}</p>
			@endif
            </div>
            <div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Nomo de la centro
				</label>
			<input placeholder="text" name="centro" type="text" value="{{old('centro')}}">
				@if($errors->has('name'))
				<p style="color: green;" class="text-red">{{ $errors->first('name') }}</p>
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
						<a href="#">Ĉu vi forgesis la pasvorton?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
           <div style="display: flex">
			<div style="width: 150px;">
				<input  type="submit" value="Registri">
			</div>
			<div style="width: 150px; margin-top:10%;">
					<a style="background-color: #f7296f; 
					border: none;
					color: white;
					height:16px;
					padding: 15px 32px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
			font-size: 16px;" href="{{route('loginPage')}}">Ensaluti</a>
				
			</div>
		   </div>
            
        </form>
       
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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