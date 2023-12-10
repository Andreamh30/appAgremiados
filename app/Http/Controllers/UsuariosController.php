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
        
        $usuario= usuarios:: create($req->only([
            'NUE',
            'password'
        ]))->assignRole('user');
        return response($usuario,200);
        
    }
}
