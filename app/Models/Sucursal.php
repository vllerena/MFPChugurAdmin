<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\TableInfo\SucursalTableInfo;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = SucursalTableInfo::TABLE_NAME;

    public $timestamps = false;

    protected $fillable = [
        SucursalTableInfo::NOMBRE,
        SucursalTableInfo::URL,
        SucursalTableInfo::DIRECCION,
        SucursalTableInfo::TELEFONO,
        SucursalTableInfo::EMAIL,
        SucursalTableInfo::EMPRESA,
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, SucursalTableInfo::EMPRESA);
    }
}
