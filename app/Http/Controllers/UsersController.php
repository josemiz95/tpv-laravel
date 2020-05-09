<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    function index(){
        // Lista de usuarios existentes
        $arrUsers = User::all();
        return view('users.list', [
            'arrUsers'=> $arrUsers
        ]);
    }

    function create(){
        // Carga la vista para crear el usuario nuevo
        return view('users.create');
    }

    function store( Request $request){
        // Guarda en base de datos el nuevo usuario

        // Primero se realiza la validacion de datos
        $validateData = $request->validate([
            'name'=>['required'],
            'mail'=>['required', 'email', 'unique:users,email'], // Validacion de correo electronico y que sea unico de base de datos
            'password'=>['required'],
            'role'=>['required']
        ]);

        // Si la validacion es correcta insertamos el nuevo usuario
        if($validateData){
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('mail'),
                'password' => Hash::make($request->input('password')),
                'rol' => $request->input('role')
            ]);
        }
        
        return redirect()->route('usersList');
    }
}
