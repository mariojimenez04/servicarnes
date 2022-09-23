@extends('layouts.app')

@section('titulo')
    Empresas - Categoria
@endsection

@section('navegacion')
    <a href="{{route('empresas.category')}}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">
                Sucursal
            </th>
            <th scope="col">
                Domicilio
            </th>
            <th scope="col">
                Rol
            </th>
            <th scope="col">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Supervisor
            </td>
            <td>
                correo@correo.com
            </td>
            <td>
                Administrador
            </td>
            <td>
                <a href="#">Edit</a>
            </td>
        </tr>
        <tr>
            <td>
                Supervisor
            </td>
            <td>
                correo@correo.com
            </td>
            <td>
                Usuario
            </td>
            <td>
                <a href="#">Edit</a>
            </td>
        </tr>
    
    </tbody>
</table>
@endsection