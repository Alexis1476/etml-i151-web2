<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Controller pour l'utilisateur
 */

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 */
class UserController extends Controller
{
    /**
     * Logout l'utilisateur
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function userLogout()
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * Validation de la connexion d'un utilisateur
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /**
     * Validation des données d'ajout d'un utilisateur + ajoute l'utilisateur dans la base de données
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /**
     * Affiche les informations d'un utilisateur
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function userDetails()
    {
        $user = UserModel::where('idUser', request('idUser'))->first();
        $books = BookModel::where('idUser', request('idUser'))->get();

        // Condition pour l'affichage de son rôle
        if($user->useAdmin == 1){
            $user->useAdmin = 'Admin';
        }
        else{
            $user->useAdmin = 'Member';
        }

        return view('creatorDetails', ['user'=>$user, 'books'=>$books]);
    }
}
