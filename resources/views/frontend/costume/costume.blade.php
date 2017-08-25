@extends('frontend.layouts.master')

@section('custom-css')
    {{ Html::style('/css/category/category_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/costume/costume.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
@endsection('custom-css')
@section('content')
<<<<<<< HEAD
=======



<html lang="en">
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--</head>--}}


>>>>>>> produce
<div class="container">
    {{--<h2>Carousel Example</h2>--}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://9mobi.vn/cf/images/2015/03/nkk/anh-dep-1.jpg" alt="Los Angeles" class="costume_1">
            </div>

            <div class="item">
                <img src="http://taihinhanhdep.xyz/wp-content/uploads/2015/11/anh-dep-cho-dien-thoai-1.jpg" alt="Chicago" class="costume_1">
            </div>

            <div class="item">
                <img src="http://hinhanhdepvip.com/wp-content/uploads/2016/07/anh-dep-avatar-ngo-nghinh.jpg" alt="New york" class="costume_1">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<<<<<<< HEAD
=======
</html>
>>>>>>> produce
@endsection

