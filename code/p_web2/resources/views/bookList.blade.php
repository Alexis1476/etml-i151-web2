@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <form class="grid grid-cols-4 mt-10 mx-auto space-x-8 h-48" method="post" action="/bookList">
        @csrf
        <div class="row-start-2">
            @include('partials.form-input', ['nameItem'=>'booName', 'text'=>'Search book', 'type'=>'text'])
        </div>
        <div class="row-start-2">
            @include('partials.form-select', ['nameItem'=>'catName', 'text'=>'Filter by'])
        </div>
        <div class="row-start-2 items-center mt-7">
            <button
                class="btnDefault"
                type="submit">
                Search
            </button>
        </div>
        <div class="row-start-1 row-end-3 justify-self-end">
            <a href="/bookAdd"
               class="btnDefault">
                Add book </a>
        </div>
    </form>
    <div class="flexCardDiv">
        @foreach($books as $book)
            @include('partials.book-card',[
            'title'=>$book->booTitle,
            'author'=>$book->author->autFirstName,
            'user'=>$book->user->useNickname,
            'img'=>$book->booCoverName,
            'idBook'=>$book->idBook])
        @endforeach
    </div>
@endsection
