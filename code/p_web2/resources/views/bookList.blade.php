@extends('layout')
@section('content')
    <form class="grid grid-cols-4 mt-10 mx-auto space-x-8 h-48">
        <div class="row-start-2">
            @include('partials.form-input', ['nameItem'=>'booName', 'text'=>'Search book', 'type'=>'text'])
        </div>
        <div class="row-start-2">
            @include('partials.form-select', ['nameItem'=>'catName', 'text'=>'Filter by'])
        </div>
        <div class="row-start-2 items-center mt-5">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded focus:outline-none focus:shadow-outline h-8 mt-3"
                type="submit">
                Search
            </button>
        </div>
        <div class="row-start-1 row-end-3 justify-self-end">
            <a href="/bookAdd"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add book </a>
        </div>
    </form>
    <div class="flex flex-wrap justify-center">
        @foreach($books as $book)
            @include('partials.book-card',[
            'title'=>$book->booTitle,
            'author'=>$book->author->autFirstName,
            'user'=>$book->user->useNickname,
            'img'=>$book->booCoverName])
        @endforeach
    </div>
@endsection
