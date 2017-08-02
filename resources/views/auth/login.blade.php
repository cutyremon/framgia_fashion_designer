@extends('frontend.layouts.master')

@section('content')
    <div class="body_v1">
        <div class="container">
            <header>
                <h1></h1>
            </header>
            <div id="container_demo">
                <div id="wrapper">
                    <div id="login" class="animate form">
                        {{--<form action="mysuperscript.php" autocomplete="on">--}}
                        {{--<div class="panel-heading">Login</div>--}}
                        <h1>Log in</h1>
                        <div class="panel-body">
                            {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                            <form class="form-horizontal" method="post" action="{{route('login')}}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}
                                    <label for="email" class="username"> Your email </label>

                                    {{--<div class="col-md-6">--}}
                                    <input id="email" type="text" riquered="riquered" name="email"
                                           placeholder="{{Config::get('app.email_defaultt')}}"/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}
                                    <label for="password" class="youpassword"> Your password </label>

                                    {{--<div class="col-md-6">--}}
                                    <input id="password" type="password" name="password"
                                           required="required" placeholder="{{Config::get('app.password_defaultt')}}">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                Remember
                                                Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <p class="login button">
                                    <input href="{{route('home')}}" type="submit" value="Sign in"/>
                                    {{--<a href="http://cookingfoodsworld.blogspot.in/" target="_blank"></a>--}}
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="{{route('register')}}" class="to_register">Register</a>
                                </p>

                                <div class="col-md-8 col-md-offset-1">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                                {{--<div class="form-group">--}}
                                {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--Forgot Your Password?--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </form>
                        </div>

                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-css')
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
@endsection('custom-css')

