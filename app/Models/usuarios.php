<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class usuarios extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
    use HasRoles;
    protected $table = 'usuarios';

    protected $fillable=[
        'NUE',
        'password',
        'a_paterno',
        'a_materno',
        'nombre',
        'sexo',
        'NUP',
        'NUE',
        'RFC',
        'NSS',
        'fecha_nacimiento',
        'telefono',
        'cuota',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
