@extends('layouts.layout')

@section('content')
    <div class="slider">
        <div class="container">
            <img src="/images/Rectangle.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="main__wrapper">
            <div class="title">Сегодня особенно выгодно</div>
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
