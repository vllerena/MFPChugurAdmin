<?php

namespace App\Models;

use App\TableInfo\EmpresaTableInfo;
use App\TableInfo\SucursalTableInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = EmpresaTableInfo::TABLE_NAME;

    public $timestamps = false;

    protected $fillable = [
        EmpresaTableInfo::RUC,
        EmpresaTableInfo::RAZON_SOCIAL,
        EmpresaTableInfo::DOMICILIO_FISCAL,
        EmpresaTableInfo::LOGO_PATH,
        EmpresaTableInfo::USERNAME,
        EmpresaTableInfo::PASSWORD,
    ];

    public function sucursales()
    {
        return $this->hasMany(Sucursal::class, SucursalTableInfo::EMPRESA,
            EmpresaTableInfo::ID);
    }
}
