<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Repository\EmpresaRepository;

class DashboardController extends Controller
{
    private EmpresaRepository $empresaService;

    public function __construct(EmpresaRepository $empresaService)
    {
        $this->empresaService = $empresaService;
    }

    public function index(Request $request)
    {
        $empresas = $this->empresaService->listar();
        return view('admin.dashboard.index', compact('empresas'));
    }
}
