@extends('layouts.layout')

@section('content')
    <div class="slider">
        <div class="container">
            <img src="/images/Rectangle.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="main__wrapper">



            <div class="title">Сегодня особенно выгодно 123</div>
            <div class="sub__title">Кирпич
                <hr class="hr-line"> <span>Блок </span>
            </div>
            <div class="card__list-wrapper">
                <div class="card__list">
                    @foreach($products as $product)
                        <div class="_product" data-id="{{ $product->id }}">
                            @include('cards__goods')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
