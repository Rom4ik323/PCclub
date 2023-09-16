@extends('layouts.admin-layout')

@section('admin-header')
    <li class="nav-item me-4">
    <a class="nav-link active" aria-current="page" href="{{route('admin-home')}}">Каталог</a>
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
@endsection

@section('content')

<div class="category_menu py-3 d-flex justify-content-center sticky-top bg-light">
  
</div>
<section class="pb-5 catalog mx-5 row">

                </div>
              </div>
            </div>
            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  Фейерверки
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">Показать все</a></p>
                </div>
              </div>
            </div> -->
            
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-xxl-10 col-12 pt-3">
      <div class="row row-cols-md-3 g-4 row-cols-xxl-6 row-cols-xl-4 row-cols-lg-4 row-cols-sm-2 row-cols-1">
        @foreach ($products as $product)

        <div class="col">
            <div class="card h-100 p-3 pt-0">
              <img src="../../img/{{$product->photo}}" class="card-img-top py-2" alt="...">
              <div class="card-body text-center">
                <p class="card-text">{{$product->name}}</p>
                <h5 class="card-title fw-bolder mt-3">{{$product->price}} ₽</h5>
                <a href="{{route('admin-update', ['product' => $product->id_product])}}" class="btn btn-primary stretched-link">Изменить</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

        {{-- <a href="#" class="btn btn-primary mt-5 mx-auto d-flex justify-content-center">Показать еще</a> --}}
      </div>



</section>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasTopLabel">Категории</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="height: 50%;">
        <div class="accordion accordion-flush category bg-light me-3 py-2" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Искусственные ёлки
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Настольные'])}}">Настольные</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Сувенирные'])}}">Сувенирные</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Высокие'])}}">Высокие</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'С лампочками'])}}">С лампочками</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Цветные'])}}">Цветные</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Искусственные_ёлки'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Ёлочные украшения
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Ёлочные игрушки'])}}">Ёлочные игрушки</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Ёлочные шары'])}}">Ёлочные шары</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Верхушки'])}}">Верхушки</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Ёлочные бусы'])}}">Ёлочные бусы</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Ёлочные_украшения'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Костюмы
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Взрослые'])}}">Взрослые</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Детские'])}}">Детские</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Шапки'])}}">Шапки</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Костюмы'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  Новогодний декор
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Игрушки под ёлку'])}}">Игрушки под ёлку</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Подвесные украшения'])}}">Подвесные украшения</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Мишура и дождик'])}}">Мишура и дождик</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Для интерьера'])}}">Для интерьера</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Новогодний_декор'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  Световой декор
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Гирлянды'])}}">Гирлянды</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Светильники'])}}">Светильники</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Проекторы'])}}">Проекторы</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Фигуры'])}}">Фигуры</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Световой_декор'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  Фейерверки
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">ds</a></p>
                  <p class="mb-2"><a href="">Показать все</a></p>
                </div>
              </div>
            </div> -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                  Новогодние подарки
                </button>
              </h2>
              <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Символ года'])}}">Символ года</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Новогодние сувениры'])}}">Новогодние сувениры</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Снежние шары'])}}">Снежние шары</a></p>
                  <p class="mb-2"><a href="{{route('admin-subcategory', ['sub' => 'Упаковка для подарков'])}}">Упаковка для подарков</a></p>
                  <p class="mb-2"><a href="{{route('admin-category', ['sub' => 'Новогодние_подарки'])}}">Показать все</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>

@endsection
