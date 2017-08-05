@extends('frontend.layouts.master')

@section('content')
<!-- Right to left-->
    <div class="team" id="designers">
        <div class="container">
            <h5 class="title-w3ls"><a href="#">{{__('stylist')}}</a></h5>
            <div class="col-sm-4 team-w3-agileits">
                <!-- normal -->
                <div class="ih-item circle effect3 bottom_to_top"><a href="#">
                    <div class="img"><img src="images/t1.jpg" alt="img"></div>
                    <div class="info">
                        <h3>Ashley Rose</h3>
                        <p> Ut scelerisque pellentesque tortor.
                        </p>
                    </div>
                    </a>
                </div>
            <!-- end normal -->
            <ul class="social team-w3l">
                <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twt"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="gpls"><i class="fa fa-dribbble"></i></a></li>
            </ul>
            </div>
            <div class="col-sm-4 team-w3-agileits">
            <!-- colored -->
                <div class="ih-item circle colored effect3 bottom_to_top"><a href="#">
                    <div class="img"><img src="images/t2.jpg" alt="img"></div>
                        <div class="info">
                            <h3>Linda Carl</h3>
                            <p> Ut scelerisque pellentesque tortor.</p>
                        </div>
                    </a>
                </div>
                <!-- end colored -->
                <ul class="social team-w3l">
                    <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twt"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gpls"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-4 team-w3-agileits">
            <!-- colored -->
                <div class="ih-item circle colored effect3 bottom_to_top"><a href="#">
                    <div class="img"><img src="images/t3.jpg" alt="img"></div>
                    <div class="info">
                        <h3>Kristin Jean</h3>
                        <p> Ut scelerisque pellentesque tortor.</p>
                    </div>
                    </a>
                </div>
                <!-- end colored -->
                <ul class="social team-w3l">
                    <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twt"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gpls"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- //end Right to left-->
@endsection('content')

@section('custom-css')
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
@endsection('custom-css')
