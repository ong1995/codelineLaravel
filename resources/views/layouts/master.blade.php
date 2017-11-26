<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- font-awsome Fonts -->
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style.css') }}">
</head>
<body class="container">
	@yield('body')
	

	<meta name="_token" content="{!! csrf_token() !!}" />

	<!-- Scrpit for bootstrap -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	
	<script src="{{ URL::asset('public/js/utility.js') }}"></script>

	@yield('javascript')

</body>
</html>