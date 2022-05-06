@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="block w-4/5 mt-5 mx-auto border-4 border-blue-500 rounded-3xl p-10">
        <div class="flex flex-row w-full h-full justify-center">
            <section class="text-blue-500">
                {{--TODO : Remplacer par des variables--}}
                <h1 class="text-2xl font-bold">Name :</h1>
                <h2 class="text-xl my-4">Created at :</h2>
                <h2 class="text-xl my-4">Number of books :</h2>
                <h2 class="text-xl my-4">Number of notes :</h2>
                <h2 class="text-xl my-4">IsAdmin :</h2>
            </section>
            <section class="ml-10">
                <h1 class="text-2xl font-bold">{{$user->useNickname}}</h1>
                <h2 class="text-xl my-4">{{$user->useCreateAt}}</h2>
                <h2 class="text-xl my-4">{{$user->useNbBooks}}</h2>
                <h2 class="text-xl my-4">{{$user->useNbAppreciation}}</h2>
                <h2 class="text-xl my-4">{{$user->booNoteAverage}}</h2>
                <h2 class="text-xl my-4">{{$user->useAdmin}}</h2>
            </section>
        </div>
    </div>
@endsection
