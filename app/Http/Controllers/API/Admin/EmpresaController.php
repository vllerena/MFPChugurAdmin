<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function listar()
    {
        $empresas = Empresa::all();
        return response()->json($empresas);
    }
}
