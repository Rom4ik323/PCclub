@extends('layouts.admin-layout')

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
      <a class="nav-link active" href="{{route('admin-messages')}}">Сообщения</a>
    </li>
@endsection

@section('content')

<section class="d-h">
    <h3 class="fw-bold mb-5">Сообщения</h3>
    <div class="orders">
        @foreach ($messages as $message)
        <div class="order d-flex flex-row align-self-center m-2 mb-0 row">
            <div class="row">
               <div class="col-sm-6 col-12 mb-3">
                <p class="fw-bold" style="font-size: 20px;">{{$message->name}}</p>
                <a href="mailto:{{$message->email}}" class="mb-0" style="font-size: 14px; text-decoration: none;">{{$message->email}}</a><br>
                <a href="tel:{{$message->tel}}" style="font-size: 14px; text-decoration: none;">{{$message->tel}}</a>
               </div>
               <div class="col-sm-6 col-12 text-end">
                <p>{{$message->date}}</p>
               </div>
            </div>
            <div class="row mb-2">
              <p>{{$message->text}}</p>
            </div>
          </div>
        @endforeach
    </div>
</section>

@endsection
