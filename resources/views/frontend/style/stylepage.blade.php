@extends('frontend.layouts.master')
@section('custom-css')
    {{ Html::style('/css/category/category_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
    {{ Html::style('/css/topic_style/topic_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::script('js/admin.js',['rel' => 'stylesheet','type' => 'text/javascript'])}}
    {{ Html::script('bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
    {{ Html::script('bower_components/ResponsiveSlides/responsiveslides.min.js') }}
@endsection('custom-css')
@section('content')
    <div class="container">


    </div>
    <div class="container font-cate">
        <div class="row rowfull">
            <aside class="main-sidebar">
                <div class="col-md-2 col-sm-4 wrap-sidebar">
                    <div class="font_stylist">
                        <div class="row">

                            <div class="search">
                                <div class="row ">
                                    <div class="rowfullstyle">
                                        <a href="#" data-toggle="collapse" data-target="#menu">
                                            <h3 class="fontstyle-size">
                                                <i class="glyphicon glyphicon-th-list"></i>
                                                {{__('All Style')}}

                                            </h3>

                                        </a>
                                    </div>

                                </div>
                                <hr>

                                <div class="collapse lisstyle-font" id="menu">
                                    <ul class="cate-list">
                                        <li class="fa style-font"><a href="#" data-toggle="collapse"
                                                                     data-target="#menu2"><i
                                                        class="glyphicon glyphicon-home"></i>
                                                {{__('all style')}} <i class=" glyphicon glyphicon-chevron-right"></i>

                                                <span
                                                        class="badge badge-info">4 </span>
                                            </a>
                                            <div class="row">
                                                <ul class="collapse lisstyle-font" id="menu2">
                                                    @foreach($new_style_1 as $new_style_1)
                                                        <li class="fa style-font">
                                                            <i class="glyphicon glyphicon-ok"></i>
                                                            <span class="container-color-3">{{$new_style_1->tittle}}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                            </div>
                                        </li>

                                        <li class="fa style-font"><i class="glyphicon glyphicon-home"></i>
                                            {{__('new style')}} <i class=" glyphicon glyphicon-chevron-right"></i>
                                            <span
                                                    class="badge badge-info">4 </span>
                                        </li>

                                        <li class="fa style-font"><i class="glyphicon glyphicon-star-empty"></i>
                                            {{__('style hot')}}
                                            <i class=" glyphicon glyphicon-chevron-right"></i>
                                            <span
                                                    class="badge badge-info">5</span>
                                        </li>
                                        <li class="fa style-font"><i class="glyphicon glyphicon-thumbs-up"></i>
                                            {{__('your style')}}
                                            <i class=" glyphicon glyphicon-chevron-right"></i>
                                            <span

                                                    class="badge badge-info">0</span>

                                        </li>
                                        <li class="fa style-font"><i class="glyphicon glyphicon-plus-sign"></i>
                                            {{__('create style')}}
                                            <i class=" glyphicon glyphicon-chevron-right"></i>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </aside>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <nav class="navbar navbar-inverse nar-cate">
                        <div class="container-fluid container-color">
                            <ul class="nav navbar-nav">
                                @foreach($new_topic as $newss)
                                    <li>
                                        <a class="container-color-2"
                                           href="{{ route('topic', [ 'topic_style' => $newss->id ]) }}">
                                            {!! $newss->topic_name !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
                {{--<div class="clearfix"></div>--}}
                <div class="row">
                    <h3></h3>
                </div>

                <div class="row">
                    @foreach($new_style as $new)
                        <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                            <div class="font_topic_style">
                                <div>
                                    <div class="nd-wrap nd-style-8" class="topic_style_form2">
                                        <img src="{{$new->image}}" class="img-responsive" alt=" "/>
                                        <div class="nd-content">
                                            <div class="nd-content_inner">
                                                <div class="nd-content_inner1">
                                                    <a href="#"><span class="nd-icon">
                                            <i class="">Info</i>
                                        </span> </a>
                                                    <a href="#"><span
                                                                class="nd-icon">
                                            <i class="">Costume</i>
                                        </span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 0 1rem 1rem;">
                                    <div>
                                        <h5>{{$new->tittle}}</h5>
                                    </div>
                                    <div class="font_check"><i><h6> chưa có đánh giá</h6></i>
                                    </div>
                                    <div class=" font_check_1">
                                        <i class="glyphicon glyphicon-heart" class="font_check_2"></i>
                                        <i class="glyphicon glyphicon-comment "
                                           style="color:red; margin-left: 120px;"></i>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection('content')
@section('script')
    {{ Html::script('/js/search.js', ['type' => 'text/javascript']) }}
@endsection('script')

