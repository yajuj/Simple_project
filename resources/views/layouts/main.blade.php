<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('css/bootstrap-utilities.css')}}>
  <link rel="stylesheet" href={{asset('css/style.css')}}>

  @yield('title')
</head>

<body>
  <div class="main-wrapper">
    <div class="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('list-material')}}">Test</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link 
                @if (!mb_ereg('tags|categories',url()->current()))
                active
                @endif
                " aria-current="page" href="{{route('list-material')}}">Материалы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                @if (mb_ereg('tags',url()->current()))
                active
                @endif
                " href="{{route('list-tag')}}">Теги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                @if (mb_ereg('categories',url()->current()))
                active
                @endif
                " href="{{route('list-category')}}">Категории</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content');
    </div>
    <footer class="footer py-4 mt-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col text-muted">Test</div>
        </div>
      </div>
    </footer>

  </div>

  @yield('modal')
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

</body>

</html>