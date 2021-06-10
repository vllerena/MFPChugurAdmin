<?php

namespace App\Http\Requests\Admin\Sucursal;

use App\Rules\Traits\SucursalRules;
use App\TableInfo\SucursalTableInfo;
use Illuminate\Foundation\Http\FormRequest;

class SucursalStoreRequest extends FormRequest
{
    use SucursalRules;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            SucursalTableInfo::NOMBRE => $this->nombreRules(),
            SucursalTableInfo::URL => $this->urlRules(),
            SucursalTableInfo::DIRECCION => $this->direccionRules(),
            SucursalTableInfo::TELEFONO => $this->telefonoRules(),
            SucursalTableInfo::EMAIL => $this->emailRules(),
            SucursalTableInfo::EMPRESA => $this->empresasRules(),
        ];
    }
}
