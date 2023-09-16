<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" dir="rtl">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'><link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <title>Baker</title>

</head>
<body>
    <header>
        
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">Music Store</h4>
                  <p class="text-muted">Компания "Music Store занимается продажей музыкального
                      оборудования с 2012 года</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                  <h4 class="text-white">Contact</h4>
                  <ul class="navbar-nav col-11">
                    @section('header')
                    <li class="nav-item me-4">
                      <a class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
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

                    @show
                  </ul>
                  <ul class="navbar-nav col-1 d-flex justify-content-end">
                    {{-- <li class="nav-item me-2">
                      <a class="nav-link" href="catalog.html">
                          <img src="{{asset('img/search.svg')}}" alt="">
                      </a>
                    </li> --}}
                    <li class="nav-item me-2">
                      <a class="nav-link" href="{{route('cart')}}">
                          <img src="{{asset('img/cart.svg')}}" alt="">
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">
                          <img src="{{asset('img/user.svg')}}" alt="">
                      </a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
              <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>Music Store</strong>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
    </header>

    <main>

        @yield('content')

    </main>

    @include('layouts.footer')


