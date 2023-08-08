<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>{{ $title }}</title>

<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>

<body>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     @include('partials.nav')
</div>

<!-- Home Section -->

<main>
    @yield('main')
</main>

<!-- Footer Section -->

<footer>
    @include('partials.footer')
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.parallax.js')}}"></script>
<script src="{{URL::asset('js/smoothscroll.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>

</body>
</html>