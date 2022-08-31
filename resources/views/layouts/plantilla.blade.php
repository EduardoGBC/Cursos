<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="favicon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"> --}}
    <style>
        a{
            text-decoration: none;
        }
        button a{
            color: white;
        }
    </style>
</head>

<header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/cursos">
          <img src="https://www.kindpng.com/picc/m/307-3077383_icono-de-persona-trabajando-hd-png-download.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Lerco
        </a>
      </div>
    </nav>
</header>
<body>
    
    @yield('content')
</body>
</html>