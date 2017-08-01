{{--@extends('layouts.app');--}}
<!-- header -->
<div class="header" xmlns:Auth="http://www.w3.org/1999/xhtml">
    <nav class="navbar navbar-default">
        <div class="navbar-header fix-nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a href="#home"><span>F</span>ramgia <span>F</span>ashsion </a></h1>
        </div>
        <!-- navbar-header -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navbar-right-custom">
                <li><a href="#home" class="hvr-underline-from-center active">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle hvr-underline-from-center scroll" data-toggle="dropdown"
                                        href="#">Catelories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mũ</a></li>
                        <li><a href="#">Quần</a></li>
                        <li><a href="#">Áo</a></li>
                        <li><a href="#">Giày-Dép</a></li>
                        <li><a href="#">Phụ Kiện</a></li>
                        <li><a href="#">Trang Sức</a></li>
                    </ul>
                </li>
                <li><a href="#designers" class="hvr-underline-from-center scroll">Stylist</a></li>
                <li><a href="#gallery" class="hvr-underline-from-center scroll">Style</a></li>
                <li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
                @if (Auth::guest())
                    <button class="btn btn-success navbar-btn fix-btn"><a href="{{route('login')}}">SignIn</a></button>
                    <button class="btn btn-success navbar-btn fix-btn"><a href="{{route('register')}}">SignUp</a>
                    </button>
                @else
                    <button class="btn btn-success navbar-btn fix-btn">WEBCOME:{{ Auth::User()->full_name}}</button>
                    {{--<form class="form-horizontal" method="POST" action="{{route('logout')}}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<button class="btn btn-success navbar-btn fix-btn">--}}
                    {{--{{LOGOUT}}--}}
                    {{--</button>--}}
                    {{--</form>--}}
                    {{--..................--}}





                    <button class="btn btn-success navbar-btn fix-btn"><a href="{{route('logout')}}">Logout</a></button>




                @endif


            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<!-- //header -->


