<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceso_catalogo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'catalogo_empresas',
            'crear_empresa',
            'editar_empresa',
            'eliminar_empresa',
            'productos',
            'existencias',
            'costos',
            'catalogo_productos',
            'crear_productos',
            'editar_productos',
            'eliminar_productos',
            'costo_promedio',
            'producto_inactivo',
            'activar_producto',
            'lineas',
            'crear_lineas',
            'editar_lineas',
            'eliminar_lineas',
            'unidades_medida',
            'marcas',
            'clientes',
            'catalogo_clientes',
            'crear_clientes',
            'editar_clientes',
            'eliminar_clientes',
            'det_num_precio',
            'saldos_clientes',
            'alta_baja_clientes',
            'limite_credito_clientes',
            'clasificacion_clientes',
            'crear_clasificacion',
            'editar_clasificacion',
            'eliminar_clasificacion',
            'proveedores',
            'catalogo_proveedores',
            'crear_proveedores',
            'editar_proveedores',
            'eliminar_proveedores',
            'saldos_proveedores',
            'limite_credito_proveedores',
            'vendedores',
            'crear_vendedores',
            'editar_vendedores',
            'eliminar_vendedores',
            'usuarios',
            'catalogo_usuarios',
            'crear_usuarios',
            'editar_usuarios',
            'eliminar_usuarios',
            'definir_acceso',
            'catalogo_grupos',
            'catalogo_almacenes',
            'crear_almacen',
            'editar_almacen',
            'eliminar_almacen',
            'user_id'
    ];
}
