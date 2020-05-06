<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    function index(){
        $arrUsers = User::all();
        return view('users.list', [
            'arrUsers'=> $arrUsers
        ]);
    }
}
