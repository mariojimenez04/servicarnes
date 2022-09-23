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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->boolean('administrativos');
            $table->boolean('reporte_por_compras');
            $table->boolean('reporte_de_compras');
            $table->boolean('reporte_ventas');
            $table->boolean('reporte_remisiones');
            $table->boolean('reporte_facturas');
            $table->boolean('reporte_apartados');
            $table->boolean('reporte_utilidad');
            $table->boolean('comisiones_vendedor');
            $table->boolean('integrados_rem_fact');
            $table->boolean('reporte_especial_vtas');
            $table->boolean('utilidad_por_vendedor');
            $table->boolean('vtas_canc');
            $table->boolean('reporte_grafico');
            $table->boolean('reporte_cobranza_ctes');
            $table->boolean('cargos_clientes');
            $table->boolean('pagos_clientes');
            $table->boolean('estado_ctas_ctes');
            $table->boolean('antiguedad_saldo_ctes');
            $table->boolean('cxc');
            $table->boolean('notas_credito');
            $table->boolean('saldos_fecha');
            $table->boolean('reporte_pagos_prov');
            $table->boolean('cargos_prov');
            $table->boolean('pagos_prov');
            $table->boolean('estado_ctas_prov');
            $table->boolean('antiguedad_saldo_prov');
            $table->boolean('cxp');
            $table->boolean('saldos_fecha_prov');
            $table->boolean('devoluciones');
            $table->boolean('dev_ctes');
            $table->boolean('dev_prov');
            $table->boolean('movimiento_productos');
            $table->boolean('ajuste_existencias');
            $table->boolean('rotacion_productos');
            $table->boolean('traspaso_almacenes');
            $table->boolean('cambios_precios');
            $table->boolean('gastos');
            $table->boolean('documentos_cancelados');
            $table->boolean('bitacora_usuarios');
            $table->boolean('resumenes');
            $table->boolean('total_dia_remisiones');
            $table->boolean('movimiento_clientes');
            $table->boolean('listado_catalogos');
            $table->boolean('catalogo_clientes');
            $table->boolean('imprimir_cat_ctes');
            $table->boolean('imprimir_lista_deudores');
            $table->boolean('catalogo_proveedores');
            $table->boolean('imprimir_cat_prov');
            $table->boolean('imprimir_lista_acreedores');
            $table->boolean('reporte_productos');
            $table->boolean('lista_precios');
            $table->boolean('reporte_existencias');
            $table->boolean('mercancia_surtir');
            $table->boolean('costeo_inventario');
            $table->boolean('existencia_anterior');
            $table->boolean('catalogo_vendedores');
            $table->boolean('reportes_estadisticos');
            $table->boolean('acum_vtas_ctes');
            $table->boolean('acum_compras_prov');
            $table->boolean('mov_prod');
            $table->boolean('kard_prod');
            $table->boolean('acum_utilidad');
            $table->boolean('rep_financiero');
            $table->boolean('rep_amarre_costo_promedio');
            $table->boolean('rep_prod_solicitados');
            $table->boolean('concentrados');
            $table->boolean('concentrado_existencias');
            $table->boolean('concentrado_vtas');
            $table->boolean('antig_saldos_ctes');
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
        Schema::dropIfExists('reportes');
    }
};
