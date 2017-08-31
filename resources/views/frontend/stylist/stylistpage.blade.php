@extends('frontend.layouts.master')

@section('custom-css')
    {{ Html::style('/css/profile/style_profile.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
    {{ Html::style('/css/profile/custom-style_profile.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}
@endsection('custom-css')

@section('content')
    <!-- Profile -->
    <div class="container">
        <div class="row">
            <div class="profile-head">
                <div class="col-md-4 col-sm-4 col-xs-12 img-icon">
                    <img src="{!! url(Auth::User()->avatar) !!}" class="img-responsive"/>
                    <a href="javascript:void(0)" class="edit-icon" data-toggle="modal"
                       data-target="#modalAvatar">
                        <i class="fa fa-pencil"></i>{{ __('edit') }}
                    </a>
                </div><!--col-md-4 col-sm-4 col-xs-12 close-->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h5>{!! Auth::User()->full_name !!}</h5>
                    <ul>
                        <li><span class="glyphicon glyphicon-user"></span>
                            {{ __('gender') }}: {!! Auth::User()->gender !!}
                        </li>
                        <li><span class="glyphicon glyphicon-calendar"></span>
                            {{ __('birthday') }}: {!! Auth::User()->birthday !!}
                        </li>
                        <li><span class="glyphicon glyphicon-map-marker"></span>
                            {{ __('address') }}: {!! Auth::User()->address !!}
                        </li>
                        <li><span class="glyphicon glyphicon-phone"></span>
                            {{ __('phone') }}: {!! Auth::User()->phone !!}</a>
                        </li>
                        <li><span class="glyphicon glyphicon-envelope"></span>
                            {{ __('email') }}: {!! Auth::User()->email !!}</a>
                        </li>
                        <li><span class="glyphicon glyphicon-comment"></span>
                            {{ __('description') }}: {!! Auth::User()->description !!}</li>
                        <li>
                            <a href="javascript:void(0)" class="span-edit-profile text-warning" data-toggle="modal"
                               data-target="#per-info">( {{ __('change profile') }}<i class="fa fa-pencil"></i> )
                            </a>
                            <a href="javascript:void(0)" class="span-edit-profile text-warning" data-toggle="modal"
                               data-target="#modalPassword">( {{ __('change password') }}<i class="fa fa-pencil"></i> )
                            </a>
                        </li>
                    </ul>
                </div><!--col-md-8 col-sm-8 col-xs-12 close-->
            </div>
        </div><!--//profile-head close-->
        <div class="row">
            <div class="profile-content">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="block-title">
                            <h2>{{ __('topic has joined') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="block-title">
                            <h2>{{ __('the costumes are designed') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--container header close-->
    <!-- //Profile -->
@endsection('content')

