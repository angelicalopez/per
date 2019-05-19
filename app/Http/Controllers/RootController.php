<?php

namespace App\Http\Controllers;
use App\User;
use App\Administrador;

use Illuminate\Http\Request;

class RootController extends Controller
{
    // Retorna la lista de usuarios administradores
    public function administradores()
    {
        $users = User::all();
        return view('superuser.admin_list')->with('users', $users);
    }

    // Retorna vista con formulario para crear administradores
    public function crearadmin() 
    {
        return view('superuser.admin_create');
    }
}
