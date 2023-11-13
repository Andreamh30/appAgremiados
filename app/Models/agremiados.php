<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class agremiados extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable=[
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
}
