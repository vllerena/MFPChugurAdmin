<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Sucursal;
use App\TableInfo\EmpresaTableInfo;
use App\TableInfo\SucursalTableInfo;
use App\Utils\ReporteChugur;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function general(Empresa $empresa, $dateinicio, $datefin)
    {
        $datos = [
          'dateinicio' => $dateinicio,
          'datefin' => $datefin,
        ];
        $reporter = new ReporteChugur($datos);
        $datosreporter = $reporter->hacerReporte($empresa);
        return response()->json($datosreporter);
    }

    public function ventas(Request $request)
    {
        ini_set('max_execution_time', 300);
        $datos = [
            'dateinicio' => $request->dateinicio,
            'datefin' => $request->datefin,
        ];
        $empresa = Empresa::where(EmpresaTableInfo::ID, $request->empresa)->first();
        $sucursal = Sucursal::where(SucursalTableInfo::ID, $request->sucursal)->first();
        $reporter = new ReporteChugur($datos);
        $datosreporter = $reporter->reporteVentas($empresa, $sucursal);
        return response()->json($datosreporter);
    }
}
