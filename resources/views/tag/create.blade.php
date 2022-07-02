@extends('layouts.main')
@section('title')
<title>Добавить тег</title>
@endsection
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">Добавить тег</h1>
  <div class="row">
    <div class="col-lg-5 col-md-8">
      <form action="{{route('store-tag')}}" method="POST">
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