<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function userDetails(){
        $user = UserModel::where('idUser', request('idUser'))->first();

        if($user->useAdmin == 1){
            $user->useAdmin = 'Yes';
        }
        else{
            $user->useAdmin = 'No';
        }

        return view('creatorDetails', ['user'=>$user]);
    }
}
