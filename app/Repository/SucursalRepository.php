<?php

namespace App\Repository;

use App\Models\Sucursal;

interface SucursalRepository
{
    public function listar();

    public function crear(array $datos);

    public function actualizar(Sucursal $sucursal, array $datos);

    public function eliminar(Sucursal $sucursal);
}
