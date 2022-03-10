
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="favicon.png" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<link rel="stylesheet" href="/use.fontawesome.com/releases/v5.7.1/css/all.html" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="css/main.css" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" />

<title>{{env('APP_NAME')}}</title>
<link rel="manifest" href="js/manifest.json">
<meta name="theme-color" content="#2970fa">
<meta name="msapplication-navbutton-color" content="#2970fa">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2970fa">


<meta name="theme-color" content="#2970fa">
<meta name="msapplication-navbutton-color" content="#2970fa">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2970fa">

<link href="favicon.png" rel="icon" type="image/x-icon" />

<meta name="keywords" content="{{env('APP_NAME')}}, Options, Binary" />


<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144x144.png" />


<meta property="og:site_name" content="{{env('APP_NAME')}}">
<meta property="og:title" content="Binary Trading With {{env('APP_NAME')}}" />
<meta name="description" content="Binary Trading With {{env('APP_NAME')}}, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Binary Trading With {{env('APP_NAME')}}, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:type" content="website" />

@livewireStyles
<link href="/css/select2.min.css" rel="stylesheet" />
</head>
<body>

@include('livewire.layouts2.navBar.guest')

<link rel="stylesheet" href="../css/bootstrap.min.css">

<script src="/atlantis/js/core/jquery.3.2.1.min.js"></script>
<script src="/atlantis/js/core/popper.min.js"></script>
<script src="/atlantis/js/core/bootstrap.min.js"></script>

<link href="/css/main.css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<style>
.slick-dots{bottom: -10px !important;}
.slick-dotted.slick-slider{ margin-bottom: 0px;}
</style>

<div>

@yield('content')

</div>
 @include('livewire.layouts2.footer.main')
 @include('livewire.layouts2.footer.dashboards')
 @yield('homeFunctions')
 
 <!-- Tawk.to chat -->
 
 
 
</body>

</html>
