<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Empresa\EmpresaStoreRequest;
use App\Http\Requests\Admin\Empresa\EmpresaUpdateRequest;
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

    public function index()
    {
        $empresas = $this->empresaService->listar();
        return view('admin.empresa.index', compact('empresas'));
    }

    public function create()
    {
        return view('admin.empresa.create');
    }

    public function store(EmpresaStoreRequest $request)
    {
        $empresa = $this->empresaService->crear($request->validated());
        response()->json($empresa);
        return redirect()->route('admin.empresa.index');
    }

    public function edit(Empresa $empresa)
    {
        return view('admin.empresa.edit', compact('empresa'));
    }

    public function update(Empresa $empresa, EmpresaUpdateRequest $request)
    {
        $this->empresaService->actualizar($empresa, $request->validated());
        response()->json($empresa);
        return redirect()->route('admin.empresa.index');
    }

    public function destroy(Empresa $empresa)
    {
        $this->empresaService->eliminar($empresa);
        return redirect()->route('admin.empresa.index');
    }
}
