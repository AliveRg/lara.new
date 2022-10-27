@extends('layouts.layout')

@section('content')
    <div class="slider">
        <div class="container">
            <img src="/images/Rectangle.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="main__wrapper">

            @foreach($products as $product)

                <div class="_product" data-id="{{ $product->id }}">

                    <div>
                        Название: {{ $product->name }}
                    </div>

                    <div>
                        Цена: {{ $product->price }}
                    </div>

                    <div>
                        Товар в избранном? {{ $favorite->has($product->id) ? 'Да' : 'Нет' }}
                    </div>

                    <div>
                        Товар в избранном?

                        @if ($favorite->has($product->id))
                            Да
                        @else
                            Нет
                        @endif

                    </div>

                    <button>Добавить в избранное</button>

                    <div>
                        Товар в корзине? {{ $cart->has($product->id) ? 'Да' : 'Нет' }}
                    </div>

                    <div>
                        Товар в корзине?

                        @if ($cart->has($product->id))
                            Да
                        @else
                            Нет
                        @endif

                    </div>

                </div>

                <br><br><br><br><br>

            @endforeach

            <div class="title">Сегодня особенно выгодно 123</div>
            <div class="sub__title">Кирпич
                <hr class="hr-line"> <span>Блок </span>
            </div>
            <div class="card__list-wrapper">
                <div class="card__list">
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                    @include('cards__goods')
                </div>
            </div>
        </div>
    </div>
@endsection
