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
                Creado el
            </th>
            <th scope="col">
                <span>Editar</span>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">
                Supervisor
            </th>
            <td class="py-4 px-6">
                correo@correo.com
            </td>
            <td class="py-4 px-6">
                Administrador
            </td>
            <td class="py-4 px-6">
                21/08/2022
            </td>
            <td class="py-4 px-6 text-right">
                <a href="#">Edit</a>
            </td>
        </tr>
        <tr>
            <th scope="row">
                Supervisor
            </th>
            <td class="py-4 px-6">
                correo@correo.com
            </td>
            <td class="py-4 px-6">
                Usuario
            </td>
            <td class="py-4 px-6">
                25/08/2022
            </td>
            <td class="py-4 px-6 text-right">
                <a href="#">Edit</a>
            </td>
        </tr>
    
    </tbody>
</table>
@endsection