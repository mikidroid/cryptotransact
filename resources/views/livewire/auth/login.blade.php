
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts and icons -->
    <script src="atlantis/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/atlantis/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="atlantis/css/bootstrap.min.css">
    <link rel="stylesheet" href="atlantis/css/atlantis.min.css">
    <link rel="stylesheet" href="atlantis/style.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="atlantis/css/demo.css">
    <!-- jquery lib -->
    <script src="atlantis/js/core/jquery.3.2.1.min.js"></script>
     @livewireStyles
    <title>{{env('APP_NAME')}} - Login</title>
</head>


	<body>
    <div style="">
        <img src="img/inv_bg2.jpg" class="fixedOverlayIMG">
        <div class="fixedOeverlayBG"></div>
        <div class="">
            <div class="row login_row_cont">
                <div class="col-md-6 position_relative">
                    <div class="logo_cont" align="center">
                        <img src="img/logo.png" alt="Crest Credits" class="login_logo">
                        <h1>{{env('APP_NAME')}}</h1>
                        <p>
                            <h4>Sign in to continue to {{env('APP_NAME')}}</h4>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 bg_white">
                    <div class="login_fixed_panel">
                        <div class="row">
                            <div class="col-md-12" >
                                <div style="">
                                    <div class="">
                                        <div class="">
                                            <div align="center">
                                                <img src="img/logo.png" alt="Crest Credits" class="login_logo">
                                                <br>
                                                <h3 class="colhd"><i class="fa fa-key"></i>User Login</h3>
                                                <hr>
                                            </div>
                                        </div>




                                        <div class="form_cont">
                                            <form method="POST" action="login" class="">
                                             @csrf
                                             @include('livewire.inc.flashMessages')

                                                <div class="form-group row" >
                                                        <label for="email">E-Mail Address</label>
                                                        <input id="email" type="email" class="  regTxtBox" name="email" value="" required autocomplete="email" autofocus placeholder="E-Mail Address">


                                                </div>
                                                <div class="form-group row">
                                                    <label for="password">Password</label>
                                                        <input id="password" type="password" class="  regTxtBox" name="password" required autocomplete="current-password" placeholder="Password">


                                                </div>

                                                <div class="row">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input class="" type="checkbox" name="remember" id="remember" >
                                                    &nbsp;
                                                    <label class="" for="remember">
                                                        Remember Me
                                                    </label>

                                                </div>

                                                <div class="">
                                                    <div class="" align="center">
                                                        <button  type="submit" class="collc btn btn-primary">
                                                            Login
                                                        </button>
                                                    </div>
                                                    <div class="" align="center" >
                                                                                                                    <a class="btn btn-link" href="forgot-password">
                                                                Forgot Your Password?
                                                            </a>
                                                                                                            </div>
                                                </div>

                                                <div class="">
                                                    <div class="" align="center">

                                                       <p>
                                                           <strong>Don&#039;t have an account? <a href="/register">Register</a></strong>
                                                       </p>
                                                    </div>

                                                </div>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>

<div id="err" class="alert alert-danger popup_alert_err" ></div>
<div id="suc" class="alert alert-success popup_alert_suc"></div>

@livewireScripts

<script src="atlantis/js/core/popper.min.js"></script>
<script src="atlantis/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="atlantis/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="atlantis/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="atlantis/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="atlantis/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="atlantis/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="atlantis/js/atlantis.min.js"></script>




</body>

</html>

