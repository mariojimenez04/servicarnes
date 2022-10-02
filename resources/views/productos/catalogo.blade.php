@extends('layouts.app')

@section('titulo')
    Listado de productos
@endsection

@section('navegacion')
    <a href="{{ route('producto.index') }}" class="btn btn-primary">Volver</a>
@endsection

@section('contenido')

<h2>Producto: CER-E-060 Bring Back</h2>

<ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="general-tab-pane" aria-selected="true">General</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="datos-tab" data-bs-toggle="tab" data-bs-target="#datos-tab-pane" type="button" role="tab" aria-controls="datos-tab-pane" aria-selected="false">Mas datos</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="estadistico-tab" data-bs-toggle="tab" data-bs-target="#estadistico-tab-pane" type="button" role="tab" aria-controls="estadistico-tab-pane" aria-selected="false">Estadisticos</button>
        </li>
        
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="presentacion-tab" data-bs-toggle="tab" data-bs-target="#presentacion-tab-pane" type="button" role="tab" aria-controls="presentacion-tab-pane" aria-selected="false">Presentacion</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="ultimacompra-tab" data-bs-toggle="tab" data-bs-target="#ultimacompra-tab-pane" type="button" role="tab" aria-controls="ultimacompra-tab-pane" aria-selected="false">Ultimas compras</button>
        </li>
</ul>

<form action="">
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">


                <div class="row mb-3 d-flex">

                    <div class="d-flex gap-3">
                        <div class="form-group col-md-3">
                            <label class="form-label" for="">Clave de producto</label>
                            <input class="form-control form-control-sm" type="text" value="CER-E-060" disabled>
                        </div>
        
                        <div class="form-group col-md-7">
                            <label class="form-label" for="">Descripcion</label>
                            <input class="form-control form-control-sm" type="text" value="Bring Back" disabled>
                        </div>
        
                        <div class="centrado">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen"><i class="bi bi-search"></i></button>
                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="container">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Busqueda de productos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
        
                                <h4>Datos de busqueda</h4>
        
                                <form action="">
        
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="" class="form-label">Descripcion</label>
                                            <input type="text" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-3 form-group">
                                                <label for="" class="form-label">Linea</label>
                                                <select class="form-select form-select-sm" name="" id="">
                                                    <option value="">Valor 1</option>
                                                    <option value="">Valor 2</option>
                                                    <option value="">Valor 3</option>
                                                    <option value="">Valor 4</option>
                                                </select>
                                        </div>
                                    </div>
        
                                </form>

                                <div class="linea my-4"></div>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                Clave
                                            </th>
                                            <th scope="col">
                                                Descripcion
                                            </th>
                                            <th scope="col">
                                                Precio
                                            </th>
                                            <th scope="col">
                                                Existencia
                                            </th>
                                            <th scope="col">
                                                <span>Acciones</span>
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
                                            <td>
                                                <a class="btn btn-warning" href="">Seleccionar</a>
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
                                            <td>
                                                <a class="btn btn-warning" href="#">Seleccionar</a>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="linea"></div>

                <div class="row mb-3">

                    <h4>Clasificatorias</h4>
                    <div class="form-group col-md-5">
                        <label class="form-label" for="">Linea</label>
                        <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                    </div>

                    <div class="form-group col-md-5">
                        <label class="form-label" for="">Sublinea</label>
                        <input class="form-control form-control-sm" type="text" value="Espalda" disabled>
                    </div>

                    <div class="form-group col-md-5">
                        <label class="form-label" for="">Marca</label>
                        <input class="form-control form-control-sm" type="text" value="Gena" disabled>
                    </div>

                    <div class="form-group col-md-5">
                        <label class="form-label" for="">Unidad de medida</label>
                        <input class="form-control form-control-sm" type="text" value="KG" disabled>
                    </div>

                </div>

                <div class="linea"></div>

                <div class="row mb-3">

                    <h4>Existencias</h4>
                    <div class="d-flex justify-content-around">
                        <div class="d-flex gap-4">
                            <div class="form-group col-md-2">
                                <label class="form-label" for="">Actual</label>
                                <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label class="form-label" for="">Minima</label>
                                <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                            </div>
            
                            <div class="form-group col-md-2">
                                <label class="form-label" for="">Maxima</label>
                                <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                            </div>
                        </div>
        
                        <div class="form-group col-md-2">
                            <label class="form-label" for="">Disponible</label>
                            <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                        </div>
                    </div>
                    
                </div>
                
                <div class="linea"></div>

                <div class="row">
                    <h4>Costos y precios de venta</h4>

                    <div class="form-group col-md-2">
                        <label class="form-label" for="">Costo</label>
                        <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label class="form-label" for="">Costo con Imptos.</label>
                        <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label class="form-label" for="">Costo promedio</label>
                        <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label class="form-label" for="">Costo Prom c/Imp.</label>
                        <input class="form-control form-control-sm" type="text" value="Cerdo" disabled>
                    </div>

                </div>

        </div>

        <div class="tab-pane fade" id="datos-tab-pane" role="tabpanel" aria-labelledby="datos-tab" tabindex="0">

            <h4>Proveedor asignado</h4>

            <div class="row">
                <label for="" class="col-sm-1 col-form-label">Clave</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>

            <div class="row">
                <label for="" class="col-sm-1 col-form-label">Proovedor</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md 5">
                    <label for="" class="form-label">Observaciones</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Quejas, sujerencias acerca de el proovedor"></textarea>
                </div>
            </div>

        </div>

        <div class="tab-pane fade mt-3" id="estadistico-tab-pane" role="tabpanel" aria-labelledby="estadistico-tab" tabindex="0">

            <div class="row align-items-center justify-content-between">
                <div class="col-5">
                    <div class="row mb-2">
                        <div class="col-sm-3">
                            <label for="" class="form-label">Fecha de registro</label>
                            <input type="text" class="form-control form-control-sm" disabled value="01/10/2022">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="form-label">Ultima actualizacion</label>
                            <input type="text" class="form-control form-control-sm" disabled value="01/10/2022">
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            
        </div>

        <div class="tab-pane fade" id="presentacion-tab-pane" role="tabpanel" aria-labelledby="presentacion-tab" tabindex="0">

        </div>

        <div class="tab-pane fade" id="ultimacompra-tab-pane" role="tabpanel" aria-labelledby="ultimacompra-tab" tabindex="0">

        </div>

    </div>

    <button type="submit" class="btn btn-primary mt-3"><span class="mx-1">Guardar</span><i class="bi bi-save"></i></button>

</form>
  
@endsection