<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Repository\EmpresaRepository;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    private EmpresaRepository $empresaService;

    public function __construct(EmpresaRepository $empresaService)
    {
        $this->empresaService = $empresaService;
    }

    public function listar()
    {
        $empresas = $this->empresaService->listar();
        return response()->json($empresas);
    }
}
