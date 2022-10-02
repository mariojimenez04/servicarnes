@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('navegacion')
    <a href="{{ route('catalogo.index') }}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')
<div class="row row-cols-3 row-cols-md-4 gap-3">
        
    <div class="col">
        <a href="{{ route('producto.catalogo.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Catalogo de productos</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>
        
    <div class="col">
        <a href="{{ route('producto.catalogo.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Lineas</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>
        
    <div class="col">
        <a href="{{ route('producto.catalogo.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">unidades de medida</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>
        
    <div class="col">
        <a href="{{ route('producto.catalogo.index') }}" class="card">
            <div class="card-body">
                <h3 class="card-title">Marcas</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </a>
    </div>

</div>
@endsection