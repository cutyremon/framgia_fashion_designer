<div>
    @if($listProduce->count() > 0)
        @foreach($listProduce as $produce)
            <div class="col-md-3 col-sm-5">
                <div class="nd-wrap nd-style-8 fix-produce">
                    <div class="product-item" >
                        <img src="{!! url($produce->image) !!}" class="img-responsive" id="imgProduce"/>
                        <div class="nd-content check" data-id="{{ $produce->id }}">
                            <div class="nd-content_inner">
                                <div class="nd-content_inner1">
                                    <h6 class="nd-title">{{__('gender')}}:
                                         {{ __($produce->gender) }}
                                    </h6>
                                    <h6 class="nd-title">{{__('color')}}: {{ __($produce->color) }}</h6>
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
    @else
        <div class="result-null">
            <h3>{{__('no product information')}}</h3>
        </div>
    @endif
</div>
<div class="col-lg-12" id="page-paginate">{{ $listProduce->links('frontend.components.paginate-review') }}</div>
