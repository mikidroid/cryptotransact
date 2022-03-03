<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{env('APP_NAME')}} - Sign in to continue to {{env('APP_NAME')}}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>

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
</head>


	<body>
    <div style="">
        <img src="img/inv_bg2.jpg" class="fixedOverlayIMG">
        <div class="fixedOeverlayBG"></div>
        <div class="">
            <div class="row login_row_cont">
                <div class="col-md-6 position_relative" >
                    <div class="logo_cont" align="center">
                        <img src="img/logo.png" alt="{{env('APP_NAME')}}" class="login_logo">
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
                                <div>
                                    <div class="">
                                        <div class="">
                                            <div align="center">

                                                <img src="img/logo.png" alt="{{env('APP_NAME')}}" class="login_logo">
                                                <br>
                                                <h3 class="colhd"><i class="fa fa-user"></i> Create an Account</h3>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="reg_form_scroll scroll">
                                            <form method="POST" action="register">
                                                @csrf

                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="firstname" class=" col-form-label text-md-right">First Name</label>
                                                        <input id="firstname" type="text" class="form-control  regTxtBox" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus placeholder="First name">

                                                                                                            </div>
                                                     <div class="col-sm-6">
                                                        <label for="lastname" class=" col-form-label text-md-right">Last Name</label>
                                                        <input id="lastname" type="text" class="form-control  regTxtBox" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname" autofocus placeholder="Last name">

                                                                                                            </div>
                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <label for="email" class=" col-form-label text-md-right">E-Mail Address</label>
                                                        <input id="email" type="email" class="form-control  regTxtBox" name="email" value="{{old('email')}}" required autocomplete="email" placeholder="Email">

                                                                                                            </div>
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-12">
                                                        <label for="username" class=" col-form-label text-md-right">Username</label>
                                                        <input id="username" type="username" class="form-control  regTxtBox" name="username" value="{{old('username')}}" required autocomplete="username" placeholder="Username">

                                                                                                            </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <label for="password" class=" col-form-label text-md-right">Password</label>
                                                        <input id="password" type="password" class="form-control  regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="password-confirm" class=" col-form-label text-md-right">Confirm Password</label>
                                                        <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" >
                                                    </div>

                                                </div>



                                                <div class="row">
                                                    <div class="">
                                                        <input id="ref" type="hidden" class="form-control" name="ref" value="" >
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="" align="center">
                                                        <br><br>
                                                                                                                    <button type="submit" class="collc btn btn-primary">
                                                                Register
                                                            </button>
                                                                                                                <br><br>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="" align="center">
                                                       <p>
                                                          <strong>Already have an account? <a href="login.html">Login</a></strong>
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

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="atlantis/js/setting-demo.js"></script>
<!-- <script src="/atlantis/js/demo.js"></script>    -->
<script src="atlantis/js/moment.js"></script>
<script src="atlantis/main.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var timeout = 10000;
        var num = 10
        setInterval(function() {
            $('#csrf').val('BSZgMnDHjaVrzeXMBRGvWV4Dl7AMXQbYAimqRC9E');
            // alert('here');
        }, timeout);
    });
</script>

</body>


<!-- Mirrored from crestcredits.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Feb 2022 11:14:17 GMT -->
</html>

