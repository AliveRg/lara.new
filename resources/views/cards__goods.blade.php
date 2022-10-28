<div class="card__wrapper">
    <div class="_product" data-id="{{ $product->id }}">
        <div class="card">
            <div class="card__favorite {{ $favorite->has($product->id) ? '_active' : '' }}"><img src="/images/card_favorites.svg" alt=""></div>
            <div class="card__content">
                <div class="card__goods-img"> <a href="/one-goods"><img src="/images/card_img.png" alt=""></a> </div>
                <div class="card__goods-info">Акция! <span>Новинки</span></div>
                <div class="card__goods-name"><a href="/one-goods">{{ $product->name }}</a></div>
                <hr class="card__line">
                <div class="card__goods-prise">
                    <span>{{ $product->price }}</span>
                    <hr class="hr-line">
                    <span>шт.</span><img src="/images/card_basket.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
