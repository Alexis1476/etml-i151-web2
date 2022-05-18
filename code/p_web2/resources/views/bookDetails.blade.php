<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page pour les détails d'un livre
-->

@extends('layout')

<!-- Section content -->
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="block w-4/5 mt-5 mx-auto border-4 border-blue-500 rounded-3xl p-10">
        <div class="flex flex-row justify-between w-full h-full">
            <section class="text-blue-500">
                <h1 class="text-2xl font-bold">Title :</h1>
                <h2 class="text-xl my-4">Category :</h2>
                <h2 class="text-xl my-4">Number of pages :</h2>
                <h2 class="text-xl my-4">Author :</h2>
                <h2 class="text-xl my-4">Editor :</h2>
                <h2 class="text-xl my-4">Average :</h2>
                <h2 class="text-xl my-4">Note :</h2>
            </section>

            <!-- Affichage de toutes les détails du livres -->
            <section>
                <h1 class="text-2xl font-bold">{{$book->booTitle}}</h1>
                <h2 class="text-xl my-4">{{$book->category->catName}}</h2>
                <h2 class="text-xl my-4">{{$book->booNbPages}}</h2>
                <h2 class="text-xl my-4">{{$book->author->autFirstName}}</h2>
                <h2 class="text-xl my-4">{{$book->editor->ediName}}</h2>
                <h2 class="text-xl my-4">{{$book->booNoteAverage}}</h2>
                <form action="/bookDetails{{$book->idBook}}" method="post">
                    {{ csrf_field() }}
                <div class="mb-4 flex flex-wrap">
                    <div class="relative w-1/5">
                            <select
                                class="select {{ $errors->has("note") ? 'border-red-500' : ''}}"
                                id="note"
                                name="note">
                                <!-- Ajout de la liste déroulante pour noté le livre -->
                                @for($i = 2; $i < 11; $i++)
                                    <option value="{{$i/2}}">{{$i/2}}</option>
                                @endfor
                            </select>
                            <div class="pointer">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                    </div>
                    <button class="btnDefault ml-5" type="submit"> Appreciate</button>
                    </form>
                    <!-- Si il ne choisit aucun note, il lui affiche comme quoi il n'a pas séléction de note -->
                    @if($errors->has("note"))
                        <p class="text-red-500 text-xs italic">{{$errors->first("note")}}</p>
                    @endif
                </div>
            </section>

            <!-- Affichage de l'image de couverture du livre -->
            <section class="w-1/4">
                <img class="rounded-lg object-cover h-full" src="{{asset("/storage/$book->booCoverName")}}"
                     alt="Book cover">
            </section>
        </div>
        <div>
            <h2 class="text-xl text-blue-500 my-4">Resume :</h2>
            <p>{{$book->booResume}}</p>
        </div>
    </div>
@endsection
