@extends('layouts.layout')

@section('header')
  <li class="nav-item me-4">
    <a class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link active" href="{{route('catalog')}}">Каталог</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('about')}}">О нас</a>
  </li>
  <li class="nav-item me-4">
    <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
  </li>
@endsection

@section('content')

  <div class="category_menu py-3 d-flex justify-content-center sticky-top bg-light">
    <button class="btn btn-primary w-50" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Категории</button>
  </div>

  <section class="pb-5 catalog mx-5 row">
    <form class="row g-2 mt-5 mb-5" action="" method="get">
      <div class="col-auto">
        <select class="form-select" name="sort_by">
          <option value="name_asc">Название (А-Я)</option>
          <option value="name_desc">Название (Я-А)</option>
          <option value="price_asc">Цена (По возрастанию)</option>
          <option value="price_desc">Цена (По убыванию)</option>
        </select>
      </div>
      <div class="col-auto">
        <button class="btn btn-primary" type="submit">Сортировать</button>
      </div>
    </form>
    </div>
    <div class="col-xxl-10 col-12 pt-3">
      <h3 class="fw-bold mb-4">Каталог</h3>
      
      <div class="row row-cols-md-3 g-4 row-cols-xxl-6 row-cols-xl-4 row-cols-lg-4 row-cols-sm-2 row-cols-1">
        @foreach ($products as $product)

        <div class="col">
            <a href="{{route('product', ['id_product' => $product->id_product])}}" style="text-decoration: none; color:#000" >
            <div class="card h-100 p-3 pt-0">
              <img src="../../img/{{$product->photo}}" class="card-img-top py-2" alt="...">
              <div class="card-body text-center">
                <p class="card-text">{{$product->name}}</p>
                <h5 class="card-title fw-bolder mt-3">{{$product->price}} ₽</h5>
                <a href="{{route('to_cart', ['id_product' => $product->id_product])}}" class="btn btn-primary">В корзину</a>
              </div>
            </div>
            </a>
        </div>

    @endforeach

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
                Десерты
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p class="mb-2"><a href="{{route('subcategory', ['sub' => 'Именные десерты'])}}">Именные десерты</a></p>
                <p class="mb-2"><a href="{{route('subcategory', ['sub' => 'Пудинги'])}}">Пудинги</a></p>
                <p class="mb-2"><a href="{{route('subcategory', ['sub' => 'Рождественские десерты'])}}">Рождественские десерты</a></p>
                <p class="mb-2"><a href="{{route('subcategory', ['sub' => 'Десерты во фритюре'])}}">С Десерты во фритюре</a></p>
                <p class="mb-2"><a href="{{route('subcategory', ['sub' => 'Мороженное'])}}">Мороженное</a></p>
                <p class="mb-2"><a href="{{route('category', ['sub' => 'Мармелад'])}}">Мармелад</a></p>
              </div>
            </div>
          </div>
          
  </div>
 </div>
</div>

@endsection
