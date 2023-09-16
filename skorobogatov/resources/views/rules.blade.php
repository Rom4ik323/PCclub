@extends('layouts.double')
@section('content')


      <div class="main">
        <hr>
        <div class="rules container d-flex justify-content-center flex-column">
            <h1 class="text-center mt-5 mb-5">Правила</h1>
            <p>1. Мы не курим. И вам не советуем. Ни сигареты, ни вейп, ни айкос, ни даже прах Рагнароса.</p>
            <p>2. Спать в клубе категорически запрещено, иначе Фредди Крюгер явится и заблочит игровую сессию, так что не спим.</p>
            <p>3. Конечно, мы расстроимся если вы потеряете свой телефон или другие вещи, но мы не несем ответственность за их сохранность.</p>
            <p>4. Все мы любим похрустеть печеньками, но рекомендуем делать это в фуд-зоне — там есть все удобства.</p>
            <p>5. Сохраняйте спокойствие в клубе, ведь у всех нас бывают проигрышные катки, держите своего внутреннего Тора в себе.</p>
            <p>6. Если вы пришли в клуб со своей периферией, то обратитесь к нашему админу, он все подключит.</p>
            <p>7. К сожалению, несовершеннолетним нельзя находиться в клубе в ночное время, но мы ждем вас после 18-летия.</p>
            <p>8. Мы, как Око Саурона, следим за безопасностью и комфортом игроков нашего клуба при помощи камер видеонаблюдения, а турникет не даст пройти посторонним — you shall not pass!</p>
            <p>9. Спасибо, что поддерживаете чистоту в клубе, нам очень приятно :)</p>
            <p>10. На территорию клуба запрещено проносить оружие и алкоголь, все таки это игровой клуб, а не салун на Диком Западе.</p>
        </div>

        <hr class="mt-5">
      <div class="container">
        <footer>
            <div class="footer_help">
              <a href="/"><h1 style="font-family: 'Passion One', cursive;">CyberKotleta</h1></a>
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
    </html>