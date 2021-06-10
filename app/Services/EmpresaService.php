<?php


namespace App\Services;

use App\Models\Empresa;
use App\Repository\ArchivoRepository;
use App\Repository\EmpresaRepository;
use App\TableInfo\EmpresaTableInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EmpresaService implements EmpresaRepository
{
    private $archivoService;

    public function __construct(ArchivoRepository $archivoService)
    {
        $this->archivoService = $archivoService;
    }

    public function listar()
    {
        return Empresa::all();
    }

    public function crear(array $datos)
    {
        $this->storeLogo($datos);
        return Empresa::create($datos);
    }

    public function actualizar(Empresa $empresa, array $datos)
    {
        $datos[EmpresaTableInfo::RUC] = Arr::get($datos, EmpresaTableInfo::RUC, $empresa[EmpresaTableInfo::RUC]);

        if (Arr::has($datos, EmpresaTableInfo::LOGO_PATH))
            $this->storeLogo($datos);

        $empresa->update($datos);
        return $empresa;
    }

    public function eliminar(Empresa $empresa)
    {
        $empresa->delete();
        return $empresa;
    }

    public function storeLogo(array &$datos)
    {
        $ruta = $datos['logo_path']->store('upload-logo', 'public');
        $datos[EmpresaTableInfo::LOGO_PATH] = $ruta;
    }
}
