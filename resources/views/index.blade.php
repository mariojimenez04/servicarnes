@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-3">
        
        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Catalogo</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Movimientos</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Remisiones</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Ayuda</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>
        
    </div>
</div>
    
@endsection