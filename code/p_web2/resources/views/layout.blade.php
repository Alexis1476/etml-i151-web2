<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P_Web2</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="" class="flex items-center">
            <img src="img/navbar-img.png" class="mr-3 h-6 sm:h-16" alt="Passion lecture"/>
            <span class="self-center text-xl font-semibold whitespace-nowrap">Passion lecture</span>
        </a>
        <div class="flex md:order-2">
            <button type="button"
                    class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">
                Login
            </button>
            <button type="button"
                    class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">
                Sign Up
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    @include('partials.navbar-item', ['lien' => '/', 'texte' => 'Home'])
                </li>
                <li>
                    @include('partials.navbar-item', ['lien' => 'bookList', 'texte' => 'Book List'])
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
<footer class="footer inset-x-0 bottom-0 bg-white relative pt-1 border-b-2 footer-color">
    <div class="container mx-auto px-6">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around">
                <div class="">
                    <span class="font-bold text-gray-700 uppercase mb-2">Github</span>
                    <div class="flex justify-start space-x-2">
                        <span class="my-2"><a href="https://github.com/dieperid"
                                              class="footer-color text-md md:hover:underline">David</a></span>
                        <span class="my-2"><a href="https://github.com/xijune"
                                              class="footer-color text-md md:hover:underline">Stefan</a></span>
                        <span class="my-2"><a href="https://github.com/Alexis1476"
                                              class="footer-color text-md md:hover:underline">Alexis</a></span>
                        <span class="my-2"><a href="https://github.com/Robi2004"
                                              class="footer-color text-md md:hover:underline">Robustiano</a></span>
                    </div>
                </div>
                <div class="">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Contact</span>
                    <div class="flex justify-start">
                        <span class="my-2">
                            <a href="#"
                               class="footer-color  text-md md:hover:underline">link 1</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-5 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm footer-color font-bold mb-2">
                    © 2020 by Passion lecture
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
