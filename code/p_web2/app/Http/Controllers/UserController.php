<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userLogout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function userConnect()
    {
        request()->validate([
            'userLogin' => ['required'],
            'passwordLogin' => ['required']
        ]);

        // Authentification
        $result = auth()->attempt([
            'useNickname' => \request('userLogin'),
            'password' => \request('passwordLogin') // password -> convention laravel
        ]);

        // redirection
        if ($result) {
            return redirect('/');
        }

        // Retourne page précedente avec les données écris dans le formulaire + erreurs
        return back()->withInput()->withErrors([
            'userLogin' => 'Your credentials are incorrect'
        ]);
    }

    //
    public function userAdd()
    {
        request()->validate([
            'user' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required']
        ], [
            'user.required' => 'Username is required'
        ]);

        UserModel::create([
            'useNickname' => request('user'),
            'usePassword' => bcrypt(request('password')),
            'useAdmin' => '1' //TODO: Gérer droits
        ]);

        return redirect('/');
    }

    public function userDetails()
    {
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
