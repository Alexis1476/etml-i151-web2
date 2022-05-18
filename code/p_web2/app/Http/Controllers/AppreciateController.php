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
 *
 */
class AppreciateController extends Controller
{

    /**
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addAppreciation()
    {
        $appreciationExist = AppreciateModel::where([['idUser', auth()->user()->idUser], ['idBook', request('idBook') ]])->first();

        if($appreciationExist) {
            AppreciateModel::where([
                ['idUser', auth()->user()->idUser],
                ['idBook', request('idBook') ]])->update(['appNote' => request('note')]);
        }
        else {
            AppreciateModel::create([
                'idUser' => auth()->user()->idUser,
                'idBook' => request('idBook'),
                'appNote' => request('note')
            ]);
        }

        UserModel::where('idUser', auth()->user()->idUser)->increment('useNbAppreciation');

        $book = new BookController();
        $book->calculAverage();

        return redirect('/bookDetails'.request('idBook'));
    }
}
