<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
      a{
        text-decoration: none;
        color: aliceblue;
      }
    </style>
    <title>
        @section('title')
            @isset($title)
           - {{$title}}
           @endisset

        @show
    </title>
</head>
<body>
    <header>

      <nav class="">
        <div id="nav">
          <div class="nav_button" onclick="showMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="submenu">
            <div class="help">
              <a class="nav_href_1" href="#">Меню сайта</a>
            <div class="sub_submenu">
                <a class="nav_href" href="/adminpanel">Заказы</a>
                <a class="nav_href" href="/adminpanel/price">Цены</a>
                <a class="nav_href" href="/store/order">Добавить заказ</a>
                <a class="nav_href" href="/store/price">Добавить цену</a>
                @guest
                <a class="" href="{{route("register.create")}}"><button class="log_btn">Регистрация</button></a>
                <a class="" href="{{route("register.login")}}"><button class="log_btn">Вход</button></a>  
                @endguest
                @auth
                <a class="" href="{{route("register.logout")}}"><button class="log_btn">Выход</button></a>  
                @endauth
              </div>
            </div>
          </div>
        </div>
    </div>
    <a href="/"><h1 class="mini_h1">CyberKotleta</h1></a>
        <div class="none">
        <div class="container d-flex justify-content-between align-items-center pt-4 pb-4" style="width: 80%;">
          <a href="/"><h1 style="font-family: 'Passion One', cursive;">CyberKotleta</h1></a>
          <ul class="d-flex justify-content-between mt-3" style="width: 35%;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/adminpanel">Заказы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/adminpanel/price">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/store/order">Добавить заказ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/store/price">Добавить цену</a>
            </li>
          </ul>
          <div class="nav_buttons d-flex flex-column">
            @guest
            <a class="" href="{{route("register.create")}}"><button class="log_btn">Регистрация</button></a>
            <a class="" href="{{route("register.login")}}"><button class="log_btn">Вход</button></a>  
            @endguest
            @auth
            <a class="" href="{{route("register.logout")}}"><button class="log_btn">Выход</button></a>  
            @endauth
          </div>
        </div>
      </div>
      </nav>
      </header>


      <main>
        @yield('content')
    </main>

    



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
        </html>