<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="{{asset('assets/app_images/app_icon.png')}}" sizes="30x30">
<title>{{ config('app.name') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/web_assets/css/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/aos.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/jquery.timepicker.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('/web_assets/css/style.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

@stack('style')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="{{ route('home') }}"><span>PRODUCTS</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
</ul>
</div>
</div>
</nav>

@yield('body')

<script src="{{asset('/web_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('/web_assets/js/popper.min.js')}}"></script>
<script src="{{asset('/web_assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('/web_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/web_assets/js/aos.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('/web_assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/web_assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('/web_assets/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('/web_assets/js/google-map.js')}}"></script>
<script src="{{asset('/web_assets/js/main.js')}}"></script>

</body>
</html>