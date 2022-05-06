<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
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
        ],[
            'user.required' => 'Username is required'
        ]);

        UserModel::create([
            'useNickname' => request('user'),
            'usePassword' => bcrypt(request('password')),
            'useAdmin' => '1' //TODO: Gérer droits
        ]);
    }

    public function userDetails(){
        $user = UserModel::where('idUser', request('idUser'))->first();
        $books = BookModel::where('idUser', request('idUser'))->get();

        if($user->useAdmin == 1){
            $user->useAdmin = 'Admin';
        }
        else{
            $user->useAdmin = 'Member';
        }

        return view('creatorDetails', ['user'=>$user, 'books'=>$books]);
    }
}
