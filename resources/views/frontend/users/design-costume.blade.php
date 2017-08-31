@extends('frontend.layouts.master')

@section('custom-css')
    {{ Html::style('/css/user/design.costume.css') }}
    {{ Html::style('/css/search/costume.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
@endsection('custom-css')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 select-title">
                <h2>{{ __('what is topic do you designing costume ?') }}</h2>
                <br>
                <form acction="" method="post">
                    <div class="form-group">
                        <label>{{ __('topic') }}</label>
                        <select class="form-control" name="topic" id="select-topic">
                            <option class="active" value="0" id="select-holder">{{ __('choose topic') }}</option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}">{!! $topic->topic_name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <input type="hidden" id="select-style-id" name="select-style-id" value="">
                    <div class="form-group">
                        <label>{{ __('style') }}</label>
                        <select class="form-control" name="topic" id="select-style"></select>
                    </div>
                </form>
            </div>
        </div>
        <div id="designing">
            <div class="row">
                <div class="boundary">
                    <hr class="hr">
                    <h3>{{ __('make yourself a costume!') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="design-content" id="search-category">
                        <div class="row">
                            <div class="box-hat">
                                <div class="nd-wrap nd-style-8">
                                    <div class="product-item" data-category="5">
                                        <img src="{!! asset('images/hat.png') !!}" class="img_1"/>
                                        <div class="nd-content" data-toggle="modal" data-target="#select">
                                            <div class="nd-content_inner">
                                                <div class="nd-content_inner1">
                                                    <h6 class="nd-title">{{ __('hat') }}</h6>
                                                    <span class="nd-icon" id="select-hat" data-category="1">
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
                                            <div class="product-item" data-category="4">
                                                <img src="{!! asset('images/jewelry.png') !!}" class="img_5"/>
                                                <div class="nd-content" data-toggle="modal" data-target="#select">
                                                    <div class="nd-content_inner">
                                                        <div class="nd-content_inner1">
                                                            <h6 class="nd-title">{{ __('jewelry') }}</h6>
                                                            <span class="nd-icon" id="select-jewelry" data-category="5">
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
                                            <div class="product-item" data-category="2">
                                                <img src="{!! asset('images/shirts_1.png') !!}" class="img_3"/>
                                                <div class="nd-content" data-toggle="modal" data-target="#select">
                                                    <div class="nd-content_inner">
                                                        <div class="nd-content_inner1">
                                                            <h6 class="nd-title">{{ __('shirt') }}</h6>
                                                            <span class="nd-icon" id="select-shirt" data-category="3">
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
                                            <div class="product-item" data-category="5">
                                                <img src="{!! asset('images/accessories.png') !!}" class="img_6"/>
                                                <div class="nd-content" data-toggle="modal" data-target="#select">
                                                    <div class="nd-content_inner">
                                                        <div class="nd-content_inner1">
                                                            <h6 class="nd-title">{{ __('accessories') }}</h6>
                                                            <span class="nd-icon" id="select-accessories" data-category="6">
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
                                        <div class="product-item" data-category="3">
                                            <img src="{!! asset('images/shoes.png') !!}" class="img_4"/>
                                            <div class="nd-content" data-toggle="modal" data-target="#select">
                                                <div class="nd-content_inner">
                                                    <div class="nd-content_inner1">
                                                        <h6 class="nd-title">{{ __('shoes') }}</h6>
                                                        <span class="nd-icon" id="select-shoes" data-category="4">
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
                                        <div class="product-item" data-category="1">
                                            <img src="{!! asset('images/pants.png') !!}" class="img_2"/>
                                            <div class="nd-content" data-toggle="modal" data-target="#select">
                                                <div class="nd-content_inner">
                                                    <div class="nd-content_inner1">
                                                        <h6 class="nd-title">{{ __('pants') }}</h6>
                                                        <span class="nd-icon" id="select-pants" data-category="2">
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
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="row">
                        <div class="information-costume">
                            <h3>{{ __('details') }}</h3>
                            <div class="well">
                                <ul class="nav nav-tabs" id="tag">
                                    <li class="active tag_1"><a href="#hat" data-toggle="tab">{{ __('hat') }}</a></li>
                                    <li class="tag_5"><a href="#jewelry" data-toggle="tab">{{ __('jewelry') }}</a></li>
                                    <li class="tag_3"><a href="#shirt" data-toggle="tab">{{ __('shirt') }}</a></li>
                                    <li class="tag_4"><a href="#shoes" data-toggle="tab">{{ __('shoes') }}</a></li>
                                    <li class="tag_2"><a href="#pants" data-toggle="tab">{{ __('pants') }}</a></li>
                                    <li class="tag_6"><a href="#pants" data-toggle="tab">{{ __('accessories') }}</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane active in information_6" id="accessories"></div>
                                    <div class="tab-pane fade information_5" id="jewelry"></div>
                                    <div class="tab-pane fade information_3" id="shirt"></div>
                                    <div class="tab-pane fade information_4" id="shoes"></div>
                                    <div class="tab-pane fade information_2" id="pants"></div>
                                    <div class="tab-pane fade information_1" id="hat"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="form-cus">
                            <div class="form-inline row-1">
                                <label for="name">{{ __('name the costume') }}:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-inline row-2">
                                <label for="description">{{ __('description') }}:</label>
                                <textarea class="form-control" id="description" rows="5"></textarea>
                            </div>
                            <button type="button" class="btn btn-success" id="allSave">{{ __('save') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- dialog -->
        <div id="select" class="modal fade" role="dialog">
            <div class="modal-dialog form-edit">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ __('choose the costume') }}</h4>
                    </div>
                    <div class="modal-body" id="result"></div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" id="save">{{ __('save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('script')
    {{ Html::script('/js/design.costume.js', ['type' => 'text/javascript']) }}
@endsection('script')
