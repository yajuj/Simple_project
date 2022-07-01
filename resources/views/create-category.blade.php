@extends('layouts.main')
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">Добавить категорию</h1>
  <div class="row">
    <div class="col-lg-5 col-md-8">
      <form action="{{route('store-category')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-floating mb-3">
          <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="title">
          <label for="floatingName">Название</label>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Добавить</button>
      </form>
    </div>
  </div>
</div>
@endsection