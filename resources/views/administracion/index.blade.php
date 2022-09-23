@extends('layouts.app')

@section('titulo')
    Usuarios - inicio
@endsection

@section('navegacion')
    <a class="btn btn-primary" href="{{ route('catalogo.index') }}">Volver</a>
    <a class="btn btn-primary" href="{{ route('users.create') }}">Registrar usuario</a>
@endsection

@section('contenido')
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-10">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">
                    Usuario
                </th>
                <th scope="col">
                    Correo
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
</div>

@endsection