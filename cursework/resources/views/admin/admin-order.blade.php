@extends('layouts.admin-layout')

@section('content')

<section class="cart mb-5">
    <div class="mb-3">
        <a href="{{route('admin-orders')}}" style="text-decoration: none; color: #000;">
            <img src="../img/arrow.png" class="me-2 pb-1" alt="">
            Все заказы
        </a>
    </div>
<h3 class="fw-bold">Информация о заказе №{{$order->order_num}}</h3>
    <div class="row">
      <div class="col-12 col-xl-8 mt-4">
        <div class="cart-all">
            @foreach ($ordered_product as $product)
            <div class="cart-card d-flex flex-row align-self-center m-2 pb-2 mb-0 row">
                <div class="p-0 col-lg-1 col-2">
                  <img src="../img/{{$product->photo}}" alt="">
                </div>
                <div class="col-lg-5 col-10">
                <p>{{$product->name}}</p>
                </div>
                <div class="col count d-flex fw-bold h-100 justify-content-between col-lg-3 col-6 col-sm-4">
                    <div class="col fw-bold price h-100 text-end">
                        {{$product->quantity}} x {{$product->price}}
                      </div>
                </div>
                <div class="d-flex flex-column pe-4 col-lg-3 col-6 col-sm-8 pb-2">
                  <div class="col fw-bold price h-100 text-end sum">
                      <?php
                        echo ($product->quantity*$product->price) . " ₽";
                      ?>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-between mt-4">
            <h3 class="fw-bold mb-4">Итого</h3>
            <h3 class="fw-bold mb-4">{{$order->sum}} ₽</h3>
          </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="pt-4 sticky-top">
          <p style="font-size: 24px;">{{$order->date}}</p>
          <p style="font-size: 18px;" class="fw-bold">{{$order->surname}} {{$order->name}} {{$order->patronymic}}</p>
          <p style="margin-bottom: 0;"><a href="tel:{{$order->tel}}" style="text-decoration: none">{{$order->tel}}</a></p>
          <p><a href="mailto:{{$order->email}}" style="text-decoration: none">{{$order->email}}</a></p>
          <p style="margin-bottom: 0;">{{$order->delivery}}</p>
          <p>{{$order->pay}}</p>
          <p class="fst-italic">{{$order->comment}}</p>
          <p style="margin-bottom: 0;">Статус заказа</p>

          <form action="{{route('status', ['id_order' => $id_order])}}" method="POST">
            @csrf
            @method('POST')
            <select class="form-select" aria-label="status" name="status">
                <option value="В обработке">В обработке</option>
                <option value="В пути">В пути</option>
                <option value="Ожидает в пункте самовывоза">Ожидает в пункте самовывоза</option>
                <option value="Доставлен">Доставлен</option>
                <option value="Отменен">Отменен</option>
              </select>
              <button type="submit" class="btn btn-primary w-100 mt-3">Сохранить изменения</button>
          </form>

        </div>
      </div>

    </div>
</section>

@endsection
