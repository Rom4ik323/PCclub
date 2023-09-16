@extends('layouts.admin-layout')

@section('admin-header')
    <li class="nav-item me-4">
    <a class="nav-link" aria-current="page" href="{{route('admin-home')}}">Каталог</a>
    </li>
    <li class="nav-item me-4">
      <a class="nav-link active" href="{{route('admin-create')}}">Добавить товар</a>
    </li>
    <li class="nav-item me-4">
      <a class="nav-link" href="{{route('admin-orders')}}">Заказы</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin-messages')}}">Сообщения</a>
    </li>
@endsection

@section('content')

<section class="processing">
    <h3 class="fw-bold mb-4">Информация о товаре</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-4 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Фото:</p>
                    <input type="file" class="form-control" placeholder="0000001.jpg" aria-label="photo" class="mb-3" name="photo" value="{{old('photo')}}">
                </div>
            </div>
            <div class="col-xl-8 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Название:</p>
                    <input type="text" class="form-control" placeholder="" aria-label="name" class="mb-3" name="name" value="{{old('name')}}">
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-6 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Категория:</p>
                    <select class="form-select" aria-label="category" id="categories" name="category" value="{{old('category')}}">
                        <option value="Гитары">Гитары</option>
                        <option value="Клавишные">Клавишные</option>
                        <option value="Духовые">Духовые</option>
                       
                    </select>
                </div>
            </div>

        </div>
        <div class="row d-flex flex-row justify-content-between">


            <div class="col-xl-2 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Цена:</p>
                    <input type="text" class="form-control" placeholder="11111" aria-label="price" class="mb-3" name="price" value="{{old('price')}}">
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-xl-4 col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Месторасположение:</p>
                    <input type="text" class="form-control" placeholder="Ленинградское шоссе 13А" aria-label="location" class="mb-3" name="location"  value="{{old('location')}}">
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-between">

        </div>
        <div class="row d-flex flex-row justify-content-between">
            <div class="col-12 mb-3">
                <div class="d-flex flex-column">
                    <p>Описание:</p>
                    <textarea class="form-control" aria-label="description" placeholder="Введите текст" style="height: 250px;" name="description">{{old('description')}}</textarea>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center mt-4 flex-wrap">
            <button type="submit" class="btn btn-primary mb-3">Добавить товар</button>
        </div>
    </form>
</section>

@endsection
