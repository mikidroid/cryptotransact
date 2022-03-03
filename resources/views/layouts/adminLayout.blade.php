<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Atlantis Bootstrap 4 Admin Dashboard</title>
		<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<link rel="icon" href="atlantis/img/icon.ico" type="image/x-icon"/>

		<!-- Fonts and icons -->
		<script src="atlantis/js/plugin/webfont/webfont.min.js"></script>
		<script>
			WebFont.load({
				google: {"families":["Lato:300,400,700,900"]},
				custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['atlantis/css/fonts.min.css']},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!-- CSS Files -->
		<link rel="stylesheet" href="atlantis/css/bootstrap.min.css">
		<link rel="stylesheet" href="atlantis/css/atlantis.css">

		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link rel="stylesheet" href="atlantis/css/demo.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="main-header">
				<!-- Logo Header -->
				<div class="logo-header" data-background-color="blue">

					<a href="index.html" class="logo">
						<img src="image/logo.png" alt="navbar brand" class="navbar-brand">
					</a>
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<div class="nav-toggle">
						<button class="btn btn-toggle toggle-sidebar">
							<i class="icon-menu"></i>
						</button>
					</div>
				</div>
				<!-- End Logo Header -->

            <!-- include admin navbar -->
            @include('livewire.navBar.admin')

            <!-- include admin top panel -->
            @include('livewire.layouts2.banner.admin')

            <!-- content slot -->
            @yield('content')

            <!-- footer -->
            @include('livewire.layouts2.footer.dashboards')

            </body>
</html>
