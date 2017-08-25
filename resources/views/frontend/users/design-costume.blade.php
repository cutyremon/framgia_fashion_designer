@extends('frontend.layouts.master')

@section('custom-css')
    {{ Html::style('/css/user/design.costume.css') }}
@endsection('custom-css')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 select-title">
                <h2>Ban muon thiet ke trang phuc cho chu de nao ?</h2>
                <br>
                <form acction="" method="post">
                    <div class="form-group">
                        <label>{{ __('topic') }}</label>
                        <select class="form-control" name="topic" id="select-topic">
                            <option value=""></option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}">{!! $topic->topic_name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>{{ __('STYLE') }}</label>
                        <select class="form-control" name="topic" id="select-style"></select>
                    </div>
                </form>
            </div>
        </div>
        <div id="designing">
            <div class="row">
                <div class="boundary">
                    <hr class="hr">
                    <h3>Hãy tạo cho mình một bộ trang phục đi nào!</h3>
                </div>
            </div>
            <div class="design-content">
                <div class="row">
                    <div class="box-hat">
                        <div class="nd-wrap nd-style-8">
                            <div class="product-item">
                                <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                <div class="nd-content">
                                    <div class="nd-content_inner">
                                        <div class="nd-content_inner1">
                                            <h6 class="nd-title">{{ __('hat') }}</h6>
                                            <span class="nd-icon">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box-clothes">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-jewelry">
                                <div class="nd-wrap nd-style-8">
                                    <div class="product-item">
                                        <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                        <div class="nd-content">
                                            <div class="nd-content_inner">
                                                <div class="nd-content_inner1">
                                                    <h6 class="nd-title">{{ __('jewelry') }}</h6>
                                                    <span class="nd-icon">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-shirt">
                                <div class="nd-wrap nd-style-8">
                                    <div class="product-item">
                                        <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                        <div class="nd-content">
                                            <div class="nd-content_inner">
                                                <div class="nd-content_inner1">
                                                    <h6 class="nd-title">{{ __('shirt') }}</h6>
                                                    <span class="nd-icon">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="box-accessories">
                                <div class="nd-wrap nd-style-8">
                                    <div class="product-item">
                                        <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                        <div class="nd-content">
                                            <div class="nd-content_inner">
                                                <div class="nd-content_inner1">
                                                    <h6 class="nd-title">{{ __('accessories') }}</h6>
                                                    <span class="nd-icon">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="box-shoes">
                            <div class="nd-wrap nd-style-8">
                                <div class="product-item">
                                    <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h6 class="nd-title">{{ __('shoes') }}</h6>
                                                <span class="nd-icon">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="box-pants">
                            <div class="nd-wrap nd-style-8">
                                <div class="product-item">
                                    <img src="{!! asset('images/avatar.png') !!}" class="design-img"/>
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h6 class="nd-title">{{ __('pants') }}</h6>
                                                <span class="nd-icon">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="information-costume">
                    <h3>Thông tin chi tiết</h3>
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#hat" data-toggle="tab">{{ __('hat') }}</a></li>
                            <li><a href="#jewelry" data-toggle="tab">{{ __('jewelry') }}</a></li>
                            <li><a href="#shirt" data-toggle="tab">{{ __('shirt') }}</a></li>
                            <li><a href="#shoes" data-toggle="tab">{{ __('shoes') }}</a></li>
                            <li><a href="#pants" data-toggle="tab">{{ __('pants') }}</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="hat">

                            </div>
                            <div class="tab-pane fade" id="jewelry">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="button" class="btn btn-success">{{ __('save') }}</button>
            </div>
        </div>
    </div>
@endsection('content')

@section('script')
    {{ Html::script('/js/design.costume.js', ['type' => 'text/javascript']) }}
@endsection('script')
