<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\agremiados;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AgremiadosController extends Controller
{
    
    public function newAgremiado(Request $req){
        $agremiado = new usuarios;

        // Establecer la tabla para esta operación
        $agremiado->setTable('agremiados');

        $agremiado->fill($req->only([
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
        ]))->save();

        // Asignar el rol
        $agremiado->assignRole('agremiado');

        return response($agremiado, 200);
    }


    public function getAgremiados(){
        return response()-> json(agremiados::all(),200);
    }

}
