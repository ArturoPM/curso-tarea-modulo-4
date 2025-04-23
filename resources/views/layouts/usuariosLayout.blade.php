<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>@yield('titulo') | Curso Laravel</title>
        <style>
            .footer{
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">Curso Laravel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="moduloUsuarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Usuarios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="moduloUsuarios">
                                  <li><a class="dropdown-item" href="{{route('usuarios.index')}}">Ver usuarios</a></li>
                                  <li><a class="dropdown-item" href="{{route('usuarios.create')}}">Crear usuarios</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="otroModulo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Otro modulo
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="otroModulo">
                                  <li><a class="dropdown-item" href="#">Otro submodulo</a></li>
                                  <li><a class="dropdown-item" href="#">Otro submodulo</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                @yield('contenido')
            </div>
            <div class="footer bg-dark text-center text-white">
                Copyright {{ date('Y') }} - Curso Laravel - Arturo Peña Martinez
            </div>
        </div>
    </body>
</html>