@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h1 class="text-2xl font-bold text-center">Add a book</h1>
    <div class="flex items-center justify-center content-center h-full">
        <form action="/bookAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            {{ csrf_field() }}
            @include('partials.form-input', ['nameItem'=>'title', 'text'=>'Title', 'type'=>'text'])
            @include('partials.form-input', ['nameItem'=>'numberPages', 'text'=>'Number of pages', 'type'=>'text'])
            @include('partials.form-select', ['nameItem'=>'category', 'text'=>'Category'])
            @include('partials.form-select', ['nameItem'=>'author', 'text'=>'Author'])
            @include('partials.form-select', ['nameItem'=>'editor', 'text'=>'Editor'])
            @include('partials.form-input', ['nameItem'=>'publishingDate', 'text'=>'Publishing date', 'type'=>'date'])
            <div class="mb-4">
                <label class="label" for="resume">
                    Resume
                </label>
                <textarea
                    class="textarea"
                    id="resume"
                    rows="3"
                    placeholder="Resume of the book"
                ></textarea>
            </div>
            <div class="mb-4">
                <label class="label">Book preview</label>
                <input
                    class="input"
                    type="file">
            </div>
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                <div class="flex items-center justify-between">
                    <button
                        class="btnDefault"
                        type="submit">
                        Add book
                    </button>
                    <button
                        class="btnDefault"
                        type="button">
                        Clear
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
