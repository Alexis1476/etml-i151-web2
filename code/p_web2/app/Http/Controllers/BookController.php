<?php

namespace App\Http\Controllers;

use App\Models\AppreciateModel;
use Illuminate\Http\Request;
use App\Models\BookModel;
use PHPUnit\Framework\Constraint\Count;

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

    public function calculAverage(){
        $average = AppreciateModel::where('idBook', request('idBook'))->avg('appNote');

        BookModel::where('idBook', request('idBook'))->update(['booNoteAverage' => round($average, 1)]);
    }
}
