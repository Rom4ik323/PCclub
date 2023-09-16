@extends('layouts.layout')


@section('content')

<div class="main">
  <hr class="mb-5">
  <h1 class="text-center mb-5">Вход</h1>
<div style="width: 40%; height: 54.5vh" class="container">
  @if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
<form action="{{route('register.login')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="email" class="form-label text-white">Электронная почта</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label text-white">Пароль</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit">Войти</button>
  </form>
</div>
</div>
<hr style="margin-top: 0px">
<div class="container">
  <footer>
      <div class="footer_help">
        <h1 style="font-family: 'Passion One', cursive;">CyberKotleta</h1>
      <ul>
        <li class="mb-2"><a class="mb-2" href="/">Цены</a></li>
        <li class="mb-2"><a class="mb-2" href="/">Напитки</a></li>
        <li class="mb-2"><a class="mb-2" href="/rules">Правила</a></li>
        <li class="mb-2"><a class="mb-2" href="/">Контакты</a></li>
      </ul>
      <img src="/image/footer_img.png" alt="">
      <ul>
        <li class="mb-3">8-999-999-99-99</li>
        <li class="mb-3">cbKotleta@mail.ru</li>
          <div class="d-flex justify-content-between" style="width: 100%;">
            <li class="icon"><img src="/image/vk.png" alt=""></li>
            <li class="icon"><img src="/image/tg.png" alt=""></li>
            <li class="icon"><img src="/image/inst.png" alt=""></li>
          </div>
        </li>
      </ul>
    </div>
  </footer>
</div>
<hr>
<p class="vsena">©️CyberKotleta</p>
</div>


@endsection

<style>


  button {
    cursor: pointer;
    border: 1px solid white;
    background-color: transparent;
    height: 50px;
    width: 200px;
    color: white;
    font-size: 0.9em;
    font-family: 'Roboto', sans-serif;
}

button:hover{
      background-color: white;
      color: black;
        transition: 1s;
        
    }
</style>