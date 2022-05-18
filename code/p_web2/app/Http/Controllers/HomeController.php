<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Controller pour la page d'accueil
 */


namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

/**
 * Class HomeController
 */
class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil avec les 5 dernier livre ajoutés
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        $books = BookModel::orderby('idBook', 'desc')->take(5)->get();
        return view('home', ['books' => $books]);
    }
}
