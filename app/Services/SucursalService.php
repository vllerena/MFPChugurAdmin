<?php


namespace App\Services;


use App\Models\Empresa;
use App\Models\Sucursal;
use App\Repository\SucursalRepository;
use App\TableInfo\SucursalTableInfo;
use Illuminate\Support\Arr;

class SucursalService implements SucursalRepository
{
    public function listar()
    {
        return Sucursal::all();
    }

    public function listarPorEmpresa(Empresa $empresa)
    {
        return Sucursal::where(SucursalTableInfo::EMPRESA, $empresa->id)->get();
    }

    public function crear(array $datos)
    {
        return Sucursal::create($datos);
    }

    public function actualizar(Sucursal $sucursal, array $datos)
    {
        $datos[SucursalTableInfo::ID] = Arr::get($datos, SucursalTableInfo::ID, $sucursal[SucursalTableInfo::ID]);
        $sucursal->update($datos);
        return $sucursal;
    }

    public function eliminar(Sucursal $sucursal)
    {
        $sucursal->delete();
        return $sucursal;
    }
}
