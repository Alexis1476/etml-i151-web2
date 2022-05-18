<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Controller pour les appréciations
 */

namespace App\Http\Controllers;

use App\Models\AppreciateModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

/**
 * Class AppreciateController
 */
class AppreciateController extends Controller
{

    /**
     * Ajoute une appréciations à un livre
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addAppreciation()
    {
        // Check si l'appréciation existe déjà
        $appreciationExist = AppreciateModel::where([['idUser', auth()->user()->idUser], ['idBook', request('idBook') ]])->first();

        // Si elle existe, on met à jour l'appréciation de l'utilisateur
        if($appreciationExist) {
            AppreciateModel::where([
                ['idUser', auth()->user()->idUser],
                ['idBook', request('idBook') ]])->update(['appNote' => request('note')]);
        }
        // Sinon on créer l'appréciation
        else {
            AppreciateModel::create([
                'idUser' => auth()->user()->idUser,
                'idBook' => request('idBook'),
                'appNote' => request('note')
            ]);
        }

        // Incrémentation du nombre d'appréciations d'un utilisateur
        UserModel::where('idUser', auth()->user()->idUser)->increment('useNbAppreciation');

        // Mise à jour de la moyene d'un livre
        $book = new BookController();
        $book->calculAverage();

        return redirect('/bookDetails'.request('idBook'));
    }
}
