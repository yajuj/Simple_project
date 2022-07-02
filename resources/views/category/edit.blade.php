@extends('layouts.main')
@section('title')
<title>Обновить категории</title>
@endsection
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">Обновить категорию</h1>
  <div class="row">
    <div class="col-lg-5 col-md-8">
      <form action="{{route('update-category', $category)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-floating mb-3">
          <input type="text" class="form-control" value="{{$category->title}}" placeholder="Напишите название"
            id="floatingName" name="title">
          <label for="floatingName">Название</label>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле
          </div>
        </div>
        @error('title')
        <p class="p-1 mt-1 text-danger">Название не может быть пустым</p>
        @enderror
        <button class="btn btn-primary" type="submit">Обновить</button>
      </form>
    </div>
  </div>
</div>
@endsection