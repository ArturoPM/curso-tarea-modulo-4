@extends('layouts.usuariosLayout')

@section('titulo', 'Crear usuario')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Crear usuario</h1>
    </div>
    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del usuario</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Ingresa el nombre del usuario" value="{{old('name')}}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico del usuario</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresa el correo electrónico del usuario" value="{{old('email')}}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="age" class="form-label">Edad del usuario</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Ingresa la edad del usuario" value="{{old('age')}}">
                    @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="position" class="form-label">Cargo laboral</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" placeholder="Ingresa el cargo laboral del usuario" value="{{old('position')}}">
                    @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa la contraseña para el usuario">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Ingresa la contraseña para el usuario">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <a href="{{route('usuarios.index')}}" class="btn btn-danger w-100">Regresar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Guardar Usuario</button>
                </div>
            </div>
        </div>
    </form>
@endsection