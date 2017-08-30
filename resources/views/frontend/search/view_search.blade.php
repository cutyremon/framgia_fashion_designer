{{ Html::style('/css/search/search_style.css', ['rel' => 'stylesheet', 'type' => 'text/css']) }}

<div class="result">
    <h3><b>{{__('search results')}}: {!! $keyword !!}</b></h3>
</div>
<div>
    @if($listProduce->count() > 0)
        @foreach($listProduce as $produce)
            <div class="col-md-3 col-sm-5">
                <div class="nd-wrap nd-style-8">
                    <div class="product-item">
                        <img src="{!! url($produce->image) !!}" class="img-responsive"/>
                        <div class="nd-content">
                            <div class="nd-content_inner">
                                <div class="nd-content_inner1">
                                    <h6 class="nd-title">{!! $produce->gender !!}</h6>
                                    <h6 class="nd-title">{{__('color')}}: {!! $produce->color !!}</h6>
                                    <span class="nd-icon">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-heart-empty"></i>
                                        </a>
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
<div class="col-lg-12" id="page-paginate">{{ $listProduce->links('frontend.components.paginate-review') }}</div>
@else
    <div class="result-null">
        <h3>{{__('no product information')}}</h3>
    </div>
@endif

