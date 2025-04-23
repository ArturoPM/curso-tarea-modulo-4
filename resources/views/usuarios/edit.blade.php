@extends('layouts.usuariosLayout')

@section('titulo', 'Crear usuario')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Crear usuario</h1>
    </div>
    <form action="{{route('usuarios.update', $usuario->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del usuario</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre del usuario" value="{{old('name', $usuario->name)}}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico del usuario</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el correo electrónico del usuario" value="{{old('email', $usuario->email)}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="age" class="form-label">Edad del usuario</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Ingresa la edad del usuario" value="{{old('age', $usuario->age)}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="position" class="form-label">Cargo laboral</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Ingresa el cargo laboral del usuario" value="{{old('position', $usuario->position)}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña (Opcional)</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Ingresa la contraseña para el usuario">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ingresa la contraseña para el usuario">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <a href="{{route('usuarios.index')}}" class="btn btn-danger w-100">Regresar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Actualizar Usuario</button>
                </div>
            </div>
        </div>
    </form>
@endsection