<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function general()
    {
        $empresas = Empresa::all();
        return view('admin.reporte.general', compact('empresas'));
    }

    public function ventas()
    {
        $empresas = Empresa::all();
        return view('admin.reporte.venta', compact('empresas'));
    }
}
