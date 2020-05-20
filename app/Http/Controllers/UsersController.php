<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
                '' => $request->input('role')
            ]);
        }
        
        return redirect()->route('usersList');
    }

    function edit($id){
        // Carga vista de editar
        $user = User::find($id);

        return view('users.edit',[
            'user' => $user
        ]);
    }

    function update(Request $request){
        // Modifica los datos del usuario
        $user = User::find($request->input('id'));

        $validateData = $request->validate([
            'id' => ['required'],
            'name'=>['required'],
            'mail'=>['required', 'email', Rule::unique('users', 'email')->ignore($user->id)], // Validacion de correo electronico y que sea unico de base de datos (Omitiendose a el mismo)
            'role'=>['required']
        ]);

        if($validateData){
            $user->name = $request->input('name');
            $user->email = $request->input('mail');
            $user->password = ($request->input('password') != '' && $request->input('password') != null)?Hash::make($request->input('password')): $user->password;
            $user->rol = $request->input('role');

            $user->save();
        }

        return redirect()->route('usersList');

    }
}
