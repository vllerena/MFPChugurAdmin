<?php

namespace App\Repository;

use App\Models\Empresa;

interface EmpresaRepository
{
    public function listar();

    public function crear(array $datos);

    public function actualizar(Empresa $empresa, array $datos);

    public function eliminar(Empresa $empresa);
}
