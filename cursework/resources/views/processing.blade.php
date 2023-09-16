@extends('layouts.layout')

@section('content')

<section class="processing">
    <h3 class="fw-bold mb-4">Оформление заказа</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif
<form action="{{route('order_store')}}" method="POST">
    @csrf
    @method('POST')

        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-5 col-md-12 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Фамилия:</p>
                    <input type="text" class="form-control" placeholder="Иванов" aria-label="surname" class="mb-2" name='surname'>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Имя:</p>
                    <input type="text" class="form-control" placeholder="Иван" aria-label="name" class="mb-2" name='name'>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Отчество:</p>
                    <input type="text" class="form-control" placeholder="Иванович" aria-label="patronymic" class="mb-2" name='patronymic'>
                </div>
            </div>
        </div>
        <div class="row mb-3 d-flex flex-row justify-content-between">
            <div class="col-xl-8 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Электронная почта:</p>
                    <input type="email" class="form-control" placeholder="ivan@mail.ru" aria-label="email" class="mb-2" name='email'>
                </div>
            </div>
            <div class="col-xl-4 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Контактный телефон:</p>
                    <input type="tel" class="form-control" placeholder="+7 (999) 999-99-99" aria-label="tel" class="mb-2" name='tel'>
                </div>
            </div>
        </div>
        <div class="row mb-3 d-flex flex-row justify-content-between">
            <div class="col-xl-6 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Способ получения:</p>
                    <select class="form-select" aria-label="delivery" name='delivery'>
                        <option value="Самовывоз" selected>Самовывоз</option>

                      </select>
                </div>
            </div>
            <div class="col-xl-6 col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Способ оплаты:</p>
                    <select class="form-select" aria-label="pay" name='pay'>
                        <option value="Наличными курьеру" selected>Наличными при получении</option>
                        <option value="Картой курьеру">Картой при получении</option>
                      </select>
                </div>
            </div>
        </div>


        <div class="row mb-3 d-flex flex-row justify-content-between">
            <div class="col-12 mb-2">
                <div class="d-flex flex-column">
                    <p>Комментарий к заказу:</p>
                    <textarea class="form-control" aria-label="comment" placeholder="Введите текст" name='comment'></textarea>
                </div>
            </div>
        </div>

        <?php
            $str = json_encode($cart);
        ?>
        <input type="hidden" name="str" value="{{$str}}">
        {{-- <div class="form-check my-4">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Принимаю <a href="#">пользовательское соглашение</a> и <a href=""> политику в отношении обработки и защиты персональных данных </a>
            </label>
        </div> --}}
        <button type="submit" class="btn btn-primary" style="width: 200px;">Оформить заказ</button>
    </form>
</section>

@endsection
