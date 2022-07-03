@extends('layouts.main')
@section('title')
<title>Обновить материал</title>
@endsection
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">Обновить материал</h1>
  <div class="row">
    <div class="col-lg-5 col-md-8">
      <form action="{{route('update-material', $material)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-floating mb-3">
          <select class="form-select" id="floatingSelectType" name="type">
            <option selected value="null">Выберите тип</option>
            @foreach ($types as $type)
            <option @if ($material->type == $type)
              selected
              @endif
              value="{{$type}}">{{$type}}</option>
            @endforeach
          </select>
          <label for="floatingSelectType">Тип</label>
          <div class="invalid-feedback">
            Пожалуйста, выберите значение
          </div>
          @error('type')
          <p class="p-1 mt-1 text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="floatingSelectCategory" name="category_id">
            <option selected>Выберите категорию</option>
            @foreach ($categories as $category)
            <option @if ($material->category == $category)
              selected
              @endif
              value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
          <label for="floatingSelectCategory">Категория</label>
          <div class="invalid-feedback">
            Пожалуйста, выберите значение
          </div>
          @error('category_id')
          <p class="p-1 mt-1 text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" value="{{$material->title}}" placeholder="Напишите название"
            id="floatingName" name="title">
          <label for="floatingName">Название</label>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле
          </div>
          @error('title')
          <p class="p-1 mt-1 text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" value="{{$material->authors}}" placeholder="Напишите авторов"
            id="floatingAuthor" name="authors">
          <label for="floatingAuthor">Авторы</label>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле
          </div>
          @error('authors')
          <p class="p-1 mt-1 text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Напишите краткое описание" id="floatingDescription"
            style="height: 100px" name="description">{{$material->description}}</textarea>
          <label for="floatingDescription">Описание</label>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле
          </div>
          @error('description')
          <p class="p-1 mt-1 text-danger">{{ $message }}</p>
          @enderror
        </div>
        <button class="btn btn-primary" type="submit">Обновить</button>
      </form>
    </div>
  </div>
</div>
@endsection