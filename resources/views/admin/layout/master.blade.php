<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Purple Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
	<!-- End layout styles -->

	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>

<body>


@include('admin.components.header')
@include('admin.components.sidebar')

@yield('content')




	<!-- plugins:js -->
	<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('admin/js/off-canvas.js')}}"></script>
	<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
	<script src="{{asset('admin/js/misc.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="{{asset('admin/js/dashboard.js')}}"></script>
	<script src="{{asset('admin/js/todolist.js')}}"></script>
	<!-- End custom js for this page -->

	<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>