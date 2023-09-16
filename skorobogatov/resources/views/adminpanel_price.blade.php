@extends('layouts.admin')



   @section('content')



<div class="main">
  <hr>

    <h1 class="text-center pt-5 pb-5 text-light">Цены</h1>

    <div class="main">
        <div class="container">
          <a href="/store/price"><button class="mb-3 btn btn-light">Добавить цену</button></a>
    <table class="table">
        <thead>
          <tr>
            <th class="text-light" scope="col">id</th>
            <th class="text-light" scope="col">Зал</th>
            <th class="text-light" scope="col">Время</th>
            <th class="text-light" scope="col">Цена за час</th>
            <th class="text-light">Редактировать</th>
            <th class="text-light">Удалить</th>
          </tr>
        </thead>
        <tbody>

            @foreach  ($price as $price)
            <tr>
                <th class="text-light" scope="row">{{$price->id}}</th>
                <td class="text-light">{{$price->lobby}}</td>
                <td class="text-light">{{$price->time}}</td>
                <td class="text-light">{{$price->money}}</td>
                <td class="text-light">
                <a class="text-light" href="{{ route('admin.edit', $price) }}">Редактировать</a>
            </td>
            <td class="text-light"><form action="{{ route('admin.destroy.price', $price) }}" method="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button>
          </form></td>
              </tr>

            @endforeach

        </tbody>
      </table>
    </div>
</div>
<hr style="margin-top: 288px">
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
  </div>
   @endsection

<style>
    body{
      background-color: #1C1C1C;
    }
</style>
  </html>
