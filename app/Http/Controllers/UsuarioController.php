<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reporte;
use App\Models\Movimiento;
use Illuminate\Http\Request;
use App\Models\Acceso_catalogo;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(auth());
        return view('usuarios.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
            'user' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user' => $request->usuario,
            'admin' => 0,
            'supervisor' => 0,
            'usuario' => 0,
        ]);

        Acceso_catalogo::create([
            'catalogo_empresas' => 0,
            'crear_empresa' => 0,
            'editar_empresa' => 0,
            'eliminar_empresa' => 0,
            'productos' => 0,
            'existencias' => 0,
            'costos' => 0,
            'catalogo_productos' => 0,
            'crear_productos' => 0,
            'editar_productos' => 0,
            'eliminar_productos' => 0,
            'costo_promedio' => 0,
            'producto_inactivo' => 0,
            'activar_producto' => 0,
            'lineas' => 0,
            'crear_lineas' => 0,
            'editar_lineas' => 0,
            'eliminar_lineas' => 0,
            'unidades_medida' => 0,
            'marcas' => 0,
            'clientes' => 0,
            'catalogo_clientes' => 0,
            'crear_clientes' => 0,
            'editar_clientes' => 0,
            'eliminar_clientes' => 0,
            'det_num_precio' => 0,
            'saldos_clientes' => 0,
            'alta_baja_clientes' => 0,
            'limite_credito_clientes' => 0,
            'clasificacion_clientes' => 0,
            'crear_clasificacion' => 0,
            'editar_clasificacion' => 0,
            'eliminar_clasificacion' => 0,
            'proveedores' => 0,
            'catalogo_proveedores' => 0,
            'crear_proveedores' => 0,
            'editar_proveedores' => 0,
            'eliminar_proveedores' => 0,
            'saldos_proveedores' => 0,
            'limite_credito_proveedores' => 0,
            'vendedores' => 0,
            'crear_vendedores' => 0,
            'editar_vendedores' => 0,
            'eliminar_vendedores' => 0,
            'usuarios' => 0,
            'catalogo_usuarios' => 0,
            'crear_usuarios' => 0,
            'editar_usuarios' => 0,
            'eliminar_usuarios' => 0,
            'definir_acceso' => 0,
            'catalogo_grupos' => 0,
            'catalogo_almacenes' => 0,
            'crear_almacen' => 0,
            'editar_almacen' => 0,
            'eliminar_almacen' => 0,
        ]);

        Movimiento::create([
            'movimientos_compra' => 0,
            'modificar_fechas_compras' => 0,
            'compras' => 0,
            'crear_compras' => 0,
            'recuperar_compras' => 0,
            'consultar_compras' => 0,
            'cancelar_compras' => 0,
            'borrar_compras' => 0,
            'lista_compras_cancelar' => 0,
            'aceptar_rechazar_cancelaciones' => 0,
            'movimientos_vtas' => 0,
            'modificar_precios_compra' => 0,
            'elegir_precio' => 0,
            'modificar_fecha_vtas' => 0,
            'imprimir_vtas_canceladas' => 0,
            'modificar_folio_vtas' => 0,
            'ver_vtas' => 0,
            'ver_cxc' => 0,
            'cambiar_vendedor' => 0,
            'modif_porc_comision' => 0,
            'modif_vendedor' => 0,
            'vender_credito_cxc_vencidas' => 0,
            'registrar_productos_solicitados' => 0,
            'remisiones' => 0,
            'crear_remision' => 0,
            'recuperacion_remision' => 0,
            'consulta_remision' => 0,
            'cancelar_remision' => 0,
            'eliminar_remision' => 0,
            'facturar_remision' => 0,
            'apartados_mercancia' => 0,
            'crear_apartados' => 0,
            'consulta_apartados' => 0,
            'eliminar_apartados' => 0,
            'cargos_pagos' => 0,
            'cargos' => 0,
            'cargos_clientes' => 0,
            'borrar_cargos' => 0,
            'cargos_proveedores' => 0,
            'borrar_cargos_proveedores' => 0,
            'pagos' => 0,
            'pagos_clientes' => 0,
            'modif_pagos_clientes' => 0,
            'borrar_pagos' => 0,
            'traslado_pagos' => 0,
            'pagos_proveedores' => 0,
            'modif_pagos_proveedores' => 0,
            'borrar_pagos_proveedores' => 0,
            'traslado_pagos_proveedores' => 0,
            'notas_cargo_clientes' => 0,
            'notas_cargo_proveedores' => 0,
            'notas_credito' => 0,
            'lista_pendientes' => 0,
            'crear_notas_credito' => 0,
            'modif_fecha_notas_credito' => 0,
            'consultar_notas_credito' => 0,
            'cancelacion_notas_credito' => 0,
            'traslado_notas_credito' => 0,
            'control_devoluciones' => 0,
            'devolucion_clientes' => 0,
            'crear_devolucion' => 0,
            'crear_sin_especificar_ctes' => 0,
            'modif_fecha_dev_ctes' => 0,
            'consultar_devolucion_ctes' => 0,
            'canc_dev_ctes' => 0,
            'elim_dev_ctes' => 0,
            'devolucion_proveedores' => 0,
            'crear_dev_prov' => 0,
            'crear_sin_especificar_prov' => 0,
            'modif_fecha_dev_prov' => 0,
            'consultar_devolucion_prov' => 0,
            'canc_dev_prov' => 0,
            'elim_dev_prov' => 0,
            'gastos' => 0,
            'crear_gastos' => 0,
            'modif_fecha_gastos' => 0,
            'consulta_gastos' => 0,
            'traspasos_almacenes' => 0,
        ]);

        Reporte::create([
            'administrativos' => 0,
            'reporte_por_compras' => 0,
            'reporte_de_compras' => 0,
            'reporte_ventas' => 0,
            'reporte_remisiones' => 0,
            'reporte_facturas' => 0,
            'reporte_apartados' => 0,
            'reporte_utilidad' => 0,
            'comisiones_vendedor' => 0,
            'integrados_rem_fact' => 0,
            'reporte_especial_vtas' => 0,
            'utilidad_por_vendedor' => 0,
            'vtas_canc' => 0,
            'reporte_grafico' => 0,
            'reporte_cobranza_ctes' => 0,
            'cargos_clientes' => 0,
            'pagos_clientes' => 0,
            'estado_ctas_ctes' => 0,
            'antiguedad_saldo_ctes' => 0,
            'cxc' => 0,
            'notas_credito' => 0,
            'saldos_fecha' => 0,
            'reporte_pagos_prov' => 0,
            'cargos_prov' => 0,
            'pagos_prov' => 0,
            'estado_ctas_prov' => 0,
            'antiguedad_saldo_prov' => 0,
            'cxp' => 0,
            'saldos_fecha_prov' => 0,
            'devoluciones' => 0,
            'dev_ctes' => 0,
            'dev_prov' => 0,
            'movimiento_productos' => 0,
            'ajuste_existencias' => 0,
            'rotacion_productos' => 0,
            'traspaso_almacenes' => 0,
            'cambios_precios' => 0,
            'gastos' => 0,
            'documentos_cancelados' => 0,
            'bitacora_usuarios' => 0,
            'resumenes' => 0,
            'total_dia_remisiones' => 0,
            'movimiento_clientes' => 0,
            'listado_catalogos' => 0,
            'catalogo_clientes' => 0,
            'imprimir_cat_ctes' => 0,
            'imprimir_lista_deudores' => 0,
            'catalogo_proveedores' => 0,
            'imprimir_cat_prov' => 0,
            'imprimir_lista_acreedores' => 0,
            'reporte_productos' => 0,
            'lista_precios' => 0,
            'reporte_existencias' => 0,
            'mercancia_surtir' => 0,
            'costeo_inventario' => 0,
            'existencia_anterior' => 0,
            'catalogo_vendedores' => 0,
            'reportes_estadisticos' => 0,
            'acum_vtas_ctes' => 0,
            'acum_compras_prov' => 0,
            'mov_prod' => 0,
            'kard_prod' => 0,
            'acum_utilidad' => 0,
            'rep_financiero' => 0,
            'rep_amarre_costo_promedio' => 0,
            'rep_prod_solicitados' => 0,
            'concentrados' => 0,
            'concentrado_existencias' => 0,
            'concentrado_vtas' => 0,
            'antig_saldos_ctes' => 0,
        ]);

        //Autenticar al usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
            // 'usuario' => $request->user
        ]);

        //Redireccionar
        return redirect()->route('users.config');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retornar la vista con el usuario
        return view('usuarios.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
