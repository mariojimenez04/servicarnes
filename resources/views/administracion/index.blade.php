@extends('layouts.app')

@section('titulo')
    Usuarios - inicio
@endsection

@section('navegacion')
    <a href="{{ route('users.create') }}">Registrar usuario</a>
@endsection

@section('contenido')
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Usuario
                </th>
                <th scope="col" class="py-3 px-6">
                    Correo
                </th>
                <th scope="col" class="py-3 px-6">
                    Rol
                </th>
                <th scope="col" class="py-3 px-6">
                    Creado el
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        
        </tbody>
    </table>
</div>

@endsection