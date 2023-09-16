@extends('layouts.double')
@section('content')

<div class="main">
    <hr class="mb-5">
    <div class="games container">
        <div class="games_banner">
            <h1 class="ms-5">БИБЛИОТЕКА ИГР</h1>
            <p class="ms-5 mb-5">Библиотека игр содержит все популярные (и не только) тайтлы. Все игры обновлены и уже ждут тебя.</p>
        </div>
    </div>
    <div class="container">
        <div class="games_buttons">
            <button class="btn1">PC</button>
            <button class="btn2">PS5</button>
        </div>
        <div class="second_div mt-5">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2022/zE3ChTZFrUSkkGScSiHh-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/August2022/FRTCxhY5fTexab8Rk2KA-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2022/PJzT2KdA0FDjyi63PDnD-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2022/NBhq00lwetaspEozr18t-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2022/A4fnG0Lq8Ceql4wAYOC5-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/August2022/u9yUuYIn6ESraan7SkAe-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/February2022/aqTC4s7G35zAo31QCk8t-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/February2022/m540kZcIZRDkoBK0dVqX-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/February2022/PKBnG3K3HuFDkCWdi5Gt-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/August2022/TNXNZUcVh5YciAEK4paw-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/August2022/ytAKUl7HOv3yggDX6iR3-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/August2022/TqLbqDjwlPKzcuJRgvcK-w240.webp" alt="">
        </div>
        <div class="first_div mt-5">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2022/TDhBoFQ3B2tukHtYzTp5-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/May2022/jpacReDFATpEpTJ6JaNR-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2023/d7jlyjn0g3fgkyDsFlHF-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2023/VUT5vHKsJOatnLaER9Ax-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/September2022/KEDE4MnC83jD0b9RIidA-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2023/hYC5kHfBd3QzRzDI9dWz-w240.webp" alt="">
          <img class="m-2" src="https://fpsarena.ru/storage/games/January2023/1sta0WuiuNNjzn66piUK-w240.webp" alt="">
        </div>
    </div>
    <hr class="mt-5">
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
</body>
<script>

const buttons = document.querySelectorAll('button')
    
for(let i = 0; i < buttons.length; i++){
  buttons[i].onclick = function(){
    [...buttons].forEach((el) => el.classList.remove('active2')); //убираем класс
    this.classList.add('active2')
  }
}
      function showMenu() {
  document.getElementById("nav").classList.toggle('active');
}

var total_pics_num = 4;
var interval = 3000;
var time_out = 1;
var i = 0;
var timeout;
var opacity = 100;
function fade_to_next() {
  opacity--;
  var k = i + 1;
  var image_now = 'image_' + i;
  if (i == total_pics_num) k = 1;
  var image_next = 'image_' + k;
  document.getElementById(image_now).style.opacity = opacity/100;
  document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
  document.getElementById(image_next).style.opacity = (100-opacity)/100;
  document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
  timeout = setTimeout("fade_to_next()",time_out);
  if (opacity==1) {
    opacity = 100;
    clearTimeout(timeout);
  }
}
setInterval (
  function() {
    i++;
    if (i > total_pics_num) i=1;
    fade_to_next();
  }, interval
);
$(document).ready(function () {
       $(".second_div").hide();
            $(".btn1").click(function () {
                $(".first_div").hide();
                $(".second_div").show()
            });
          $(".btn2").click(function () {
                $(".second_div").hide();
                $(".first_div").show()
        });
     });
    </script>
</html>
@endsection