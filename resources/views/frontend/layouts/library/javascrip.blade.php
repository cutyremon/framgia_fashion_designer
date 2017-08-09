{{ Html::script('/bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
{{ Html::script('/bower_components/ResponsiveSlides/responsiveslides.min.js') }}
<script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } 
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!--light-box-files -->
<script src="/js/modernizr.custom.js"></script>
<script src="/js/jquery.chocolat.js"></script>
<!-- PopUp-Box-JavaScript -->
<script type="text/javascript">
    $(function () {
        $('.filtr-item a').Chocolat();
    });
</script>
<!-- //PopUp-Box-JavaScript -->
<!-- //js -->
<!-- start-smoth-scrolling -->
{{ Html::script('/bower_components/ui-to-top/js/jquery.ui.totop.js', ['type' => 'text/javascript']) }}
{{ Html::script('/bower_components/jquery-easing/jquery.easing.js', ['type' => 'text/javascript']) }}
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<script src="/js/jquery.flipster.js"></script>
<script>
    <!--
    $(function () {
        $(".flipster").flipster({style: 'carousel', start: 0});
    });
-->
</script>
<!-- start-smoth-scrolling -->
<!-- required-js-files-->
{{ Html::script('/bower_components/owl.carousel/dist/owl.carousel.js') }}
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 1,
            lazyLoad: true,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
</script>
<!--//required-js-files-->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function () {
        $(".top-nav ul").slideToggle("slow", function () {
        });
    });
</script>
<!-- script-for-menu -->
<!---->
<script>
    $(function () {
        $('.adsense_btn_close').click(function () {
            $(this).closest('.adsense_fixed').css('display', 'none');
        });
        $('.adsense_btn_info').click(function () {
            if ($('.adsense_info_content').is(':visible')) {
                $('.adsense_info_content').css('display', 'none');
            } else {
                $('.adsense_info_content').css('display', 'block');
            }
        });
    });
</script>
{{ Html::script('/bower_components/bootstrap/dist/js/bootstrap.min.js', ['type' => 'text/javascript']) }}
<!--pop-up-box -->
{{ Html::script('/bower_components/magnific-popup/dist/jquery.magnific-popup.js', ['type' => 'text/javascript']) }}
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<!-- //pop-up-box -->
<!-- script-for-fade-out -->
<script type="text/javascript">
    $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<!-- //script-for-fade-out -->
