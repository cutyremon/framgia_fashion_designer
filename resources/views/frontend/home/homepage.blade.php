<!-- Stored in resources/views/fashsion/home.blade.php -->

@extends('frontend.layouts.master')

@section('title', 'Framgia Fashsion')

@section('content')
<!-- banner -->
    <div class="banner" id="home">
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <h4> SUCCEED <br>IN THE</h4>
                                <h3>FASHION <br>WORLD</h3>
                                <p> We do more than just create beauty. </p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h4>WE DO <br>MORE</h4>
                                <h3>THAN <br>AWESOME</h3>
                                <p>Creative ideas for your fashion.</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h4> SUCCEED <br>IN THE</h4>
                                <h3>FASHION <br>WORLD</h3>
                                <p> We do more than just create beauty. </p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h4>WE DO <br>MORE</h4>
                                <h3>THAN <br>AWESOME</h3>
                                <p>Creative ideas for your fashion.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <a href="#" data-toggle="modal" data-target="#myModal1">View more</a>
                <!-- Modal1 -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>Haute Couture</h4>
                                <img src="images/banner1.jpg" alt=" " class="img-responsive">
                                <h5>We do more than awesome</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, rds which don't look
                                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                    be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Modal1 -->
            </div>
            <!-- //end banner-text-->
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
                    industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable. If
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
<!-- sytle -->
    <div class="gallery" id="gallery">
        <!-- gallery -->
        <div class="container">
            <h5 class="title-w3ls"><a href="#">Style</a></h5>
            <div class="gal-btm">
                <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="#image-1">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g1.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
                    <a href="#image-2">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g2.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="#image-3">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g3.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gal-gd-sec wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="#image-4">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g4.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gal-gd-sec wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="#image-5">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g5.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="#image-6">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g6.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gal-gd wow fadeInDown animated" data-wow-delay=".5s">
                    <a href="#image-7">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g7.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                    <a href="#image-8">
                        <div class="nd-wrap nd-style-8">
                            <img src="images/g8.jpg" class="img-responsive" alt=" "/>
                            <div class="nd-content">
                                <div class="nd-content_inner">
                                    <div class="nd-content_inner1">
                                        <h4 class="nd-title">Gallery</h4>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-link"></i>
                                        </span>
                                        <span class="nd-icon">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="lb-overlay" id="image-1">
        <img src="images/g1.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-2">
        <img src="images/g2.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-3">
        <img src="images/g3.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
            <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-4">
        <img src="images/g4.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                        quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-5">
        <img src="images/g5.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-6">
        <img src="images/g6.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-7">
        <img src="images/g7.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-8">
        <img src="images/g8.jpg" alt="image1"/>
        <div class="gal-info">
            <h3>Gallery</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
<!-- end style -->
<!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h5 class="title-w3ls">Contact</h5>
            <div class="contact-main-agileinfo">
                <div class="left-main-agileinfo">
                    <h6 class="sub">Contact Us</h6>
                    <address>
                        <ul>
                            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Address : Hà Nội
                            </li>
                            <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telephone : +1 (958)
                                123-3667
                            </li>
                            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email : <a
                                class="mail" href="mailto:mail@example.com">hoangduyib96@gmail.com</a></li>
                        </ul>
                    </address>
                </div>
                <div class="contact-right-w3-agileits">
                    <h6 class="sub">Contact Form</h6>
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
