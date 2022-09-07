<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos_catalogo', function (Blueprint $table) {
            $table->id();
            $table->boolean('catalogo_empresas');
            $table->boolean('crear_empresa');
            $table->boolean('editar_empresa');
            $table->boolean('eliminar_empresa');
            $table->boolean('productos');
            $table->boolean('existencias');
            $table->boolean('costos');
            $table->boolean('catalogo_productos');
            $table->boolean('crear_productos');
            $table->boolean('editar_productos');
            $table->boolean('eliminar_productos');
            $table->boolean('proveedores');
            $table->boolean('costo_promedio');
            $table->boolean('producto_inactivo');
            $table->boolean('activar_producto');
            $table->boolean('lineas');
            $table->boolean('crear_lineas');
            $table->boolean('editar_lineas');
            $table->boolean('eliminar_lineas');
            $table->boolean('unidades_medida');
            $table->boolean('marcas');
            $table->boolean('clientes');
            $table->boolean('catalogo_clientes');
            $table->boolean('crear_clientes');
            $table->boolean('editar_clientes');
            $table->boolean('eliminar_clientes');
            $table->boolean('det_num_precio');
            $table->boolean('saldos_clientes');
            $table->boolean('alta_baja_clientes');
            $table->boolean('limite_credito_clientes');
            $table->boolean('clasificacion_clientes');
            $table->boolean('crear_clasificacion');
            $table->boolean('editar_clasificacion');
            $table->boolean('eliminar_clasificacion');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->boolean('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesos_catalogo');
    }
};
