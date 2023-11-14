<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agremiados;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AgremiadosController extends Controller
{
    
    public function newAgremiado(Request $req){
        
        $agremiado= agremiados:: create([
        'a_paterno'=>$req->a_paterno,
        'a_materno'=>$req->a_materno,
        'nombre'=>$req->nombre,
        'sexo'=>$req->sexo,
        'NUP'=>$req->NUP,
        'NUE'=>$req->NUE,
        'RFC'=>$req->RFC,
        'NSS'=>$req->NSS,
        'fecha_nacimiento'=>$req->fecha_nacimiento,
        'telefono'=>$req->telefono,
        'cuota'=>$req->cuota,
        ])->assignRole('agremiado');
        return response($agremiado,200);
        
    }
    public function getAgremiados(){
        return response()-> json(agremiados::all(),200);
    }

}
