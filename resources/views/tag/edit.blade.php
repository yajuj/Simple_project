@extends('layouts.main')
@section('title')
<title>Обновить тег</title>
@endsection
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">Обновить тег</h1>
  <div class="row">
    <div class="col-lg-5 col-md-8">
      <form action="{{route('update-tag',$tag)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-floating mb-3">
          <input type="text" class="form-control" value="{{$tag->title}}" placeholder="Напишите название"
            id="floatingName" name="title">
          <label for="floatingName">Название</label>
        </div>
        <button class="btn btn-primary" type="submit">Обновить</button>
      </form>
    </div>
  </div>
</div>
@endsection