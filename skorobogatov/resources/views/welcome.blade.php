@extends('layouts.layout')
@section('content')
      <div class="banner">
        <div class="container">
        <h1>Компьютерный клуб <br>
          КиберКотлета</h1>
          <a href="/form"><button>забронировать место</button></a>
      </div>
      <ul class="container">
        <li class="text-center">
          <p>48</p>
          <p>Мощных <br>
            ПК</p>
        </li>
        <li class="text-center">
          <p>6</p>
          <p>PlayStation <br>
            5</p>
        </li>
        <li class="text-center">
          <p>100+</p>
          <p>Компьютерных <br>
            игр</p>
        </li>
        <li class="text-center">
          <p>24/7</p>
          <p>Наш клуб
            работает <br>
           круглосуточно</p>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="container">
        <h1 class="text-center mb-5" style="padding-top: 100px;">Характеристики</h1>
        <div class="char">
          <div class="char_item">
            <img src="/image/image 7.png" alt="">
            <div class="char_item_text">
              <h2 class="mb-4">Общий зал</h2>
              <p>Процессор: Intel Core i5 10400</p>
              <p>Видеокарта: Asus Gigabyte GTX 1070 8 Gb</p>
              <p>ОЗУ: HyperX DDR4 16Gb 2933 MHz</p>
              <p>Мониторы: 24.5" 144 Гц</p>
              <p>Аксессуары: мыши - Steel Series Rival 300</p>
              <p>Наушники - Steel Series Arctis 3/Steel Series Siberia 200</p>
              <p>Клавиатуры - Cougar Aurora S/ a4tech B810R Black</p>
            </div>
          </div>
          <div class="char_item1">
            <div class="char_item_text">
              <h2 class="mb-4">VIP зал</h2>
              <p>Процессор: Intel Core i7 10700k</p>
              <p>Видеокарта: Asus Gigabyte RTX 3080 32 Gb</p>
              <p>ОЗУ: HyperX DDR4 32Gb 2933 MHz</p>
              <p>Мониторы: 27" 240 Гц</p>
              <p>Аксессуары: мыши - Steel Series Rival 300</p>
              <p>Наушники - Steel Series Arctis 3/Steel Series Siberia 200</p>
              <p>Клавиатуры - Cougar Aurora S/ a4tech B810R Black</p>
            </div>
            <img src="/image/image 8.png" alt="">
          </div>
        </div>

        <h1 class="text-center mb-5" style="margin-top: 150px;">Лаунж</h1>
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/image 9.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/image/image 11.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/image/image 12.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h1 id="price" class="text-center pt-5 mb-5" style="font-family: 'Roboto', sans-serif; margin-top: 150px;">Цены</h1>



        <div class="price first_div">
          <table class="table">
            <thead>
              <tr>
                <th class="text-light" scope="col">Зал</th>
                <th class="text-light" scope="col">Время</th>
                <th class="text-light" scope="col">Цена за час</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($price as $price)
                
              
              <tr>
                <td class="text-light">{{$price->lobby}}</td>
                <td class="text-light">{{$price->time}}</td>
                <td class="text-light">{{$price->money}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <div class="price second_div">
          <h2 class="">Будни</h1>
            <div class="price_item">
              <div class="price_time">
                <div class="price_time_item">
                  <p>08:00</p>
                  <p>16:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>149</h3>
                  <p>1 час</p>
                  <h3>399</h3>
                  <p>3 часa</p>
                  <h3>799</h3>
                  <p>6 часов</p>
                </div>
              </div>
              <div class="price_time">
                <div class="price_time_item">
                  <p>16:00</p>
                  <p>22:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>179</h3>
                  <p>1 час</p>
                  <h3>499</h3>
                  <p>3 часa</p>
                  <h3>999</h3>
                  <p>6 часов</p>
                </div>
              </div>
              <div class="price_time">
                <div class="price_time_item">
                  <p>22:00</p>
                  <p>08:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>299</h3>
                  <p>1 час</p>
                  <h3>999</h3>
                  <p>3 часa</p>
                  <h3>1999</h3>
                  <p>6 часов</p>
                </div>
              </div>
            </div>
        </div>
        <div class="price second_div">
          <h2 class="">Выходные</h1>
            <div class="price_item">
              <div class="price_time">
                <div class="price_time_item">
                  <p>08:00</p>
                  <p>16:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>179</h3>
                  <p>1 час</p>
                  <h3>499</h3>
                  <p>3 часa</p>
                  <h3>999</h3>
                  <p>6 часов</p>
                </div>
              </div>
              <div class="price_time">
                <div class="price_time_item">
                  <p>16:00</p>
                  <p>22:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>299</h3>
                  <p>1 час</p>
                  <h3>999</h3>
                  <p>3 часa</p>
                  <h3>1999</h3>
                  <p>6 часов</p>
                </div>
              </div>
              <div class="price_time">
                <div class="price_time_item">
                  <p>22:00</p>
                  <p>08:00</p>
                </div>
                <hr>
                <div class="price_money">
                  <h3>349</h3>
                  <p>1 час</p>
                  <h3>699</h3>
                  <p>3 часa</p>
                  <h3>1499</h3>
                  <p>6 часов</p>
                </div>
              </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center mt-5 mb-5">
          <a href="/form"><button class="bron">забронировать место</button></a>
        </div>
        <div class="games" style="margin-top: 200px; margin-bottom: 200px;">
          <div class="games_item">
            <h1>Игры</h1>
            <a href="/games"><button>Список игр</button></a>
          </div>
          <p>Список игр постоянно расширяется. Если вы хотите поиграть в игру, которой у нас ещё нет, пожалуйста, сообщите администратору.Мы рассмотрим возможность ее установки.
            </p>
        </div>

        <h1 id="menu" class="text-center mb-5" style="margin-top: 150px;">Напитки</h1>

        <div class="drink">
            <div class="drink_items mb-5 mt-5">
              <div class="drink-item">
                <img src="/image/drink1.png" alt="">
                <p>Aqua</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink2.png" alt="">
                <p>Pulpy</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink3.png" alt="">
                <p>Pulpy</p>
                <h6>149 p</h6>
              </div>
            </div>
            <div class="drink_items mb-5">
              <div class="drink-item">
                <img src="/image/drink4.png" alt="">
                <p>Evervess</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink5.png" alt="">
                <p>Добрый cola</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink6.png" alt="">
                <p>Добрый lime</p>
                <h6>149 p</h6>
              </div>
            </div>
            <div class="drink_items">
              <div class="drink-item">
                <img src="/image/drink7.png" alt="">
                <p>Lipton</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink8.png" alt="">
                <p>Lipton</p>
                <h6>149 p</h6>
              </div>
              <div class="drink-item">
                <img src="/image/drink9.png" alt="">
                <p>Lipton</p>
                <h6>149 p</h6>
              </div>
            </div>
        </div>

        <h1 class="text-center mb-5" style="margin-top: 150px;">Контакты</h1>
        <div id="contacts" class="contacts">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0de67b90411d23ee09db2d90ecc4968b77763b5ce763446f624e01e551a9d544&amp;width=1200&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        

      </div>
      <hr>
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
    
    <script>

const buttons = document.querySelectorAll('h4')
    
for(let i = 0; i < buttons.length; i++){
  buttons[i].onclick = function(){
    [...buttons].forEach((el) => el.classList.remove('active1')); //убираем класс
    this.classList.add('active1')
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
@endsection