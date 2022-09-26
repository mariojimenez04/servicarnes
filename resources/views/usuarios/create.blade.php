@extends('layouts.app')

{{-- @section('estilos')
    @vite('resources/css/app.css')
@endsection --}}

@section('titulo')
    Registrar
@endsection

@section('navegacion')
    <a class="btn btn-primary" href="{{ route('users.config') }}">Volver</a>
@endsection

@section('contenido')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <div class="relative z-0 mb-6 w-full group">
                  <label for="user_name" class="form-label">Usuario</label>
                  <input type="text" name="user_name" id="user_name" class="form-control @error('user_name') is-invalid @enderror"  value="{{ old('user_name') }}"/>
                </div>
                @error('user_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="col-md-4 mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"/>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
    
            <div class="col-md-4 mb-3">
                <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"/>
                @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
      
    </form>
@endsection