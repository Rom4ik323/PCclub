@extends('layouts.admin-layout')

@section('content')

<section class="processing">
    <h3 class="fw-bold mb-4">Информация о товаре "{{$product->name}}"</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('update', ['id' => $id_product])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-4 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Фото:</p>
                    <input type="file" class="form-control" placeholder="0000001.jpg" aria-label="photo" class="mb-3" name="photo" value="{{$product->photo}}">
                </div>
            </div>
            <div class="col-xl-8 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Название:</p>
                    <input type="text" class="form-control" placeholder="Настольная елка с лампочками Бристоль в мешочке 61 см" aria-label="name" class="mb-3" name="name" value="{{$product->name}}">
                </div>
            </div>
        </div>
        {{-- <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-6 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Категория:</p>
                    <select class="form-select" aria-label="category" id="categories" name="category" value="{{old('category')}}">
                        <option value="Искусственные_ёлки">Искусственные ёлки</option>
                        <option value="Ёлочные_украшения">Ёлочные украшения</option>
                        <option value="Костюмы">Костюмы</option>
                        <option value="Новогодний_декор">Новогодний декор</option>
                        <option value="Световой_декор">Световой декор</option>
                        <option value="Новогодние_подарки">Новогодние подарки</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-6 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Подкатегория:</p>
                    <select class="form-select" aria-label="subcategory" id="subcategories" name="subcategory" value="{{old('subcategory')}}">
                        <option value="Настольные" data-chained="Искусственные_ёлки">Настольные</option>
                        <option value="Сувенирные" data-chained="Искусственные_ёлки">Сувенирные</option>
                        <option value="Высокие" data-chained="Искусственные_ёлки">Высокие</option>
                        <option value="С лампочками" data-chained="Искусственные_ёлки">С лампочками</option>
                        <option value="Цветные" data-chained="Искусственные_ёлки">Цветные</option>

                        <option value="Ёлочные игрушки" data-chained="Ёлочные_украшения">Ёлочные игрушки</option>
                        <option value="Ёлочные шары" data-chained="Ёлочные_украшения">Ёлочные шары</option>
                        <option value="Верхушки" data-chained="Ёлочные_украшения">Верхушки</option>
                        <option value="Ёлочные бусы" data-chained="Ёлочные_украшения">Ёлочные бусы</option>

                        <option value="Взрослые" data-chained="Костюмы">Взрослые</option>
                        <option value="Детские" data-chained="Костюмы">Детские</option>
                        <option value="Шапки" data-chained="Костюмы">Шапки</option>

                        <option value="Игрушки под ёлку" data-chained="Новогодний_декор">Игрушки под ёлку</option>
                        <option value="Подвесные украшения" data-chained="Новогодний_декор">Подвесные украшения</option>
                        <option value="Мишура и дождик" data-chained="Новогодний_декор">Мишура и дождик</option>
                        <option value="Для интерьера" data-chained="Новогодний_декор">Для интерьера</option>

                        <option value="Гирлянды" data-chained="Световой_декор">Гирлянды</option>
                        <option value="Светильники" data-chained="Световой_декор">Светильники</option>
                        <option value="Проекторы" data-chained="Световой_декор">Проекторы</option>
                        <option value="Фигуры" data-chained="Световой_декор">Фигуры</option>

                        <option value="Символ года" data-chained="Новогодние_подарки">Символ года</option>
                        <option value="Новогодние сувениры" data-chained="Новогодние_подарки">Новогодние сувениры</option>
                        <option value="Снежние шары" data-chained="Новогодние_подарки">Снежние шары</option>
                        <option value="Упаковка для подарков" data-chained="Новогодние_подарки">Упаковка для подарков</option>
                    </select>
                </div>
            </div>
        </div> --}}
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-5 col-12 mb-3">
            </div>
            <div class="col-xl-5 col-12 mb-3">
            </div>
            <div class="col-xl-2 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Цена:</p>
                    <input type="text" class="form-control" placeholder="5 360" aria-label="price" class="mb-3" name="price" value="{{$product->price}}">
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-4 col-12 mb-3">
            </div>
            <div class="col-xl-4 col-12 mb-3">
            </div>
            <div class="col-xl-4 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Месторасположение:</p>
                    <input type="text" class="form-control" placeholder="В помещении" aria-label="location" class="mb-3" name="location"  value="{{$product->location}}">
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-2 col-md-6 col-12 mb-3">
            </div>
            <div class="col-xl-2 col-md-6 col-12 mb-3">

            </div>
            <div class="col-xl-3 col-md-6 col-12 mb-3">

            </div>
            <div class="col-xl-5 col-md-6 col-12 mb-3">

            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Описание:</p>
                    <textarea class="form-control" aria-label="description" placeholder="Введите текст" style="height: 250px;" name="description">{{$product->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between mt-4 flex-wrap">
            <button type="submit" class="btn btn-primary mb-3 w-100">Сохранить изменения</button>

        </div>
    </form>
    <form action="{{ route('delete', ['product' => $product->id_product]) }}" method="post" class="d-flex justify-content-end">
        @csrf
        <button type="submit" class="btn btn-danger mb-3">Удалить товар</button>
    </form>
</section>



@endsection
