<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function userAdd(){
        request()->validate([
            'user' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required']
        ]);

        UserModel::create([
            'useNickname' => request('user'),
            'usePassword' => bcrypt(request('password')),
            'useAdmin' => '1' //TODO: Gérer droits
        ]);
    }

}
