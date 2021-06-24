<?php


namespace App\Utils;


use App\Models\Empresa;
use App\Models\Sucursal;

interface ReporteEmpresa
{
    public function hacerReporte(Empresa $empresa) : array;
    public function reporteVentas(Empresa $empresa, Sucursal $sucursal);
}
