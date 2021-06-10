<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sucursal\SucursalStoreRequest;
use App\Http\Requests\Admin\Sucursal\SucursalUpdateRequest;
use App\Models\Empresa;
use App\Models\Sucursal;
use App\Repository\SucursalRepository;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    private SucursalRepository $sucursalService;

    public function __construct(SucursalRepository $sucursalService)
    {
        $this->sucursalService = $sucursalService;
    }
    public function index()
    {
        $sucursales = $this->sucursalService->listar();
        return view('admin.sucursal.index', compact('sucursales'));
    }

    public function create()
    {
        $empresas = Empresa::all();
        return view('admin.sucursal.create', compact('empresas'));
    }

    public function store(SucursalStoreRequest $request)
    {
        $sucursal = $this->sucursalService->crear($request->validated());
        response()->json($sucursal);
        return redirect()->route('admin.sucursal.index');
    }

    public function edit(Sucursal $sucursal)
    {
        $empresas = Empresa::all();
        return view('admin.sucursal.edit', compact('empresas', 'sucursal'));
    }

    public function update(Sucursal $sucursal, SucursalUpdateRequest $request)
    {
        $this->sucursalService->actualizar($sucursal, $request->validated());
        response()->json($sucursal);
        return redirect()->route('admin.sucursal.index');
    }

    public function destroy(Sucursal $sucursal)
    {
        $this->sucursalService->eliminar($sucursal);
        return redirect()->route('admin.sucursal.index');
    }
}
