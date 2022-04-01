<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P_Web2</title>
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <style>
  .container{
    margin: auto;
  }
  button{
    margin-left: 0.5rem;
  }
  a{
    font-size: 20px;
  }
  .navbar{
    background-color: #3D8FDB;
  }
  </style>
  <div class="navbar">
    <div class="container">
      <nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
          <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="" class="flex items-center">
              <img src="../../../documentation/screens/navbar-img.png" class="mr-3 h-6 sm:h-16" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Passion lecture</span>
          </a>
          <div class="flex md:order-2">
            <button type="button" class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            </button>
            <button type="button" class="text-white border-2 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
          </button>
          </div>
          <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
              <li>
                <a href="/" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white md:hover:underline">Home</a>
              </li>
              <li>
                <a href="/bookList" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Book List</a>
              </li>
            </ul>
          </div>
          </div>
        </nav>
    </div>
  </div>
  @yield('content')
</body>
</html>
