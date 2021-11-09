<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">






<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="login-form-v9/images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/fonts/iconic/css/material-design-iconic-font.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="login-form-v9/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-form-v9/css/main.css"> -->






     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- jvectormap -->
<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

<!-- <link href="assets/plugins/morris/morris.css" rel="stylesheet"> -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <title>GHC-courselodge</title>
</head>


<body class="fixed-left">


    @yield('content')
</body>
</html>