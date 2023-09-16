@extends('layouts.layout')

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
    <a class="nav-link active" href="{{route('contacts')}}">Контакты</a>
  </li>
@endsection

@section('content')

<section class="contacts">
    <div class="d-flex flex-row flex-wrap">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aecf7a0b3d32ac130a5c37626348187be911c65723dfed88a04716cb20f15cfb2&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

</section>
<hr>
<div class="message pb-5">
  <h4 class="mb-4 pt-3">Отправьте свое сообщение</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif
  <form action="{{route('send-contact')}}" method="POST">
    @csrf
    <div class="m-input d-flex flex-row flex-wrap justify-content-between mb-3">
      <input type="text" class="form-control" placeholder="Имя" aria-label="Username" class="mb-3" name="name" value="{{old('name')}}">
      <input type="email" class="form-control" placeholder="Email" aria-label="email" class="mb-3" name="email" value="{{old('email')}}">
      <input type="tel" class="form-control" placeholder="Телефон" aria-label="tel" class="mb-3" name="tel" value="{{old('tel')}}">
    </div>
    <div class="mb-4">
      <textarea class="form-control" aria-label="With textarea" placeholder="Ваше сообщение" name="text">{{old('text')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
  </form>
</div>
<hr>
@endsection
