<!-- header -->
<div class="header">
    <nav class="navbar navbar-default">
        <div class="navbar-header fix-nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a href="{{ route('home') }}"><span>F</span>ramgia <span>F</span>ashion </a></h1>
        </div>
        <!-- navbar-header -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navbar-right-custom">
                <li><a href="{{ route('home') }}" class="hvr-underline-from-center active">{{__('home')}}</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle hvr-underline-from-center scroll" data-toggle="dropdown"
                       href="{{ route('category', [ 'pro' => '0' ]) }}">{{__('categories')}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a href="{{ route('category', [ 'pro' => $category->id ]) }}">
                                    {!! $category->category_name !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#designers" class="hvr-underline-from-center scroll">{{__('stylist')}}</a></li>
                <li><a href="#gallery" class="hvr-underline-from-center scroll">{{__('topic')}}</a></li>
                <li><a href="#contact" class="hvr-underline-from-center scroll">{{__('contact us')}}</a></li>
                @if (Auth::guest())
                    <button class="btn btn-success navbar-btn fix-btn">
                        <a href="{{ route('login') }}">{{__('sign in')}}</a>
                    </button>
                    <button class="btn btn-success navbar-btn fix-btn">
                        <a href="{{ route('register') }}">{{__('sign up')}}</a>
                    </button>
                @else
                    <li class="account">
                        @if(Auth::User()->role == 0)
                            <a href="{{ route('profile') }}" class="acc-user">
                                @if (Auth::User()->avatar)
                                    <img src="{!! asset(Auth::User()->avatar) !!}" class="user-image">
                                @else
                                    <img src="{!! asset('images/avatar.png') !!}" class="user-image">
                                @endif
                                <span class="hidden-xs">{!! Auth::User()->full_name !!}</span>
                                <div id="header-account" class="skip-content skip-active">
                                    <div class="links">
                                        <ul>
                                            <li>
                                                <a href="{{ route('profile') }}" class="top-link-blog">
                                                    {{ __('my profile') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}">{{ __('logout') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('admin') }}" class="acc-user">
                                @if (Auth::User()->avatar)
                                    <img src="{!! asset(Auth::User()->avatar) !!}" class="user-image">
                                @else
                                    <img src="{!! asset('images/avatar.png') !!}" class="user-image">
                                @endif
                                <span class="hidden-xs">{!! Auth::User()->full_name !!}</span>
                                <div id="header-account" class="skip-content skip-active">
                                    <div class="links">
                                        <ul>
                                            <li>
                                                <a href="{{ route('admin') }}" class="top-link-blog">
                                                    {{ __('management page') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}">{{ __('logout') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
</div>
<!-- //header -->



