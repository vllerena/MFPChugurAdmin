<?php

namespace App\Http\Requests\Admin\Empresa;

use App\Rules\Traits\EmpresaRules;
use App\TableInfo\EmpresaTableInfo;
use Illuminate\Foundation\Http\FormRequest;

class EmpresaUpdateRequest extends FormRequest
{
    use EmpresaRules;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            EmpresaTableInfo::RUC => 'required',
            EmpresaTableInfo::RAZON_SOCIAL => $this->razonSocialRules(),
            EmpresaTableInfo::DOMICILIO_FISCAL => $this->domicilioRules(),
            EmpresaTableInfo::LOGO_PATH => $this->logoRules(),
            EmpresaTableInfo::USERNAME => $this->usernameRules(),
            EmpresaTableInfo::PASSWORD => $this->passwordRules(),
        ];
    }
}
