<?php


namespace App\Rules\Traits;


use App\Models\Empresa;
use App\TableInfo\EmpresaTableInfo;
use Illuminate\Validation\Rule;

trait EmpresaRules
{
    public function rucRules($required = true, Empresa $empresa = null)
    {
        $ruleUnique = Rule::unique(EmpresaTableInfo::TABLE_NAME, EmpresaTableInfo::RUC);
        $unique = $empresa ? $ruleUnique->ignore($empresa[EmpresaTableInfo::ID]) : $ruleUnique;
        $required = $required ? 'required' : 'nullable';
        return [$required, $unique, "regex:/^[0-9]{11}$/"];
    }

    public function razonSocialRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:100'];
    }

    public function domicilioRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:150'];
    }

    public function logoRules($required = false)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'image', 'max:4096'];
    }

    public function usernameRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:80'];
    }

    public function passwordRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:60'];
    }
}
