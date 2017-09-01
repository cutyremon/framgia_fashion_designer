<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="_token" content="{{ csrf_token() }}"/>
    {{ Html::style('/bower_components/bootstrap/dist/css/bootstrap.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/bower_components/font-awesome/css/font-awesome.min.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    <link href="//fonts.googleapis.com/css?family=Sansita+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
    {{ Html::style('/css/jquery.flipster.css', ['rel' => 'stylesheet']) }}
    {{ Html::style('/css/style.css', ['rel' => 'stylesheet','type' => 'text/css']) }}
    {{ Html::style('/css/galleryeffect.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/popuo-box.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/chocolat.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/login.css', ['rel' => 'stylesheet']) }}
    {{ Html::style('/css/header/header-style.css', [ 'rel' => 'stylesheet', 'type' => 'text/css' ]) }}
    @yield('custom-css')
</head>
<body>
    <div class="wrap-page">
        <!-- Header-->
        @include('frontend.layouts.library.header')
        <!-- //End Header-->
        <!-- Content -->
        @yield('content')
        <!-- //End Content-->
        <!-- Footer -->
        @yield('footer')
        @include('frontend.layouts.library.copyright')
        <!-- //End Footer -->
    </div>
</body>
    @yield('script')
    @include('frontend.layouts.library.javascrip')
</html>
