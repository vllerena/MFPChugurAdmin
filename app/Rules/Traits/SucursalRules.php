<?php

namespace App\Rules\Traits;

trait SucursalRules
{
    public function nombreRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:100'];
    }

    public function urlRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:150'];
    }

    public function direccionRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:150'];
    }

    public function telefonoRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:50'];
    }

    public function emailRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:150'];
    }

    public function empresasRules($required = true)
    {
        $required = $required ? 'required' : "nullable";
        return [$required, 'string', 'max:150'];
    }
}
