@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js', 'resources/js/portofolio.js', 'resources/css/portofolio.scss'])
@endsection

@section('title', 'Home Page')


@section('content')
<div class="card__collection clear-fix">
    <div class="cards cards--two">
        <img src="img/team/inti/wakil.png">
        <span class="cards--two__rect"></span>
        <span class="cards--two__tri"></span>
        <p>Lucy Grace</p>
        <ul class="cards__list">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
        </ul>
    </div>
    <div class="cards cards--two">
        <img src="img/team/inti/wakil.png">
        <span class="cards--two__rect"></span>
        <span class="cards--two__tri"></span>
        <p>Lucy Grace</p>
        <ul class="cards__list">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
        </ul>
    </div>
    <div class="cards cards--two">
        <img src="img/team/inti/wakil.png">
        <span class="cards--two__rect"></span>
        <span class="cards--two__tri"></span>
        <p>Lucy Grace</p>
        <ul class="cards__list">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
        </ul>
    </div>
    <div class="cards cards--two">
        <img src="img/team/inti/wakil.png">
        <span class="cards--two__rect"></span>
        <span class="cards--two__tri"></span>
        <p>Lucy Grace</p>
        <ul class="cards__list">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
        </ul>
    </div>
    <div class="cards cards--two">
        <img src="img/team/inti/wakil.png">
        <span class="cards--two__rect"></span>
        <span class="cards--two__tri"></span>
        <p>Lucy Grace</p>
        <ul class="cards__list">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
        </ul>
    </div>
</div>
@endsection
