<?php

namespace App\Models;

use App\TableInfo\UserTableInfo;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    public $timestamps = false;

    protected $fillable = [
        UserTableInfo::USERNAME,
        UserTableInfo::PASSWORD,
    ];

    protected $hidden = [
        UserTableInfo::PASSWORD,
        UserTableInfo::REMEMBER_TOKEN,
    ];
}
