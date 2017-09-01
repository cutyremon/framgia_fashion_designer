@extends('frontend.layouts.master')
@section('custom-css')
    {{ Html::style('/css/category/category_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/topic_style/topic_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
@endsection

@section('content')
    <div class="container">
    </div>
    <div class="container font-cate">
        <div class="row rowfull">
            <div class="col-md-2 col-sm-4 wrap-sidebar">
                <div class="font_stylist">
                    <div class="row">
                        <div class="search">
                            <div class="rowfullstyle">
                                <a href="#" data-toggle="collapse" data-target="#menu">
                                    <h3 class="fontstyle-size">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        {{ __('All Style') }}
                                    </h3>

                                </a>
                            </div>
                            <hr>

                            <div class="collapse lisstyle-font" id="menu">
                                <ul class="cate-list">
                                    <li class="fa style-font">
                                        <a href="#" data-toggle="collapse" data-target="#menu2">
                                            <i class="glyphicon glyphicon-home"></i>
                                            {{ __('all style') }} <i class=" glyphicon glyphicon-chevron-right"></i>
                                            <span class="badge badge-info">4 </span>
                                        </a>
                                        <div class="row">
                                            <ul class="collapse lisstyle-font" id="menu2">
                                                @foreach($listStyle as $style)
                                                    <li class="fa style-font">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        <span class="container-color-3">{!! $style->tittle !!}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="fa style-font"><i class="glyphicon glyphicon-home"></i>
                                        {{ __('new style') }} <i class=" glyphicon glyphicon-chevron-right"></i>
                                        <span class="badge badge-info">4 </span>
                                    </li>
                                    <li class="fa style-font"><i class="glyphicon glyphicon-star-empty"></i>
                                        {{ __('style hot') }}
                                        <i class=" glyphicon glyphicon-chevron-right"></i>
                                        <span class="badge badge-info">5</span>
                                    </li>
                                    <li class="fa style-font"><i class="glyphicon glyphicon-thumbs-up"></i>
                                        {{ __('your style') }}
                                        <i class=" glyphicon glyphicon-chevron-right"></i>
                                        <span class="badge badge-info">0</span>
                                    </li>
                                    <li class="fa style-font"><i class="glyphicon glyphicon-plus-sign"></i>
                                        {{ __('create style') }}
                                        <i class=" glyphicon glyphicon-chevron-right"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <nav class="navbar navbar-inverse nar-cate">
                        <div class="container-fluid container-color">
                            <ul class="nav navbar-nav">
                                @foreach($listTopic as $style)
                                    <li>
                                        <a class="{{$current_topic == $style->id ? 'active' : '' }}"
                                            href="{{ route('stylePage', [ 'topicStyle' => $style->id ]) }}">
                                            {!! $style->topic_name !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <h3></h3>
                </div>

                <div class="row">
                    <form method="post" action="">
                        @foreach($listStyle as $style)
                            <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                                {{--<a data-toggle="modal"--}}
                                {{--data-target="#info_style">--}}
                                <a href="#" id="ajax_modal_{!! $style->id !!}"
                                   data-toggle="modal" data-target="#info_style" data-id="{!! $style->id !!}">
                                    <div class="font_topic_style">
                                        <div>
                                            <div class="nd-wrap nd-style-8 topic_style_form2">
                                                <img src="{!! url($style->image) !!}" class="img-responsive" alt=" "/>
                                                <div class="nd-content">
                                                    <div class="nd-content_inner">
                                                        <div class="nd-content_inner1">
                                                            <span class="nd-icon"><i class="">Info</i></span>
                                                            <span class="nd-icon"><i class="">Costume</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="topic_style_form2">
                                            <div>
                                                <h5 class="color-title">{!! $style->tittle !!}</h5>
                                            </div>
                                            <div class="font_check"><i><h6> chưa có đánh giá</h6></i>
                                            </div>
                                            <div class=" font_check_1">
                                                <i class="glyphicon glyphicon-heart font_check_2"></i>
                                                <i class="glyphicon glyphicon-comment topic-style-form4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="info_style" role="dialog" class="topic-style-form5">
        <div class="modal-dialog">
            <div class="cmt-modal-lg" role="document">
                <div class="modal-content modal-image">
                    <div id="commentBox">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    {{ Html::script('//code.jquery.com/jquery-1.11.2.min.js', ['type' => 'text/javascript']) }}
    {{ Html::script('//code.jquery.com/jquery-migrate-1.2.1.min.js', ['type' => 'text/javascript']) }}

    {{ Html::script('/js/admin.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/js/search.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/js/comment.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/bower_components/ResponsiveSlides/responsiveslides.min.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/bower_components/owl.carousel/dist/owl.carousel.js', ['type' => 'text/javascript']) }}
    {{ Html::script('/bower_components/bootstrap/dist/js/bootstrap.min.js', ['type' => 'text/javascript']) }}
@endsection
