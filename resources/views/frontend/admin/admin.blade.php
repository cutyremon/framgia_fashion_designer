<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('bower_components/font-awesome/css/font-awesome.min.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('css/admin.css', ['rel' => 'stylesheet']) }}
    {{--{{ Html::style('css/style.css', ['rel' => 'stylesheet']) }}--}}
    {{ Html::script('bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
    {{ Html::script('bower_components/ResponsiveSlides/responsiveslides.min.js') }}
    {{ Html::script('js/admin.js',['rel' => 'stylesheet','type' => 'text/javascript'])}}
    {{--    {{ Html::style('css/style_profile.css', ['rel' => 'stylesheet']) }}--}}
    {{ Html::style('home-style.css', ['rel' => 'stylesheet']) }}
    @include('frontend.layouts.library.javascrip')


</head>
<body>
@php
    $error = array();
@endphp

<!--header-->
{{--<div id="top-nav" class="navbar navbar-inverse navbar-static-top">--}}
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-toggle"></span>
        </button>
        <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right admin-head-1">

            <li class="dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i
                            class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                <ul id="g-account-menu" class="dropdown-menu" role="menu">
                    <li><a href="#">My Profile</a></li>
                </ul>
            </li>
            <li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
        </ul>
    </div>
</div><!-- /container -->
{{--</div>--}}
<!-- /Header -->

<!-- Main -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="list-unstyled">
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#userMenu">
                        <h5>Settings<i class=" glyphicon glyphicon-chevron-right"></i></h5>
                    </a>
                    <ul class="list-unstyled collapse  " id="userMenu">
                        {{--<ul style="display:none;">--}}
                        <li>
                            <a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i>
                                <i>Home</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getAdminProduce',['ad'=>'2'])}}">
                                <i class="glyphicon glyphicon-pencil">
                                </i>
                                <i>Style
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getAdminProduce',['ad'=>'1'])}}">
                                <i class="glyphicon glyphicon-pencil">
                                </i>
                                <i>Produces
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getAdminProduce',['ad'=>'3'])}}">
                                <i class="glyphicon glyphicon-pencil">
                                </i>
                                <i>Topic
                                </i>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="glyphicon glyphicon-pencil"></i>
                                <i data-toggle="modal"
                                   data-target="#per-info_3">Role
                                </i>
                                {{--<i class="fa fa-pencil" aria-hidden="true"></i>)--}}
                            </a>
                        </li>
                        <li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-off"></i>
                                <i>
                                    Logout
                                </i>
                            </a></li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu2">
                        <h5>Notification<i class="glyphicon glyphicon-chevron-right"></i></h5>
                    </a>

                    <ul class="list-unstyled collapse " id="menu2">
                        <li><a href="#"><i>Infor</i></a>
                        </li>
                        <li><a href="#"><i>Views</i></a>
                        </li>
                        <li><a href="#"><i>Requests</i></a>
                        </li>
                        <li><a href="#"><i>Timetable</i></a>
                        </li>
                        <li><a href="#"><i>Alerts</i></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3">
                        <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
                    </a>

                    <ul class="list-unstyled collapse " id="menu3">
                        <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>

            <hr>

            <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>

            <hr>
        </div>
        @include('frontend.admin.admin-detail')
    </div>
</div>
</body>
</html>
