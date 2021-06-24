<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Repository\SucursalRepository;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    private SucursalRepository $sucursalService;

    public function __construct(SucursalRepository $sucursalService)
    {
        $this->sucursalService = $sucursalService;
    }
    public function listar()
    {
        $sucursales = $this->sucursalService->listar();
        return response()->json($sucursales);
    }
    public function listarPorEmpresa(Empresa $empresa)
    {
        $sucursalesporempresa = $this->sucursalService->listarPorEmpresa($empresa);
        return response()->json($sucursalesporempresa);
    }
}
