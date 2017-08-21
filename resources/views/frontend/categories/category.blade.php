@extends('frontend.layouts.master')

@section('custom-css')
    {{ Html::style('/css/category/category_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
@endsection('custom-css')

@section('content')
    <div class="container font-cate">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <input type="hidden" id="search-category" name="search-category" value="{!! $current_category !!}">
                <div class="row">
                    <nav class="navbar navbar-inverse nar-cate">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a class="{{ $current_category == 0 ? 'active' : '' }}"
                                       href="{{ route('category', [ 'id' => '0' ]) }}">
                                        {{__('all')}}
                                    </a>
                                </li>
                                @foreach($categories as $category)
                                    <li>
                                        <a class="{{ $current_category == $category->id ? 'active' : '' }}"
                                           href="{{ route('category', [ 'id' => $category->id ]) }}">
                                            {!! $category->category_name !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>

                <div class="row" id="search-result"></div>
            </div>

            <div class="col-md-3 col-sm-4 wrap-sidebar">
                <div class="row">
                    <div class="search">
                        <h3><span>{{__('search by product')}}</span></h3>
                        <div class="input-group">
                            <input id="search-keyword" type="text" class="form-control"
                                   placeholder="{{__('keyword search')}}"
                                   name="search-keyword">
                            <span class="input-group-btn">
                            <button id="search-button" class="btn btn-default" type="button">Go!</button>
                        </span>
                        </div><!-- /input-group -->
                    </div>
                </div>

                <div class="row">
                    <div class="sidebar-cate">
                        <h3><span>{{__('search by gender')}}</span></h3>
                        <ul class="cate-list">
                            <li id="search-gender-1" data-gender="1">
                                <i class="fa fa-hand-o-right"> {{__('male')}}</i>
                            </li>
                            <li id="search-gender-2" data-gender="0">
                                <i class="fa fa-hand-o-right"> {{__('female')}}</i>
                            </li>
                        </ul>
                        <input type="hidden" id="search-gender" name="search-gender">
                        <div class="clearfix"></div>
                        <h3><span>{{__('search by color')}}</span></h3>
                        <ul class="color-list">
                            <li id="search-color-1" data-color="white">
                                <span class="color-white"></span>{{__('white')}}
                            </li>
                            <li id="search-color-2" data-color="black">
                                <span class="color-black"></span>{{__('black')}}
                            </li>
                            <li id="search-color-3" data-color="blue">
                                <span class="color-blue"></span>{{__('blue')}}
                            </li>
                            <li id="search-color-4" data-color="yellow">
                                <span class="color-yellow"></span>{{__('yellow')}}
                            </li>
                            <li id="search-color-5" data-color="red">
                                <span class="color-red"></span>{{__('red')}}
                            </li>
                        </ul>
                        <input type="hidden" id="search-color" name="search-color">
                    </div>
                </div>

                <div class="row">
                    <div class="rate-list">
                        <h3>{{__('hot product')}}</h3>
                        <div class="col-xs-12 rate-none">
                            <div class="col-xs-4">
                                <a href="#"><img></a>
                            </div>
                            <div class="col-xs-8">
                                <a href="#">áo thun có cổ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('script')
    {{ Html::script('/js/search.js', ['type' => 'text/javascript']) }}
@endsection('script')

