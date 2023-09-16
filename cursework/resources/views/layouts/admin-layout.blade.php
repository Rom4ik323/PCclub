<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" dir="rtl">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'><link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <script src="js/script.js"></script> -->
    <!-- <link rel="stylesheet" href="fonts/Montserrat-Light.ttf"> -->
    <title>admin SPS</title>

</head>
<body>
    <header class="admin-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-5">

              
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse position-relative row" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-end">
                @section('admin-header')
                  <li class="nav-item me-4">
                  <a class="nav-link" aria-current="page" href="{{route('admin-home')}}">Каталог</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link" href="{{route('admin-create')}}">Добавить товар</a>
                  </li>
                  <li class="nav-item me-4">
                    <a class="nav-link" href="{{route('admin-orders')}}">Заказы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin-messages')}}">Сообщения</a>
                  </li>
                @show
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>

        @yield('content')

    </main>



@include('layouts.admin-footer')
