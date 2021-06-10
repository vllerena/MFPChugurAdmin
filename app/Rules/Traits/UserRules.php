<?php


namespace App\Rules\Traits;


use App\TableInfo\UserTableInfo;

trait UserRules
{
    public function usernameRules(): array
    {
        return ['required', 'string'];
    }

    public function passwordRules($required = true)
    {
        $required = $required ? 'required' : 'nullable';
        return [$required];
    }

    public function validatedMessages()
    {
        return [
            UserTableInfo::USERNAME . '.' . 'required' => 'El nombre de usuario es obligatorio.',
            UserTableInfo::PASSWORD . '.' . 'required' => 'La contraseña es obligatoria.',
        ];
    }
}
