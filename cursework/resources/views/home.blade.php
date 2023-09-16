@extends('layouts.layout')

@section('header')
  <li class="nav-item me-4">
    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('about')}}">О нас</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
  </li>
@endsection

@section('content')

  <section class="promo">
    <h3 class="fw-lighter text-center mb-4 mt-5">Магазин музыкальных инструментов musicStore</h3>
    <div class="card  text-white">
      <img src="img/main.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h1 class="card-title">Лучшие инструменты только у нас</h1>
        <a class="btn card-text btn-green btn-catalog fw-bold" href="{{route('catalog')}}" role="button">Каталог</a>
      </div>
    </div>
  </section>

  
@endsection
