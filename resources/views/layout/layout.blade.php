<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href=
  "https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap"
          rel="stylesheet">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{URL('css/table.css')}}"> --}}
</head>
<style>
  main{
    background: url(https://cdn.discordapp.com/attachments/1117295483547815976/1121813294081122385/20230623214403.png);
    /* opacity: 0.5; */
    /* cursor: pointer; */
  }
  .container{
    color: aqua;
    }
  .card{

    --bs-card-border-color: none !important;
    --bs-card-bg: none !important;
  }
  .text-muted {
    color: white !important;
  }
p{
  color: white;
  border: 1px solid rgb(251, 249, 249) !important;
}
</style>
<body>
  <header>
    @include('layout.navbar')
  </header>
  <main>
    <div class="container">
      <h1>@yield('title')</h1>
      @yield('content')
    </div>
    
  </main>
  <footer class="footer mt-auto py-3">
    @include('layout.footer')
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>