@extends('layouts.layout')

@section('content')

@if ($cookie == 'kek' || empty($cookie))
    <div class="container text-center" style="margin-top: 10%; margin-bottom:10%; ">
        <h1 class="mb-4">В Вашей корзине пусто</h1>
        <a href="{{route('catalog')}}" class="btn btn-primary fw-bold py-2 w-50" style="font-size: 18px;">Перейти к покупкам</a>
    </div>
@else

<section class="cart mb-5">
    <div class="mb-3">
        <a href="{{route('catalog')}}" style="text-decoration: none; color: #000;">
            <img src="img/arrow.png" class="me-2 pb-1" alt="">
            Вернуться в каталог
        </a>
    </div>
    <h3 class="fw-bold">Корзина</h3>
    <div class="row">
        <?php
            $sum = 0;
            $array_cart = [];
            $array_cart['products'] = [];
        ?>


      <div class="col-12 col-xl-9 mt-4">
        <div class="cart-all">
            @foreach ($cookie as $product)
            <div class="cart-card d-flex flex-row align-self-center m-2 pb-2 mb-0 row">
                    <div class="p-0 col-lg-1 col-2">
                        <a href="{{route('product', ['id_product'=>$product->id_product])}}" style="text-decoration: none; color:#000">
                            <img src="../img/{{$product->photo}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-7 col-10">
                        <a href="{{route('product', ['id_product'=>$product->id_product])}}" style="text-decoration: none; color:#000">
                           <p>{{$product->name}}</p>

                        </a>
                    </div>
                <div class="col count d-flex fw-bold h-100 justify-content-between py-2 col-lg-2 col-5 col-sm-4">
                    <form action="{{route('minus', ['id_product'=>$product->id_product])}}" method="POST">
                    @csrf
                    <button class="btn btn-primary fw-bold py-0 text-middle " type="submit">-</button>
                    </form>

                    <span class="">{{$product->quantity}}</span>

                    <form action="{{route('plus', ['id_product'=>$product->id_product])}}" method="POST">
                    @csrf
                    <button class="btn btn-primary fw-bold py-0 text-middle " type="submit">+</button>
                    </form>
                </div>
                <div class="d-flex flex-column pe-4 col-lg-2 col-7 col-sm-8 pb-2">
                  <div class="col fw-bold price h-100 text-end ">
                    {{$product->price * $product->quantity}} ₽
                  </div>
                  <div class="text-end">
                    <form action="{{route('delete_product', ['id_product'=>$product->id_product])}}" method="POST">
                        @csrf
                        <button class="btn-delete " type="submit">Удалить</button>
                        </form>
                    {{-- <a class="btn-delete" href="{{route('delete_product', ['id_product'=>$product->id_product])}}">
                      Удалить
                    </a> --}}
                  </div>
                </div>
              </div>

              <?php
              $sum+=$product->price * $product->quantity;

              $arr_data['id_product'] = $product->id_product;
              $arr_data['name'] = $product->name;
              $arr_data['quantity'] = $product->quantity;
              $arr_data['price'] = $product->price;
              $arr_data['photo'] = $product->photo;
              array_push($array_cart['products'], $arr_data);
              ?>
            @endforeach

        </div>
      </div>

      <?php
        $array_cart['sum'] = $sum;
        $str = json_encode($array_cart);
      ?>

      <div class="col-12 col-xl-3">
        <div class="pt-4 sticky-top">
          <div class="d-flex justify-content-between">
            <h3 class="fw-bold mb-4">Итого</h3>
            <h3 class="fw-bold mb-4">{{$sum}} ₽</h3>
          </div>
          <div>
            <form action="{{route('processing')}}" method="get">
                @csrf
                <input type="hidden" name='str' value="{{$str}}" />
                <button class="btn btn-primary fw-bold py-2 w-100 " style="font-size: 18px;" type="submit">Перейти к оформлению</button>
            </form>
            {{-- <a href="processing.html" class="btn btn-primary fw-bold py-2 w-100" style="font-size: 18px;">Перейти к оформлению</a> --}}
          </div>
        </div>
      </div>

    </div>
</section>

@endif


    @foreach (array_slice($products, 0, 6) as $product)
    
    @endforeach
  </div>
</section>

@endsection
