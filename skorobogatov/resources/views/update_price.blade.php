@extends('layouts.admin')



   @section('content')
<div class="main" style="height: 87%">
  <hr class="mb-5">
<div class="container" style="width: 30%; margin:auto;">
     <form method="POST" action="{{ route('admin.edit.submit', $price->id) }}" class="pt-5">
          @csrf
          <h1 class="mb-3">Обновить цену</h1>
          <div class="mb-3">
               <label for="" class="form-label text-light">Зал</label>
               <input name="lobby" value="{{$price->lobby}}" class="form-control" id="">
             </div>
          <div class="mb-3">
            <label  for="" class="form-label text-light">Время</label>
            <input type="" name="time" value="{{$price->time}}" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label  for="" class="form-label text-light">Цена</label>
            <input type="" name="money" value="{{$price->money}}" class="form-control" id="">
          </div>
          <button type="submit" class="">Обновить</button>
        </form>
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
    body{
        background-color: #1C1C1C;
    }
</style>
</html>