@extends('layouts.usuariosLayout')

@section('titulo', 'Reporte de usuarios')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Reporte de Usuarios</h1>
    </div>
    <div class="text-center mb-3">
        <a href="{{route('usuarios.create')}}" class="btn btn-primary w-100">Crear usuario</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito: </strong> {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Edad</th>
                <th scope="col">Cargo laboral</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->age}}</td>
                    <td>{{$usuario->position}}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Acciones
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('usuarios.show', $usuario->id)}}">Ver</a></li>
                                <li><a class="dropdown-item" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a></li>
                                <li><a class="dropdown-item" href="{{route('usuarios.destroy', $usuario->id)}}">Eliminar</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">No hay usuarios registrados</td>
                </tr>
            @endforelse
        </tbody>
@endsection