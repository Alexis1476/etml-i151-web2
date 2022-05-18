<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page pour les détails d'un créateur
-->

@extends('layout')

<!-- Section content -->
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="md:flex no-wrap md:-mx-2 ">
        <!-- Left Side -->
        <div class="md:w-3/12 md:mx-2">
            <!-- Profile Card -->
            <div class="bg-white p-3 border-t-4 border-blue-500">
                <div class="image overflow-hidden">
                    <img class="h-auto w-full mx-auto"
                         src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"
                         alt="">
                </div>

                <!-- Ajout du nom de l'utilisateur -->
                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user->useNickname}}</h1>
                <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.
                    Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                <ul
                    class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <li class="flex items-center py-3 font-bold">
                        <span>Status</span>
                        <span class="ml-auto"><span
                                class="bg-blue-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                    </li>

                    <!-- Ajout de la date de création du compte de l'utilisateur -->
                    <li class="flex items-center py-3 font-bold">
                        <span>Member since</span>
                        <span class="ml-auto text-sm font-medium">{{$user->useCreateAt}}</span>
                    </li>
                </ul>
            </div>
            <!-- End of profile card -->
        </div>
        <!-- Right Side -->
        <div class="w-full md:w-9/12 mx-2 h-64">
            <!-- Profile tab -->
            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="flex items-center space-x-2 font-bold text-blue-500 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                    <span class="tracking-wide">About</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">

                        <!-- Ajout du nom de l'utilisateur -->
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Name</div>
                            <div class="px-4 py-2">{{$user->useNickname}}</div>
                        </div>

                        <!-- Ajout du nombre de livre ajouté par l'utilisateur -->
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Number of Books</div>
                            <div class="px-4 py-2">{{$user->useNbBooks}} Books</div>
                        </div>

                        <!-- Ajout du nombre d'appréciation faire par l'utilisateur -->
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Number of Notes</div>
                            <div class="px-4 py-2">{{$user->useNbAppreciation}} Notes</div>
                        </div>

                        <!-- Ajout du rôle de l'utilisateur -->
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Role</div>
                            <div class="px-4 py-2">{{$user->useAdmin}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of about section -->

            <div class="my-4"></div>

            <!-- Experience and education -->
            <div class="bg-white p-3 shadow-sm rounded-sm">

                <div class="grid grid-cols-2">
                    <div>
                        <div class="flex items-center space-x-2 font-bold text-blue-500 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                            <span class="tracking-wide">Top Posted Books</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            <!-- Récupération des livres que l'utilisateur a ajouté -->
                            @foreach($books as $book)
                                <li>
                                    <a href="/bookDetails{{$book->idBook}}" class="text-gray-500 font-semibold text-lg hover:text-blue-500">{{$book->booTitle}}</a>
                                    <div class="flex items-center text-gray-500 text-xs">
                                        <div class="font-semibold mr-1">Published Date</div>
                                        <div class="mr-2">{{$book->booPublishingDate}}</div>
                                        <div class="mr-2">-</div>
                                        <div class="font-semibold mr-1">Rate</div>
                                        <div class="mr-1">{{$book->booNoteAverage}}</div>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End of Experience and education grid -->
            </div>
            <!-- End of profile tab -->
        </div>
    </div>
@endsection
