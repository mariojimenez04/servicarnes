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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->boolean('movimientos_compra');
            $table->boolean('modificar_fechas_compras');
            $table->boolean('compras');
            $table->boolean('crear_compras');
            $table->boolean('recuperar_compras');
            $table->boolean('consultar_compras');
            $table->boolean('cancelar_compras');
            $table->boolean('borrar_compras');
            $table->boolean('lista_compras_cancelar');
            $table->boolean('aceptar_rechazar_cancelaciones');
            $table->boolean('movimientos_vtas');
            $table->boolean('modificar_precios_compra');
            $table->boolean('elegir_precio');
            $table->boolean('modificar_fecha_vtas');
            $table->boolean('imprimir_vtas_canceladas');
            $table->boolean('modificar_folio_vtas');
            $table->boolean('ver_vtas');
            $table->boolean('ver_cxc');
            $table->boolean('cambiar_vendedor');
            $table->boolean('modif_porc_comision');
            $table->boolean('modif_vendedor');
            $table->boolean('vender_credito_cxc_vencidas');
            $table->boolean('registrar_productos_solicitados');
            $table->boolean('remisiones');
            $table->boolean('crear_remision');
            $table->boolean('recuperacion_remision');
            $table->boolean('consulta_remision');
            $table->boolean('cancelar_remision');
            $table->boolean('eliminar_remision');
            $table->boolean('facturar_remision');
            $table->boolean('apartados_mercancia');
            $table->boolean('crear_apartados');
            $table->boolean('consulta_apartados');
            $table->boolean('eliminar_apartados');
            $table->boolean('cargos_pagos');
            $table->boolean('cargos');
            $table->boolean('cargos_clientes');
            $table->boolean('borrar_cargos');
            $table->boolean('cargos_proveedores');
            $table->boolean('borrar_cargos_proveedores');
            $table->boolean('pagos');
            $table->boolean('pagos_clientes');
            $table->boolean('modif_pagos_clientes');
            $table->boolean('borrar_pagos');
            $table->boolean('traslado_pagos');
            $table->boolean('pagos_proveedores');
            $table->boolean('modif_pagos_proveedores');
            $table->boolean('borrar_pagos_proveedores');
            $table->boolean('traslado_pagos_proveedores');
            $table->boolean('notas_cargo_clientes');
            $table->boolean('notas_cargo_proveedores');
            $table->boolean('notas_credito');
            $table->boolean('lista_pendientes');
            $table->boolean('crear_notas_credito');
            $table->boolean('modif_fecha_notas_credito');
            $table->boolean('consultar_notas_credito');
            $table->boolean('cancelacion_notas_credito');
            $table->boolean('traslado_notas_credito');
            $table->boolean('control_devoluciones');
            $table->boolean('devolucion_clientes');
            $table->boolean('crear_devolucion');
            $table->boolean('crear_sin_especificar_ctes');
            $table->boolean('modif_fecha_dev_ctes');
            $table->boolean('consultar_devolucion_ctes');
            $table->boolean('canc_dev_ctes');
            $table->boolean('elim_dev_ctes');
            $table->boolean('devolucion_proveedores');
            $table->boolean('crear_dev_prov');
            $table->boolean('crear_sin_especificar_prov');
            $table->boolean('modif_fecha_dev_prov');
            $table->boolean('consultar_devolucion_prov');
            $table->boolean('canc_dev_prov');
            $table->boolean('elim_dev_prov');
            $table->boolean('gastos');
            $table->boolean('crear_gastos');
            $table->boolean('modif_fecha_gastos');
            $table->boolean('consulta_gastos');
            $table->boolean('traspasos_almacenes');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('movimientos');
    }
};
