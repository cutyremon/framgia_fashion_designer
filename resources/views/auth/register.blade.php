@extends('frontend.layouts.master')
@section('content')
    <div class="body_v1">
        <div class="container">
            <header>
                <h1></h1>
            </header>

            <div id="wrapper">
                <div id="login" class="form_v1">
                    <h1> Register</h1>
                    {{--<form action="mysuperscript.php" autocomplete="on">--}}
                    {{--<div class="panel-heading">Register</div>--}}
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                <p>
                                    <label for="usernamesignup" class="uname">Your username</label>
                                    <input id="full_name" name="full_name" required="required"
                                           type="text"
                                           placeholder="nguyenngocdong2021996"/>
                                </p>
                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <p>
                                    <label for="email" class="youmail"> Your email</label>
                                    <input id="email" name="email" required="required" type="email"
                                           placeholder="cutyremon@mail.com"/>
                                </p>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <p>
                                    <label for="passwordsignup" class="youpasswd">Your password </label>
                                    <input id="password" name="password" required="required"
                                           type="password"
                                           placeholder="eg. X8df!90EO"/>
                                </p>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group>{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <p>
                                    <label for="password_confirmation" class="youpasswd">Please confirm your
                                        password </label>
                                    <input id="password_confirmation" name="password_confirmation"
                                           required="required"
                                           type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        {{--@if ($errors->has('passwordsigup_confirm'))--}}
                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                    </div>

                    <div class="form-group">
                        <p class="login button">
                            <input href="{{route('login')}}" type="submit" value="Register"/>

                            {{--<a href="http://cookingfoodsworld.blogspot.in/" target="_blank"></a>--}}
                        </p>
                    </div>

                    </form>
                </div>
                {{--</form>--}}

            </div>
        </div>

    </div>
    </div>
@endsection
@section('custom-css')
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
@endsection('custom-css')