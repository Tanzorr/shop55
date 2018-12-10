<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>LaraShop55 - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<!-- Bootstrap core CSS     -->--}}
    {{--<link href="{{Config::get('app.url')}}/admin_theme/assets/css/bootstrap.min.css" rel="stylesheet" />--}}

    {{--<!-- Animation library for notifications   -->--}}
    {{--<link href="{{Config::get('app.url')}}/admin_theme/assets/css/animate.min.css" rel="stylesheet"/>--}}

    {{--<!--  Light Bootstrap Table core CSS    -->--}}
    {{--<link href="{{Config::get('app.url')}}/admin_theme/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>--}}


    {{--<!--  CSS for Demo Purpose, don't include it in your project     -->--}}
    {{--<link href="{{Config::get('app.url')}}/admin_theme/assets/css/demo.css" rel="stylesheet" />--}}

    {{--<link href="{{Config::get('app.url')}}/node_modules/select2/dist/css/select2.min.css"--}}
          {{--rel="stylesheet"/>--}}

    <!--     Fonts and icons     -->
    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>--}}
    {{--<link href="{{Config::get('app.url')}}/admin_theme/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />--}}
    {{--<script src="{{Config::get('app.url')}}/admin_theme/assets/js/jquery-1.10.2.js" type="text/javascript"></script>--}}
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <style>
        .row_head div{ border:1px solid #efefef}
        .row_body, .row_head div{
            padding:10px;
            text-align:center

        }
        .row_body{ border-bottom:1px solid #efefef}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{Config::get('app.url')}}/admin_theme/assets/img/sidebar-5.jpg">


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/admin')}}" class="simple-text">
                    LaraShop55
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('/admin')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/profile')}}">
                        <i class="pe-7s-user"></i>
                        <p>Profile</p>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/addProduct')}}">
                        <i class="pe-7s-note"></i>
                        <p>Product</p>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/addCategory')}}">
                        <i class="pe-7s-notebook"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/users')}}">
                        <i class="pe-7s-notebook"></i>
                        <p>Users</p>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/orders')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Orders</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">

                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('/admin')}}/profile">
                                <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Dropdown
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')



        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyrt">
                            &copy; 2017 LaraShop55. All Rights Reserved. <a href="terms-conditions.php">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{--<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/html5.js"></script>--}}
        {{--<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/bootstrap.js"></script>--}}
        {{--<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/multiple-accordion.js"></script>--}}
        {{--<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/jquery.nice-select.js"></script>--}}
        {{--<script type="text/javascript" src="{{Config::get('app.url')}}/theme/js/jquery.bootstrap-responsive-tabs.js"></script>--}}
        <script>
            $(function() {
                var html = $('html, body'),
                    navContainer = $('.nav-container'),
                    navToggle = $('.nav-toggle'),
                    navDropdownToggle = $('.has-dropdown');
                // Nav toggle
                navToggle.on('click', function(e) {
                    var $this = $(this);
                    e.preventDefault();
                    $this.toggleClass('is-active');
                    navContainer.toggleClass('is-visible');
                    html.toggleClass('nav-open');
                });
            });
        </script>
        <script language="JavaScript">
            $(document).ready(function() {
                $(".topnav").accordion({
                    accordion:false,
                    speed: 500,
                    closedSign: '+',
                    openedSign: '-'
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('select').niceSelect();
                //  FastClick.attach(document.body);
            });
        </script>
        <script>
            $('.responsive-tabs').responsiveTabs({
                accordionOn: ['xs', 'sm']
            });
        </script>
        <script type="text/javascript">
            function showDiv(divname){
                closealldivs(divname);
                $("#"+divname).slideToggle();
            }
            function closeMe(trgt)
            {
                $("#slidingDiv"+trgt).toggle();
            }
            function closealldivs(divname){
                for(var i=1; i<=3; i++){
                    var abc="slidingDiv"+i;
                    if(divname!=abc){
                        $("#slidingDiv"+i).hide(); }
                }}
        </script>
        <script type="text/javascript">
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        </script>
</body>
</html>