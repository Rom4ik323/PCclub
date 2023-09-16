@extends('layouts.admin')



   @section('content')
   <div class="main">
    <hr>
    <div class="container">
        <h1 class="text-center pt-5 pb-5">Заказы</h1>
        <a href="/store/order"><button class="mb-3 btn btn-light">Добавить заказ</button></a>
        <table class="table">
            <thead>
              <tr>
                <th class="text-light" scope="col">id</th>
                <th class="text-light" scope="col">Name</th>
                <th class="text-light" scope="col">number</th>
                <th class="text-light" scope="col">hours</th>
                <th class="text-light" scope="col">lobby</th>
                <th class="text-light" scope="col">guys</th>
                <th class="text-light" scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($orders as $orders)

                <tr>
                    <th class="text-light" scope="row">{{$orders->id}}</th>
                    <td class="text-light">{{$orders->name}}</td>
                    <td class="text-light">{{$orders->number}}</td>
                    <td class="text-light">{{$orders->hours}}</td>
                    <td class="text-light">{{$orders->lobby}}</td>
                    <td class="text-light">{{$orders->guys}}</td>
                    <td class="text-light"><form action="{{ route('admin.destroy', $orders) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button>
                    </form></td>
                  </tr>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
    <hr style="margin-top: 50px">
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
