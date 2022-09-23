@extends('layouts.app')

@section('titulo')
    Empresas - Inicio
@endsection

@section('navegacion')
    <a class="btn btn-primary" href="{{ route('catalogo.index') }}">Volver</a>
    <a href="{{ route('empresas.create') }}" class="btn btn-primary">Registrar nueva empresa</a>
@endsection

@section('contenido')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-3">
   
    <div class="col">
        <a href="{{ route('empresas.show') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Catalogo de empresas</h3>
                <p class="card-text">Se muestran las empresas disponibles</p>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="{{ route('empresas.category') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Clasificacion de empresas</h3>
                <p class="card-text">Clasificacion por sucursal o franquicia</p>
            </div>
        </a>
    </div>

</div>
@endsection