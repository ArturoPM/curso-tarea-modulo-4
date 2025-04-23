@extends('layouts.usuariosLayout')

@section('titulo', 'Ver usuario')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Detalles del Usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre del usuario" disabled value="{{$usuario->name}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico del usuario</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el correo electrónico del usuario" disabled value="{{$usuario->email}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="age" class="form-label">Edad del usuario</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Ingresa la edad del usuario" disabled value="{{$usuario->age}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="position" class="form-label">Cargo laboral del usuario</label>
                <input type="text" class="form-control" id="position" name="position" placeholder="Ingresa el cargo laboral del usuario" disabled value="{{$usuario->position}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{route('usuarios.index')}}" class="btn btn-danger w-100">Regresar</a>
            </div>
        </div>
    </div>
@endsection