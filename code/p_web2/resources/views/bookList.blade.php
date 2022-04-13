@extends('layout')
@section('content')
    <div class="grid grid-cols-4 mt-10 mx-auto space-x-8 h-48">
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
    </div>
    <div class="flex flex-wrap justify-center">
        {{--ToDo faire une boucle foreach pour ajouter les livres--}}
        @include('partials.book-card',['title'=>'Book 1','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 2','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 3','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 4','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 5','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 6','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 7','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 8','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
        @include('partials.book-card',['title'=>'Book 9','author'=>'Stefan','user'=>'Robi','img'=>'Couverture.png'])
    </div>
@endsection
