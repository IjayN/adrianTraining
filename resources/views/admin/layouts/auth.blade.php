<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/logo.png')}}">

    <title>Adrian Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('assets/css/master_style.css')}}">

	<!-- NeoX Admin skins -->
	<link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.css')}}">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image:url(images/bg-2.jpg)" data-overlay=5>
	
	@yield('content')


	<!-- jQuery 3 -->
	<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>
	
	<!-- popper -->
	<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>