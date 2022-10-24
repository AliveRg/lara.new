@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="filters__info">
            <div class="beadcrumbs">
                <span class="brerdcumbs__focus"><a href="/"> Главная</a></span> <span>></span> <span>Кирпич керамический
                    пустотелый
                    облицовочный полуторный соломенный бархат Железногорский</span>
            </div>
            <div class="filters__title katalog-one__info">
                <p>Кирпич керамический пустотелый облицовочный полуторный соломенный бархат Железногорский</p>
            </div>
        </div>
        <div class="content__buy">
            <div class="content__buy-img"><img src="/images/scale-goods.png" alt=""></div>
            <div class="content__buy-info">
                <div class="content__buy-info-inner">
                    <div class="buy-info-counting">
                        <div class="buy-info-counting-inner">
                            <div class="old__price">16 $</div>
                            <div class="buy-info-counting-inner__inner">
                                <div class="new__price">12 $</div>
                                <div class="multiply"><span>x</span></div>
                                <div class="buy__many"><span>12000</span></div>
                                <div class="choise__more-buy"><span>шт</span><span><img src="/images/arrow.svg"
                                            alt=""></span></div>
                                <div class="buy-info-price"><span>12000 $</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="buy-info__backet">
                        <div class="backet__info">
                            <div class="choise-buy"><span>12 $</span>
                                <p>/шт</p>
                            </div>
                            <div class="price-buy"><span>1200 $ </span>
                                <p>/поддон</p>
                            </div>
                        </div>
                        <div class="shopping__cart"><span>Добавить в корзину</span>
                            <span>
                                <img src="/images/shopping__cart.svg"alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="configuration__goods">
            <div class="specifications">
                <p>Характеристики</p>
                <div class="specific_card">
                    <div class="spec wiew">
                        <span class="type__specification">Вид</span> <span id="spec-1">Облицовочный</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec type">
                        <span class="type__specification">Тип</span> <span id="spec-2">Красный</span>
                    </div>
                    <hr class="hr-line-filters">
                    <div class="spec view__form">
                        <span class="type__specification">Вид формовки</span> <span id="spec-3">Пластичное
                            формование</span>
                    </div>
                    <hr class="hr-line-filters">
                    <div class="spec color">
                        <span class="type__specification">Цвет</span> <span id="spec-4">Цвет</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Оттенок</span> <span id="spec-5">Однотонный</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Поверхность</span> <span id="spec-6">Гладкая</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Формат</span> <span id="spec-7">0,7 NF</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Размер</span> <span id="spec-8">250х85х65 мм</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Прочность на сжатие</span> <span id="spec-9">150-175
                            кгс/см²</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Морозостойкость</span> <span id="spec-10">F 100</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Водопоглощение</span> <span id="spec-11">8%</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Вес кирпича</span> <span id="spec-12">1,9 кг</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Количество в м²</span> <span id="spec-13">50 шт.</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Количество на поддоне</span> <span id="spec-14">600 шт.</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Производитель</span> <span id="spec-15">BRAER</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                    <div class="spec">
                        <span class="type__specification">Страна</span> <span id="spec-16">Россия</span>
                    </div>
                    <hr class="hr-line-filters hr-line-one__goods">
                </div>
            </div>
            <div class="recomendation">
                <div class="rec__info">
                    <div class="card__slide-upper">
                        <span>Мы рекомендуем</span>
                        <div class="card__slide-button">
                            <div class="rec__prefer"><img src="/images/arrow-left.png" alt=""></div>
                            <div class="rec__next"><img src="/images/arrow-right.png" alt=""></div>
                        </div>
                    </div>
                    <div class="card__slide-base">
                        @include('cards__goods')
                        @include('cards__goods')
                        @include('cards__goods')
                        @include('cards__goods')
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <p>Описание товара</p>
            <div class="description__inner">
                <p>
                    Как в жизни есть вечные ценности, так и в архитектуре, несмотря на приходящие тенденции, выигрышность
                    кирпичного оформления стен не поддается сомнению. Облицовочный кирпич — это неувядающая классика,
                    остающаяся вне времени. <br>
                    Лицевой кирпич BRAER дает возможность подчеркнуть красоту и разнообразие форм, оттенить декоративные
                    элементы и добавить даже небольшой постройке основательности и весомости. Широкий модельный (форматы
                    1NF, 1,4NF, 0,7 NF) и цветовой ряд позволяют подобрать идеально подходящий для реализации дизайнерской
                    задумки кирпич. <br>
                    Благодаря объединению богатых природных ресурсов, инновационных разработок, технических достижений и
                    управленческих усилий керамический кирпич BRAER воплощает собой качество и надежность. А налаженная
                    система сбыта и удобное географическое положение завода BRAER помогает поддерживать привлекательную цену
                    облицовочного кирпича.
                </p>
            </div>
        </div>
    </div>
@endsection
