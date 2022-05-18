<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page pour la liste des livres du sites
-->

@extends('layout')

<!-- Section content -->
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <form class="grid grid-cols-4 mt-10 mx-auto space-x-8 h-48" method="post" action="/bookList">
        @csrf

        <!-- Ajout de la barre de recherche dans la page bookList -->
        <div class="row-start-2">
            @include('partials.form-input', ['nameItem'=>'booName', 'text'=>'Search book', 'type'=>'text'])
        </div>
        <!-- Liste déroulante pour la recherche non fonctionnel -->
        {{--<div class="row-start-2">
            @include('partials.form-select', ['nameItem'=>'categories', 'options'=>$categories, 'text'=>'Filter by'])
        </div>--}}
        <div class="row-start-2 items-center mt-7">
            <button
                class="btnDefault"
                type="submit">
                Search
            </button>
        </div>
    </form>

    <!-- Affichage de tout les livres -->
    <div class="flexCardDiv">
        @foreach($books as $book)
            @include('partials.book-card',[
            'title'=>$book->booTitle,
            'author'=>$book->author->autFirstName,
            'user'=>$book->user->useNickname,
            'img'=>$book->booCoverName,
            'note'=>$book->booNoteAverage,
            'idUser'=>$book->idUser,
            'idBook'=>$book->idBook])
        @endforeach
    </div>
@endsection
