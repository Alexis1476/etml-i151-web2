@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="block w-4/5 mt-5 mx-auto border-4 border-blue-500 rounded-3xl p-10">
        <div class="flex flex-row justify-between w-full h-full">
            <section class="text-blue-500">
                {{--TODO : Remplacer par des variables--}}
                <h1 class="text-2xl font-bold">Title :</h1>
                <h2 class="text-xl my-4">Category :</h2>
                <h2 class="text-xl my-4">Number of pages :</h2>
                <h2 class="text-xl my-4">Author :</h2>
                <h2 class="text-xl my-4">Editor :</h2>
                <h2 class="text-xl my-4">Average :</h2>
            </section>
            <section>
                <h1 class="text-2xl font-bold">{{$book->booTitle}}</h1>
                <h2 class="text-xl my-4">{{$book->category->catName}}</h2>
                <h2 class="text-xl my-4">{{$book->booNbPages}}</h2>
                <h2 class="text-xl my-4">{{$book->author->autFirstName}}</h2>
                <h2 class="text-xl my-4">{{$book->editor->ediName}}</h2>
                <h2 class="text-xl my-4">{{$book->booNoteAverage}}</h2>
            </section>
            <section>
                <img class="rounded-lg object-cover h-full" src="https://picsum.photos/200/300"
                         alt="Book cover">
            </section>
        </div>
        <div>
            <h2 class="text-xl text-blue-500 my-4">Resume :</h2>
            <p>{{$book->booResume}}</p>
        </div>
    </div>
@endsection
