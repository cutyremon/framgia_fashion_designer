<!-- Stored in resources/views/fashsion/home.blade.php -->
@php
    use App\Helpers\HelpText;
@endphp

@extends('frontend.layouts.master')

@section('title', 'Framgia Fashion')

@section('content')
    <!-- banner -->
    <div class="banner" id="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @for($i = 0; $i < count($topics); $i ++)
                    <li data-target="#myCarousel" data-slide-to="{{ $i }}" class="{{ $i == 1 ? 'active' : '' }}"></li>
                @endfor
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @for($i = 0; $i < count($topics); $i ++)
                    <div class="item {{ $i == 1 ? 'active' : '' }}">
                        <img src="{!! $topics[$i]->image !!}">
                        <div class="carousel-caption">
                            <a href="#">
                                <h3>{!! $topics[$i]->topic_name !!}</h3>
                                <p>{!! $topics[$i]->description !!}</p>
                            </a>
                        </div>
                    </div>
                @endfor
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
    <!--//end banner-->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <h5 class="title-w3ls">About</h5>
            <div class="col-md-6 about-left-w3layouts">
                <h6 class="sub"> Creative ideas for your fashion</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable.
                    If
                    you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                    hidden in the middle of text.</p>
            </div>
            <div class="col-md-6 about-right-w3layouts">
                <iframe src="https://player.vimeo.com/video/58238439"></iframe>
            </div>
            <div class="clearfix"></div>
            <!-- Flipster List -->
            <div class="flipster">
                <ul>
                    <li>
                        <div class="about-grid-agile">
                            <div class="about-head-w3">
                                <h3>Products</h3>
                            </div>
                            <div class="about-bottom">
                                <div class="about-bottom-image">
                                    <img src="images/about1.jpg" alt=" " class="img-responsive">
                                </div>
                                <div class="about-bottom-bottom">
                                    <p>Cras id odio elit. Ut scelerisque pellentesque tortor, metus eu.</p>
                                    <h5>$100</h5>
                                </div>
                                <div class="read-button">
                                    <a href="#news" class="scroll">Read More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about-grid-agile">
                            <div class="about-head-w3">
                                <h3>Services</h3>
                            </div>
                            <div class="about-bottom">
                                <div class="about-bottom-image">
                                    <img src="images/about2.jpg" alt=" " class="img-responsive">
                                </div>
                                <div class="about-bottom-bottom">
                                    <p>Cras id odio elit. Ut scelerisque pellentesque tortor, metus eu.</p>
                                    <h5>$150</h5>
                                </div>
                                <div class="read-button">
                                    <a href="#news" class="scroll">Read More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about-grid-agile">
                            <div class="about-head-w3">
                                <h3>Services</h3>
                            </div>
                            <div class="about-bottom">
                                <div class="about-bottom-image">
                                    <img src="images/about3.jpg" alt=" " class="img-responsive">
                                </div>
                                <div class="about-bottom-bottom">
                                    <p>Cras id odio elit. Ut scelerisque pellentesque tortor, metus eu.</p>
                                    <h5>$200</h5>
                                </div>
                                <div class="read-button">
                                    <a href="#news" class="scroll">Read More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Flipster List -->
        </div>
    </div>
    <!-- end about -->
    <!-- Right to left-->
    <div class="team" id="designers">
        <div class="container">
            <h5 class="title-w3ls"><a href="#">Stylist</a></h5>
            @foreach($users as $user)
                <div class="col-sm-4 team-w3-agileits">
                    <!-- normal -->
                    <div class="ih-item circle effect3 bottom_to_top">
                        <a href="#">
                            <div class="img"><img src="{!! $user->avatar !!}" alt="img"></div>
                            <div class="info">
                                <h3>{!! $user->full_name !!}</h3>
                                <p>{!! $user->description !!}</p>
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
            @endforeach
        </div>
    </div>
    <!-- //end Right to left-->
    <!-- sytle -->
    <div class="gallery" id="gallery">
        <!-- gallery -->
        <div class="container">
            <h5 class="title-w3ls"><a href="#">Style</a></h5>
            <div class="gal-btm">
                @for($i = 0; $i < count($styles); $i++)
                    <div class="{{ HelpText::stylesHome($i + 1) }}" data-wow-delay=".5s">
                        <a href="#image-1">
                            <div class="nd-wrap nd-style-8">
                                <img src="{!! $styles[$i]->image !!}" class="img-responsive"/>
                                <div class="nd-content">
                                    <div class="nd-content_inner">
                                        <div class="nd-content_inner1">
                                            <h4 class="nd-title">{!! $styles[$i]->tittle !!}</h4>
                                            <span class="nd-icon">
                                                <i class="glyphicon glyphicon-link"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    {{--<div class="lb-overlay" id="image-1">--}}
        {{--<img src="images/g1.jpg" alt="image1"/>--}}
        {{--<div class="gal-info">--}}
            {{--<h3>Gallery</h3>--}}
            {{--<p>Neque porro quisquam est, qui dolorem ipsum--}}
                {{--quia dolor sit amet, consectetur, adipisci velit,--}}
                {{--sed quia non numquam eius modi tempora incidunt ut--}}
                {{--labore et dolore magnam aliquam quaerat voluptatem.</p>--}}
        {{--</div>--}}
        {{--<a href="index.html" class="lb-close">Close</a>--}}
    {{--</div>--}}
    <!-- end style -->
    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h5 class="title-w3ls">{{__('contact')}}</h5>
            <div class="contact-main-agileinfo">
                <div class="left-main-agileinfo">
                    <h6 class="sub">{{__('contact us')}}</h6>
                    <address>
                        <ul>
                            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{__('anddress')}}: Hà Nội
                            </li>
                            <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> {{__('telephone')}} : +1
                                (958)
                                123-3667
                            </li>
                            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{__('email')}} : <a
                                        class="mail" href="mailto:mail@example.com">hoangduyib96@gmail.com</a></li>
                        </ul>
                    </address>
                </div>
                <div class="contact-right-w3-agileits">
                    <h6 class="sub">{{__('contact form')}}</h6>
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Your Name" required="">
                        <input class="email" type="text" name="Email" placeholder="Phone or Email" required="">
                        <textarea placeholder="Your question" name="Message" required=""></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection('content')

@section('footer')
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="col-md-4 footer-a-agileinfo">
                <h2><a href="index.html"><span>F</span>ramgia <span>F</span>ashsion </a></h2>
                <p class="para-agile">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-md-4 footer-b-wthree">
                <h6 class="sub">Links</h6>
                <ul>
                    <li><a class="scroll" href="#home">Home</a></li>
                    <li><a class="scroll" href="#designers">Stylist</a></li>
                    <li><a class="scroll" href="#gallery">Style</a></li>
                    <li><a class="scroll" href="#about">About</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-c-w3-agile">
                <h6 class="sub">Stay in touch</h6>
                <div class="subscribe">
                    <form action="#" method="post">
                        <input type="text" class="sub-email" value="Email" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Email';}">
                        <a href="#" role="button" class="submit"><span class="glyphicon glyphicon-menu-right arrow-rt"
                                                                       aria-hidden="true"></span></a>
                    </form>
                </div>
                <ul class="social">
                    <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twt"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gpls"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" class="gpls"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
    <!-- end footer -->
@endsection('footer')

@section('custom-css')
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
@endsection('custom-css')
