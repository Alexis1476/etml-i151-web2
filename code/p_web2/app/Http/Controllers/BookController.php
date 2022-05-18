<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Controller pour les livres
 */

namespace App\Http\Controllers;

use App\Models\AppreciateModel;
use App\Models\AuthorModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\BookModel;
use Illuminate\Validation\Rule;
use PHPUnit\Framework\Constraint\Count;

/**
 * Class BookController
 */
class BookController extends Controller
{

    /**
     * Liste tous les livres contenu dans la base de données par ordre décroissant
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list(){
        $books = BookModel::orderByDesc('idBook')->get();
        $categories = CategoryModel::select('idCategory as id', 'catName as name')->get();
        return view('bookList', ['books'=>$books, 'categories'=>$categories]);
    }

    /**
     * Recherche un livre dans la base de données grâce aux éléments reçu en paramètre
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function searchBooks(Request $request){
        $param = $request->input('booName');

        $books = BookModel::where('booTitle', 'like', "%$param%")->get();

        return view('bookList', ['books'=>$books]);
    }

    /**
     * Affiche les détails d'un livre sélectionné par un utilisateur
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function bookDetails(){
        $book = BookModel::where('idBook', request('idBook'))->first();

        return view('bookDetails', ['book'=>$book]);
    }

    /**
     * Calcule la moyenne des appréciations d'un livre modifie sa valeur
     * @return void
     */
    public function calculAverage()
    {
        $average = AppreciateModel::where('idBook', request('idBook'))->avg('appNote');

        BookModel::where('idBook', request('idBook'))->update(['booNoteAverage' => round($average, 1)]);
    }

    /**
     * Affiche la page d'ajout d'un livre avec les éditeurs, les catégories et les auteurs dans des listes déroulantes
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function bookadd(){
        $categories = CategoryModel::select('idCategory as id', 'catName as name')->get();
        $authors = AuthorModel::select('idAuthor as id', AuthorModel::raw('CONCAT(autFirstName," ",autLastName) as name'))->get();
        $editors = EditorModel::select('idEditor as id', 'ediName as name')->get();

        return view('bookAdd', ['categories'=>$categories,'authors'=>$authors,'editors'=>$editors]);
    }

    /**
     * Valide les informations pour l'ajout d'un livre et l'ajoute dans la base de données
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function bookCheckAdd()
    {
        //dd(request());
        request()->validate([
            'title' => ['required','regex:/[\w\s\'"&;:?!().-]|[a-zA-Z]+$/u','max:255','min:2'],
            'numberPages' => ['required','numeric','min:10'],
            'categories' => ['required'],
            'authors' => ['required'],
            'editors' => ['required'],
            'publishingDate' => ['required'],
            'bookPreview' => ['required','url'],
            'resume' => ['required','min:50'],
            'bookCover' => ['required','image']
        ]);
        $path = request('bookCover')->store('bookCovers', 'public');
        BookModel::create([
            'idUser' =>auth()->user()->idUser,
            'booTitle' => request('title'),
            'booNbPages' => request('numberPages'),
            'idCategory' => request('categories'),
            'idAuthor' => request('authors'),
            'idEditor' => request('editors'),
            'booPublishingDate' => request('publishingDate'),
            'booPreview' => request('bookPreview'),
            'booResume' => request('resume'),
            'booCoverName' => $path
        ]);

        // Incrémentation du nombre de livres postés par l'utilisateur
        UserModel::where('idUser', auth()->user()->idUser)->increment('useNbBooks');
        return redirect('/');
    }
}
