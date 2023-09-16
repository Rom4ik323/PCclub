@extends('layouts.admin-layout')

@section('admin-header')
    <li class="nav-item me-4">
    <a class="nav-link" aria-current="page" href="{{route('admin-home')}}">Каталог</a>
    </li>
    <li class="nav-item me-4">
      <a class="nav-link" href="{{route('admin-create')}}">Добавить товар</a>
    </li>
    <li class="nav-item me-4">
      <a class="nav-link active" href="{{route('admin-orders')}}">Заказы</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin-messages')}}">Сообщения</a>
    </li>
@endsection

@section('content')

<section class="cart">
    <h3 class="fw-bold mb-5">Заказы</h3>
    <div class="orders">
        @foreach ($orders as $order)
        <div class="order d-flex flex-row align-self-center m-2 mb-0 row">
            <div class="d-flex justify-content-between flex-column col-xxl-6 col-xl-5 col-lg-12 col-12 pb-2">
              <p class="fw-bold">№{{$order->order_num}} {{$order->surname}} {{$order->name}} {{$order->patronymic}}</p>
               ({{$order->delivery}})</p>
            </div>
            <div class="d-flex flex-column justify-content-between col-xxl-3 col-xl-4 col-lg-6 col-12 pb-2">
              <p class="fw-bold price mb-3">{{$order->sum}} ₽</p>
              <p>{{$order->status}}</p>
            </div>
            <div class="d-flex flex-column pe-4 justify-content-between align-items-end col-xxl-3 col-xl-3 col-lg-6 col-12 pb-2">
              <p class=" mb-3">{{$order->date}}</p>
              <a href="{{route('admin-order', ['order' => $order->id_order])}}" class="btn btn-primary w-100">Подробнее</a>
            </div>
          </div>
        @endforeach
    </div>
</section>
//
@endsection
