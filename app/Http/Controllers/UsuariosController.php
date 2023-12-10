<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class UsuariosController extends Controller
{
    public function loginUsuario(Request $request)
    {
        $credentials = $request->only('NUE', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::User();
            return response()->json($user, 200);
        } else {
            return response()->json(['message' => 'Credencial incorrecta'], 401);
        }
    }

    public function getUsuarios()
    {
        $usuario = User::all();
        return response()->json($usuario, 200);
        // $usuarios = agremiados::where('id_rol', 2)->get();
        // return response()->json($usuarios, 200);
    }


   /*  public function newUsuario(Request $req){
        
        $usuario= usuarios:: create($req->only([
            'NUE',
            'password'=>bcrypt($req->password)
        ]))->assignRole('user');
        return response($usuario,200);
    } */
    public function newUsuario(Request $req){
        $usuario = usuarios::create([
            'NUE' => $req->NUE,
            'password' => bcrypt($req->password),
        ])->assignRole('user');
    
        return response($usuario, 200);
    }

    public function starlogin(Request $request)
    {
        $credentials = $request->only('NUE', 'password');

        if (Auth::attempt($credentials)) {
            $usuario = Auth::usuario();
            return response()->json($usuario, 200);
        } else {
            return response()->json(['message' => 'credencial incorrecta'], 401);
        }
    }
}
