@extends('layouts.layout')

@section('content')

<section class="product">
    <div class="mb-3">
    <a href="{{route ('catalog')}}" style="text-decoration: none; color: #000;">
            <img src="../img/arrow.png" class="me-2 pb-1" alt="">
            Назад
        </a>
    </div>
    <h3 class="fw-bold mb-4">{{$product->name}}</h3>
    <div class="row mb-5">
        <div class="col-xl-6 col-lg-6 d-flex justify-content-center">
            <img src="../img/{{$product->photo}}" class="product-img" alt="" id="product-img">
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="desc mb-4">
                <h4>Описание</h4>
                <p class="overflow-hidden" style="max-height: 120px;" >
                    {{$product->description}}
                </p>
                <a href="#description">Подробнее</a>
            </div>
            <div class="specific mb-4">
                <h4>Характеристики</h4>
                <table class="tb_specific mb-3">
                    <tr><td>Артикул:</td><td>{{$product->article}}</td></tr>
                    <tr><td>Бренд:</td><td>{{$product->brand}}</td></tr>
                    <tr><td>Страна:</td><td>{{$product->country}}</td></tr>
                    <tr><td>Производство:</td><td>{{$product->production}}</td></tr>
                    <tr><td>Вес:</td><td>{{$product->weight}} кг</td></tr>
                </table>
                <a href="#description">Все характеристики</a>
            </div>
            <div>
                <div class="row mb-3">
                    {{-- <div class="col count fw-bold h-100 align-self-center">
                        <button class="btn btn-primary fw-bold py-0 text-middle me-3" type="submit">-</button>
                        1
                        <button class="btn btn-primary fw-bold py-0 text-middle ms-3" type="submit">+</button>
                    </div> --}}
                    <div class="col fw-bold price h-100 text-end ">
                        {{$product->price}} ₽
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('to_cart', ['id_product' => $product->id_product])}}" class="btn btn-primary fw-bold py-2" style="font-size: 24px;">В корзину</a>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="description d-flex flex-nowrap">
          <div class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Описание
            </button>
          </div>
          <div class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Характеристики
            </button>
          </div>

        </div>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body"  id="description">
                <?php
                    echo nl2br($product->description);
                ?>
            </div>
          </div>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body"  id="specific">
                <table class="tb_specific mb-3">
                    <tr><td>Артикул:</td><td>{{$product->article}}</td></tr>
                    <tr><td>Бренд:</td><td>{{$product->brand}}</td></tr>
                    <tr><td>Страна:</td><td>{{$product->country}}</td></tr>
                    <tr><td>Производство:</td><td>{{$product->production}}</td></tr>
                    <tr><td>Вес:</td><td>{{$product->weight}} кг</td></tr>
                    <tr><td>Высота:</td><td>{{$product->height}} см</td></tr>
                    <tr><td>Цвет:</td><td>{{$product->colour}}</td></tr>
                    <tr><td>Материал:</td><td>{{$product->material}}</td></tr>
                    <tr><td>Месторасположение:</td><td>{{$product->location}}</td></tr>
                </table>
            </div>
          </div>
      </div>
</section>

@endsection
