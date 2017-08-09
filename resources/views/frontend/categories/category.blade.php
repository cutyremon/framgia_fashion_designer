@extends('frontend.layouts.master')

@section('content')
    <div class="container font-cate">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <nav class="navbar navbar-inverse nar-cate">
                        <div class="container-fluid">
                            @foreach($categories as $category)
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ route('category', [
                                                'produce' => $category->id
                                        ]) }}">{!! $category->category_name !!}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="title-category">
                        <h2>áo thun có cổ</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    @foreach($produces as $produce)
                        <div class="col-md-3 col-sm-5">
                            <div class="nd-wrap nd-style-8">
                                <div class="product-item">
                                    <img src="{!! $produce->image !!}" class="img-responsive"/>
                                    <div class="nd-content">
                                        <div class="nd-content_inner">
                                            <div class="nd-content_inner1">
                                                <h4 class="nd-title">{!! $produce->produce_name !!}</h4>
                                                <span class="nd-icon">
                                            <i class="glyphicon glyphicon-heart-empty"></i>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-item">
                                <h3>{!! $produce->produce_name !!}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="disabled">
                                <span>
                                    <span aria-hidden="true">&laquo;</span>
                                </span>
                            </li>
                            <li class="active">
                                <span>1 <span class="sr-only">(current)</span></span>
                            </li>
                            ...
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 wrap-sidebar">
                <div class="row">
                    <div class="search">
                        <h3><span>Tìm kiếm sảm phẩm</span></h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
                <div class="row">
                    <div class="sidebar-cate">
                        <h3><span>tìm theo giới tính</span></h3>
                        <ul class="cate-list">
                            <li class="active"><a href="#"><i class="fa fa-hand-o-right">  Nam</i></a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"> Nữ</i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <h3><span>tìm theo màu</span></h3>
                        <ul class="color-list">
                            <li><span class="color-white"></span>
                                <a href="#">Màu Trắng</a>
                            </li>
                            <li><span class="color-black"></span>
                                <a href="#">Màu Đen</a>
                            </li>
                            <li><span class="color-blue"></span>
                                <a href="#">Màu Xanh</a>
                            </li>
                            <li><span class="color-yellow"></span>
                                <a href="#">Màu Vàng</a>
                            </li>
                            <li><span class="color-red"></span>
                                <a href="#">Màu Đỏ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="rate-list">
                        <h3>sảm phâm hot</h3>
                        <div class="col-xs-12 rate-none">
                            <div class="col-xs-4">
                                <a href="#"><img src="images/about2.jpg"></a>
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

@section('custom-css')
    <link rel="stylesheet" type="text/css" media="all" href="/css/custom-style.css">
    <link rel="stylesheet" type="text/css" media="all" href="/css/category/category_style.css">
@endsection('custom-css')
