<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catlog dashboard</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('assets/styles/style.min.css')}}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('assets/plugin/waves/waves.min.css')}}">


    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{asset('assets/plugin/sweet-alert/sweetalert.css')}}">


    <!-- RTL -->
    <link rel="stylesheet" href="{{asset('assets/styles/style-rtl.min.css')}}">

    <!-- Color Picker -->
    <link rel="stylesheet" href="{{asset('assets/color-switcher/color-switcher.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>
    .pagination1{
        display: flex !important;
    }
    .pagination1 nav{
        display: flex !important;
        align-items: center !important;
        margin: auto !important;
    }
</style>

<body>
    <div class="main-menu">
        <header class="header">
            <a href=" " class="logo">Catlog</a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
            <div class="user">
                <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>

                <h5 class="name"><a href="profile.html">{{$userAuth->name}}</a></h5>
                <h5 class="position">Administrator</h5>
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-caret-down js__drop_down_button"></i>
                    <div class="control-list">
                        <div class="control-item"><a href="{{ route('logout')}}"><i class="fa fa-sign-out"></i> Log out</a></div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                <h5 class="title">Navigation</h5>
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li>
                        <a class="waves-effect" href="dashboarduser"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control"><i class="menu-icon fa fa-users"></i><span>Users</span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="ownerUsers">Owner User</a></li>
                            <li><a href="normalUsers">Normal User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="favorites"><i class="menu-icon fa fa-heart"></i><span>Users Favorites</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="services"><i class="menu-icon fa fa-cogs"></i><span>Services</span></a>
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control"><i class="menu-icon fa fa-building"></i><span>Real Estate</span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="equip">equip real estate</a></li>
                            <li><a href="property">property</a></li>
                            <li><a href="active_real_estates">active</a></li>
                            <li><a href="categories">categories</a></li>
                            <li><a href="{{ url('create-real-estate') }}">create</a></li>



                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title">Dashboard</h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">

            <!-- /.ico-item -->
            <div class="ico-item fa fa-arrows-alt js__full_screen"></div>

            <a href="" class="ico-item fa fa-power-off js__logout"></a>
        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->

    <div id="notification-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Your Notifications</h2>
        <!-- /.popup-title -->
        <div class="content">

            <!-- /.notice-list -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Recent Messages<a href="#" class="pull-left text-danger">New message</a></h2>
        <!-- /.popup-title -->
        <div class="content">

        </div>
        <!-- /.content -->
    </div>
    <!-- /#message-popup -->
    <div id="color-switcher">
        <div id="color-switcher-button" class="btn-switcher">
            <div class="inside waves-effect waves-circle waves-light">
                <i class="ico fa fa-gear"></i>
            </div>
            <!-- .inside waves-effect waves-circle -->
        </div>
        <!-- .btn-switcher -->
        <div id="color-switcher-content" class="content">
            <a href="#" data-color="red" class="item js__change_color"><span class="color" style="background-color: #f44336;"></span><span class="text">Red</span></a>
            <a href="#" data-color="violet" class="item js__change_color"><span class="color" style="background-color: #673ab7;"></span><span class="text">Violet</span></a>
            <a href="#" data-color="dark-blue" class="item js__change_color"><span class="color" style="background-color: #3f51b5;"></span><span class="text">Dark Blue</span></a>
            <a href="#" data-color="blue" class="item js__change_color active"><span class="color" style="background-color: #304ffe;"></span><span class="text">Blue</span></a>
            <a href="#" data-color="light-blue" class="item js__change_color"><span class="color" style="background-color: #2196f3;"></span><span class="text">Light Blue</span></a>
            <a href="#" data-color="green" class="item js__change_color"><span class="color" style="background-color: #4caf50;"></span><span class="text">Green</span></a>
            <a href="#" data-color="yellow" class="item js__change_color"><span class="color" style="background-color: #ffc107;"></span><span class="text">Yellow</span></a>
            <a href="#" data-color="orange" class="item js__change_color"><span class="color" style="background-color: #ff5722;"></span><span class="text">Orange</span></a>
            <a href="#" data-color="chocolate" class="item js__change_color"><span class="color" style="background-color: #795548;"></span><span class="text">Chocolate</span></a>
            <a href="#" data-color="dark-green" class="item js__change_color"><span class="color" style="background-color: #263238;"></span><span class="text">Dark Green</span></a>
            <span id="color-reset" class="btn-restore-default js__restore_default">Reset</span>
        </div>
        <!-- /.content -->
    </div>
    <!-- #color-switcher -->

    <div id="wrapper">
        <div class="main-content">

            <body>
                @yield('content')
            </body>
        </div>
        <!-- /.main-content -->
    </div>
    <!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="{{asset('../assets/scripts/modernizr.min.js')}}"></script>

    <script src="{{asset('../assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('../assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <script src="{{asset('../assets/plugin/nprogress/nprogress.js')}}"></script>

    <script src="{{asset('../assets/plugin/sweet-alert/sweetalert.min.js')}}"></script>

    <script src="{{asset('../assets/plugin/waves/waves.min.js')}}"></script>

    <!-- Full Screen Plugin -->
    <script src="{{asset('../assets/plugin/fullscreen/jquery.fullscreen-min.js')}}"></script>

    <script src="{{asset('../assets/scripts/main.min.js')}}"></script>

    <script src="{{asset('../assets/color-switcher/color-switcher.min.js')}}"></script>


    @stack('scripts')

</body>

</html>