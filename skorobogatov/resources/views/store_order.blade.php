@extends('layouts.admin')



   @section('content')
   



<div class="main" style="height: 87%">
  <hr class="mb-5">
<div class="container" style="width: 30%; margin:auto;">
     <form method="POST" action="/success" class="pt-5">
          @csrf
          <h1 class="mb-3">Добавить заказ</h1>
          <div class="mb-3">
               <label for="" class="form-label text-light">Имя</label>
               <input name="name" class="form-control" id="">
             </div>
          <div class="mb-3">
            <label  for="" class="form-label text-light">Телефон</label>
            <input type="" name="number" class="form-control" id="">
          </div>
          <div class="mb-3">
            <div class="mb-3">
                <select name="hours" class="form-select" aria-label="Default select example">
                    <option selected>Выберете количество часов</option>

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>

                  </select>
              </div>
             </div>
             <div class="mb-3">
                <select name="lobby" class="form-select" aria-label="Default select example">
                    <option selected>Выберете зал</option>

                    <option value="Vip зал">Vip зал</option>
                    <option value="Обычный зал">Обычный зал</option>

                  </select>
              </div>
              <div class="mb-3">
                <select name="guys" class="form-select" aria-label="Default select example">
                    <option selected>Выберете количество человек</option>

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                  </select>
              </div>
          <button type="submit" class="">Подтвердить бронь</button>
        </form>
    </div>
    
<hr style="margin-top: 130px;">
<div class="container">
    <footer>
        <div class="footer_help">
          <h1 style="font-family: 'Passion One', cursive;">CyberKotleta</h1>
        <ul>
          <li class="mb-2"><a class="mb-2" href="#price">Цены</a></li>
          <li class="mb-2"><a class="mb-2" href="#menu">Напитки</a></li>
          <li class="mb-2"><a class="mb-2" href="/rules">Правила</a></li>
          <li class="mb-2"><a class="mb-2" href="#contacts">Контакты</a></li>
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
     a{
          text-decoration: none;
     }
        form button{
        cursor: pointer;
        border: 1px solid white;
        background-color: transparent;
        height: 50px;
        width: 200px;
        color: white;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
    }
    
    form button:hover{
        cursor: pointer;
        border: 0px solid white;
        background-color: white;
        height: 50px;
        width: 200px;
        color: black;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
        transition: 1s;
        
    }
     form h1{
          font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 30px;
          color: aliceblue;
     }
     form h2{
          font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 20px;
          color: aliceblue;
     }
     .about h3{
          font-family: 'Roboto', serif;
        font-weight: 300;
        color: aliceblue;
        font-size: 20px;
     }
     .about{
          background-color: #1C1C1C;
          margin: auto;
     }
     .about h2{
          font-family: 'Cormorant Garamond', serif;
          font-size: 30px;
     }
     ul li{
        list-style-type: none;
        font-family: 'Roboto', serif;
        font-weight: 300;
        margin: 10px;
        color: white;
        font-size: 15px;
    }
</style>