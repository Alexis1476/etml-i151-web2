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
  <div class="navbar">
    <div class="container">
      <nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded">
          <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="" class="flex items-center">
              <img src="img/navbar-img.png" class="mr-3 h-6 sm:h-16" alt="Passion lecture" />
              <span class="self-center text-xl font-semibold whitespace-nowrap">Passion lecture</span>
          </a>
          <div class="flex md:order-2">
            <button type="button" class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Login</button>
            </button>
            <button type="button" class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Sign Up</button>
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
    </div>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
