<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title') | Karissa Subedi Career Consultancy</title>

	<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/global/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<style>
		body { font-family: 'Manrope', sans-serif; }
		.text-primary { color: #4A2E1F !important; }
		.bg-primary { background-color: #4A2E1F !important; }
	</style>
	<!-- Core JS files -->
	<script src="{{asset('admin/global/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('admin/global/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/global/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('admin/global/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('admin/js/app.js')}}"></script>
	<script src="{{asset('admin/global/js/demo_pages/login.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">
				@yield('content')
			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
