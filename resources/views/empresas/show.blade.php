@extends('layouts.app')

@section('titulo')
    Empresas - Listado categoria
@endsection

@section('navegacion')
    <a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">
                Nombre de la empresa
            </th>
            <th scope="col">
                Fecha de registro
            </th>
            <th scope="col">
                Registrado por
            </th>
            <th scope="col">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Grupo Servicarnes S.A de C.V
            </td>
            <td>
                21/08/2022
            </td>
            <td>
                Administrador
            </td>
            <td class="d-flex flex-column gap-3">
                <a class="btn btn-warning" href="#">Editar</a>
                <a class="btn btn-danger" href="#">Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>
                Grupo Servicarnes S.A de C.V
            </td>
            <td>
                21/08/2022
            </td>
            <td>
                Administrador
            </td>
            <td class="d-flex flex-column gap-3">
                <a class="btn btn-warning" href="#">Editar</a>
                <a class="btn btn-danger" href="#">Eliminar</a>
            </td>
        </tr>
    
    </tbody>
</table>
@endsection

