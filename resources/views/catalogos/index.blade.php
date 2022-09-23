@extends('layouts.app')

@section('titulo')
    Catalogos
@endsection 

@section('navegacion')
    <a class="btn btn-primary" href="/index">Volver</a>
@endsection

@section('contenido')

<div class="container mt-8">
    <div class="row row-cols-3 row-cols-md-4 gap-3">
        
        <div class="col">
            <a href="{{ route('empresas.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Empresas</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Productos</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Clientes</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Proveedores</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Vendedores</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('users.config') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Usuarios</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('catalogo.index') }}" class="card">
                <div class="card-body">
                    <h3 class="card-title">Almacenes</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </a>
        </div>
        
    </div>
</div>
    
@endsection