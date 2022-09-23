@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')

<div class="container">
    <div class="row row-cols-3">
        <div class="col">
            <a href="{{ route(catalogo.index) }}" class="card">
                <div class="card-body">
                    
                </div>
            </a>
        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
    </div>
</div>
    
@endsection