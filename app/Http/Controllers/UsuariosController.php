<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsuariosController extends Controller
{
    //
    public function newUsuario(Request $req){
        
        $usuario= usuarios:: create([
            'NUE'=>$req->NUE,
            'password'=>$req->password
        ])->assignRole('user');
        return response($usuario,200);
        
    }
}
