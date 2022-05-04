<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    //
    public function list(){
        $books = BookModel::all();
        return view('bookList', ['books'=>$books]);
    }

    public function searchBooks(Request $request){
        $param = $request->input('booName');

        $books = BookModel::where('booTitle', 'like', "$param%")->get();

        return view('bookList', ['books'=>$books]);
    }

    public function bookDetails(){
        $book = BookModel::where('idBook', request('idBook'))->first();

        return view('bookDetails', ['book'=>$book]);
    }

    public function bookadd(){
        $categories = CategoryModel::select('idCategory as id', 'catName as name')->get();
        $authors = AuthorModel::select('idAuthor as id', AuthorModel::raw('CONCAT(autFirstName," ",autLastName) as name'))->get();
        $editors = EditorModel::select('idEditor as id', 'ediName as name')->get();

        return view('bookAdd', ['categories'=>$categories,'authors'=>$authors,'editors'=>$editors]);
    }
}
