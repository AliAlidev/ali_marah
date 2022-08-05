@extends('base')

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

	<!-- Percent Circle -->
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- RTL -->
	<link rel="stylesheet" href="assets/styles/style-rtl.min.css">
	<!-- Color Picker -->
	<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
</head>
@section('content')
<div class="row" style="padding-top:5rem">
	<div class="col-lg-5 col-md-6 col-xs-12">
		<div class="box-content">
			<h4 class="box-title" style="color:#00008B;font-size:2.5rem">real estate owners</h4>
			<!-- /.box-title -->
			
			<div class="content widget-stat-chart">
				<div class="c100 p{{$ownerUsersPr}} small blue js__circle">
					<span>{{$ownerUsersPr}}%</span>
					<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
					</div>
				</div>
				<!-- /.c100 p58 -->
				<div class="right-content">
					<h2 class="counter">{{$ownerUsers}}</h2>
					<!-- /.counter -->
					<p class="text">number of owner users</p>
					<!-- /.text -->
				</div>
				<!-- /.right-content -->
			</div>
			<!-- /.content -->
		</div>
	</div>
	<div class="col-lg-5 col-md-6 col-xs-12">

		<div class="box-content">
			<h4 class="box-title" style="color:#00008B;font-size:2.5rem">normal users</h4>
			<!-- /.box-title -->
			
			<!-- /.dropdown js__dropdown -->
			<div class="content widget-stat-chart">
				<div class="c100 p{{$normalUsersPr}} small blue js__circle">
					<span>{{$normalUsersPr}}%</span>
					<div class="slice">
						<div class="bar"></div>
						<div class="fill"></div>
					</div>
				</div>
				<!-- /.c100 p58 -->
				<div class="right-content">
					<h2 class="counter">{{$normalUsers}}</h2>
					<!-- /.counter -->
					<p class="text">number of normal users</p>
					<!-- /.text -->
				</div>
				<!-- /.right-content -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.box-content -->
	</div>

</div>
</div>

@endsection
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>
<!-- Full Screen Plugin -->
<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

<!-- Percent Circle -->
<script src="assets/plugin/percircle/js/percircle.js"></script>

<!-- Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Chartist Chart -->
<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
<script src="assets/scripts/chart.chartist.init.min.js"></script>

<!-- FullCalendar -->
<script src="assets/plugin/moment/moment.js"></script>
<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/scripts/fullcalendar.init.js"></script>

<script src="assets/scripts/main.min.js"></script>
<script src="assets/color-switcher/color-switcher.min.js"></script>