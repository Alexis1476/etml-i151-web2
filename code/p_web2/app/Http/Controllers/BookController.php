<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    //
    public function list(){
        $books = BookModel::all();
        return view('bookList', ['books'=>$books]);
    }
}
