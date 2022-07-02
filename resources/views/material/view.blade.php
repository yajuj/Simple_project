@extends('layouts.main')
@section('title')
<title>Материалы</title>
@endsection
@section('content')
<div class="container">
  <h1 class="my-md-5 my-4">{{$material->title}}</h1>
  <div class="row mb-3">
    <div class="col-lg-6 col-md-8">
      <div class="d-flex text-break">
        <p class="col fw-bold mw-25 mw-sm-30 me-2">Авторы</p>
        <p class="col">{{$material->authors}}</p>
      </div>
      <div class="d-flex text-break">
        <p class="col fw-bold mw-25 mw-sm-30 me-2">Тип</p>
        <p class="col">{{$material->type}}</p>
      </div>
      <div class="d-flex text-break">
        <p class="col fw-bold mw-25 mw-sm-30 me-2">Категория</p>
        <p class="col">{{$material->category->title}}</p>
      </div>
      <div class="d-flex text-break">
        <p class="col fw-bold mw-25 mw-sm-30 me-2">Описание</p>
        <p class="col">{{$material->description}}</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <form action="{{route('append-tag-to-material', $material)}}" method="POST">
        @csrf
        <h3>Теги</h3>
        <div class="input-group mb-3">
          <select class="form-select" id="selectAddTag" aria-label="Добавьте автора" name="tag_id">
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
          </select>
          <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
      </form>
      <ul class="list-group mb-4">
        @foreach ($material->tags as $tag)
        <li class="list-group-item list-group-item-action d-flex justify-content-between">
          <a href="#" class="me-3">
            {{$tag->title}}
          </a>
          <a type="button" role="button" class="text-decoration-none" data-bs-toggle="modal"
            data-bs-target="#trashModalTag" data-bs-id="{{$tag->id}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
              viewBox="0 0 16 16">
              <path
                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
              <path fill-rule="evenodd"
                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-between mb-3">
        <h3>Ссылки</h3>
        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Добавить</a>
      </div>
      <ul class="list-group mb-4">
        @foreach ($material->links as $link)
        <li class="list-group-item list-group-item-action d-flex justify-content-between">
          <a href="{{url($link->url)}}" class="me-3" target="_blanc">
            {{$link->label ?? 'ссылка'}}
          </a>
          <span class="text-nowrap">
            {{-- UPDATE LINK --}}
            <a type="button" role="button" data-bs-toggle="modal" data-bs-id="{{$link->id}}"
              data-bs-target="#updateLinkModal" class="text-decoration-none me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                viewBox="0 0 16 16">
                <path
                  d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
              </svg>
            </a>
            {{-- REMOVE LINK --}}
            <a type="button" role="button" class="text-decoration-none" data-bs-toggle="modal"
              data-bs-target="#trashModalLink" data-bs-id="{{$link->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                viewBox="0 0 16 16">
                <path
                  d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd"
                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg>
            </a>
          </span>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
@section('modal')
<!-- ADD LINK MODAL -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
  tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
      <form action="{{route('store-link',$material->id)}}" method="POST">
        @csrf
        @method('POST')
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Добавить ссылку</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="label" placeholder="Добавьте подпись"
              id="floatingModalSignature">
            <label for="floatingModalSignature">Подпись</label>
            <div class="invalid-feedback">
              Пожалуйста, заполните поле
            </div>

          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="url" placeholder="Добавьте ссылку" id="floatingModalLink">
            <label for="floatingModalLink">Ссылка</label>
            <div class="invalid-feedback">
              Пожалуйста, заполните поле
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Добавить</button>
          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- ADD LINK MODAL -->

<!-- UPDATE LINK MODAL -->
<div class="modal fade" id="updateLinkModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
      <form action="{{route('update-link')}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" class="form-control" id="recipient-name" name='link_id'>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Обновить ссылку</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="label" placeholder="Добавьте подпись"
              id="floatingModalSignature">
            <label for="floatingModalSignature">Подпись</label>
            <div class="invalid-feedback">
              Пожалуйста, заполните поле
            </div>

          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="url" placeholder="Добавьте ссылку" id="floatingModalLink">
            <label for="floatingModalLink">Ссылка</label>
            <div class="invalid-feedback">
              Пожалуйста, заполните поле
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Обновить</button>
          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- UPDATE LINK MODAL -->

<!-- TAG DELETE MODAL -->
<div class="modal fade " id="trashModalTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить тег</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <form action="{{route('unbind-tag-from-material',$material)}}" method="POST">
          @csrf
          @method('delete')
          <input type="hidden" class="form-control" id="recipient-name" name='tag_id'>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- TAG DELETE MODAL -->

<!-- LINK DELETE MODAL -->
<div class="modal fade " id="trashModalLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить ссылку</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <form action="{{route('destroy-link')}}" method="POST">
          @csrf
          @method('delete')
          <input type="hidden" class="form-control" id="recipient-name" name='id'>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- LINK DELETE MODAL -->
<script>
  const modals = document.querySelectorAll('#trashModalLink, #trashModalTag');
  modals.forEach(element => {
    element.addEventListener('show.bs.modal', event => {
      const id = event.relatedTarget.getAttribute('data-bs-id')
      const modalBodyInput = element.querySelector('#recipient-name')
      
      modalBodyInput.value = id
    })
  });

  const updateLinkModal = document.querySelector('#updateLinkModal');
  updateLinkModal.addEventListener('show.bs.modal', event => {
      const id = event.relatedTarget.getAttribute('data-bs-id');
      console.log(id);
      const link = event.relatedTarget.parentNode.parentNode.querySelector('a');
      const href = link.href;
      const label = link.innerText;

      const inputs = updateLinkModal.querySelectorAll('#floatingModalLink, #floatingModalSignature');
   
      inputs[0].value = label;
      inputs[1].value = href;

      const modalBodyInput = updateLinkModal.querySelector('#recipient-name');
      
      modalBodyInput.value = id;
    })
</script>
@endsection