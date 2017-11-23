<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style.css') }}">
</head>
<body class="container">
	@yield('body')
	


	<!-- Scrpit for bootstrap -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	@yield('javascript')
</body>
</html>