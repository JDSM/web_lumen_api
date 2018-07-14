<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    function index () {
       /*$user = new User();
        $user -> name = 'Daniel';
        $user -> email = 'jdserrano@gmail.com';
        return response()->json([$user], 200);*/
        // Bloque para rejar una respuets tipo json un usuario ejemplo
        //conexion a la BD con Eloquent
        $users = User::all();
        return response()->json($users, 200);
    }
}