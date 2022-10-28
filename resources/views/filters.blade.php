@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="filters__info">
            <div class="beadcrumbs">
                <span class="brerdcumbs__focus"><a href="/">Главная</a></span> <span>></span> <span> Католог
                    продукции</span>
            </div>
            <div class="filters__title">
                <p>Каталог продукции</p>
            </div>
            <div class="filters__info-row">
                <div class="filters__search">
                    <p>Найдено <b>417</b> товаров</p>
                </div>
                <div class="sorting_wrap">
                    <div class="sorting__title">
                        Сортировать:
                    </div>

                    <div class="select">
                        <div class="select__header">
                            <span class="select__current">по возрастанию цены</span>
                            <div class="select__icon">&times;</div>
                        </div>

                        <div class="select__body">
                            <div class="select__item">по возрастанию цены</div>
                            <div class="select__item">по убыванию цены</div>
                        </div>
                    </div>
                    <div class="filters__type">
                        <div class="filters__type-menu"><a href="">Хит продаж</a></div>
                        <div class="filters__type-menu"><a href="">Новинки</a></div>
                        <div class="filters__type-menu"><a href="">На складе</a></div>
                        <div class="filters__type-menu"><a href="">Акции</a></div>
                        <div class="filters__type-menu"><a href="">Самовывоз</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters">
            @include('filters__form')
            <div class="card__show">
                <div class="filrets__goods">
                    @foreach($products as $product)
                        @include('cards__goods')
                    @endforeach
                </div>

                <div class="cards__hub">
                    <div class="more__goods"><a href="">Показать еще товары</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
