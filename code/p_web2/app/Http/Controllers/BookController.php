<?php

namespace App\Http\Controllers;

use App\Models\AppreciateModel;
use App\Models\AuthorModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use Illuminate\Http\Request;
use App\Models\BookModel;
use Illuminate\Validation\Rule;
use PHPUnit\Framework\Constraint\Count;

class BookController extends Controller
{
    //
    public function list(){
        $books = BookModel::all();
        $categories = CategoryModel::select('idCategory as id', 'catName as name')->get();
        return view('bookList', ['books'=>$books, 'categories'=>$categories]);
    }

    public function searchBooks(Request $request){
        $param = $request->input('booName');

        $books = BookModel::where('booTitle', 'like', "%$param%")->get();

        return view('bookList', ['books'=>$books]);
    }

    public function bookDetails(){
        $book = BookModel::where('idBook', request('idBook'))->first();

        return view('bookDetails', ['book'=>$book]);
    }

    public function calculAverage()
    {
        $average = AppreciateModel::where('idBook', request('idBook'))->avg('appNote');

        BookModel::where('idBook', request('idBook'))->update(['booNoteAverage' => round($average, 1)]);
    }

    public function bookadd(){
        $categories = CategoryModel::select('idCategory as id', 'catName as name')->get();
        $authors = AuthorModel::select('idAuthor as id', AuthorModel::raw('CONCAT(autFirstName," ",autLastName) as name'))->get();
        $editors = EditorModel::select('idEditor as id', 'ediName as name')->get();

        return view('bookAdd', ['categories'=>$categories,'authors'=>$authors,'editors'=>$editors]);
    }

    public function bookCheckAdd()
    {
        //dd(request());
        request()->validate([
            'title' => ['required','max:255'],
            'numberPages' => ['required','max:255'],
            'categories' => ['required'],
            'authors' => ['required'],
            'editors' => ['required'],
            'publishingDate' => ['required'],
            'bookPreview' => ['required'],
            'resume' => ['required'],
            'book cover' => ['required']

        ], [
            'authors.nullable' => 'No OK',
            'title.max:255' => 'Title is to big'

        ]);

    }
}
