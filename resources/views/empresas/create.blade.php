@extends('layouts.app')

@section('titulo')
    Empresas - Registrar
@endsection

@section('navegacion')
    <a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')
<form action="" method="POST">
    @csrf
    <div class="row">
        
        <div class="col-md-5 mb-3">
            <label for="empresa" class="form-label">Empresa (Nombre comercial)</label>
            <input type="text" name="empresa" class="form-control @error('empresa') is-invalid @enderror" id="empresa" value="{{ old('empresa') }}">
            @error('empresa')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-5 mb-3">
            <label for="empresa_fiscal" class="form-label">Empresa (Nombre fiscal)</label>
            <input type="text" name="empresa_fiscal" class="form-control @error('empresa_fiscal') is-invalid @enderror" id="empresa_fiscal" value="{{ old('empresa_fiscal') }}">
            @error('empresa_fiscal')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-5 mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select class="form-select @error('categoria') is-invalid @enderror" name="categoria" >
                <option selected>-- Seleccionar --</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
      
</form>
@endsection