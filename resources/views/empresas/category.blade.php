@extends('layouts.app')

@section('titulo')
    Empresas - Listado categoria
@endsection

@section('navegacion')
    <a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-3">
        
    <div class="col">
        <a href="{{ route('catalogo.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Franquicia</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>
        
    <div class="col">
        <a href="{{ route('category.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Sucursales</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>

</div>
@endsection

