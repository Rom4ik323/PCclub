@extends('layouts.layout')

@section('header')
  <li class="nav-item me-4">
    <a class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link active" href="{{route('about')}}">О нас</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
  </li>
@endsection

@section('content')

<section class="about">
    <h3 class="fw-bold mb-4">У нас вы можете найти инструменты на любой вкус</h3>
    <div class="d-flex flex-wrap block-1">
        <div class="row">
            <div class="col-lg-8  p-3 justify-content-right d-flex">
              <img src="img/about1.jpg" alt="">
            </div>
        </div>
 
          <div class="col-lg-4 col-sm-6 align-self-center">
            <p class="fw-light">
              Труба <br>Медный духовой музыкальный инструмент альтово-сопранового регистра, самый высокий по звучанию среди медных духовых. С древнейших времён натуральная труба использовалась в качестве сигнального инструмента, примерно с XVII века вошла в состав оркестра
            </p>
          </div>

        </div>
    </div>
</section>



  
</div>

@endsection
