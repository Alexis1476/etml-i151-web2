<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!--
    Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
    Date: 18.05.2022
    Description: Layout pour les autres pagess
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P_Web2</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
<nav class="border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <img src="img/navbar-img.png" class="mr-3 h-6 sm:h-16" alt="Passion lecture"/>
            <span class="self-center text-xl font-semibold whitespace-nowrap">Passion lecture</span>
        </a>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <!-- Include les liens vers les autres pages -->
                <li><?php echo $__env->make('partials.navbar-item', ['lien' => '/', 'texte' => 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></li>
                <li><?php echo $__env->make('partials.navbar-item', ['lien' => 'bookList', 'texte' => 'Book List'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></li>

                <!-- Include le lien vers la page d'ajout de livre si l'utilisateur est connecté-->
                <?php if(auth()->guard()->check()): ?>
                    <li><?php echo $__env->make('partials.navbar-item', ['lien' => 'bookAdd', 'texte' => 'Add Book'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="flex md:order-2 items-center">
            <!-- Vérification de si l'utilisateur est connecté pour pouvoir afficher son nom et le bouton Logout -->
            <?php if(auth()->guard()->check()): ?>
                <a href="/creatorDetails<?php echo e(auth()->user()->idUser); ?>"
                   class="hover:underline text-white mr-3"><?php echo e(auth()->user()->useNickname); ?></a>
                <a href="/logout" class="btnConnection">Logout</a>
            <!-- Sinon affiche les boutons pour la connexion ou la création de compte -->
            <?php else: ?>
                <button name="Login" type="button" onclick="openModal('modal-login')" id="login-btn" class="btnConnection">Login</button>
                <button onclick="openModal('modal-register')" id="register-btn" class="btnConnection">Sign Up</button>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="container mt-10 m-auto">
    <!-- Class content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Regarde si l'utilisateur est un invité -->
    <?php if(auth()->guard()->guest()): ?>
        <div id="modal-login" class="z-10 hidden bg-black bg-opacity-50 fixed inset-0 flex justify-center items-center">
            <div class="relative max-w-sm py-2 px-3 rounded">
            <span
                class="closeBtn absolute top-1 right-5 text-3xl cursor-pointer hover:text-gray-500 focus:text-gray-500">&times;</span>
                <!-- Include le formualaire pour la connexion -->
                <?php echo $__env->make('partials.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div id="modal-register"
             class="z-10 hidden bg-black bg-opacity-50 fixed inset-0 flex justify-center items-center">
            <div class="relative max-w-sm py-2 px-3 rounded">
            <span
                class="closeBtn absolute top-1 right-5 text-3xl cursor-pointer hover:text-gray-500 focus:text-gray-500">&times;</span>
                <!-- Include le formualaire pour la création de compte -->
                <?php echo $__env->make('partials.form-register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<footer class="footer inset-x-0 bottom-0 p-4 pt-1 border-b-2 footer-color">
    <div class="container mx-auto px-6">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around text-center">
                <div>
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
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-5 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm footer-color font-bold mb-2">
                    © 2022 by Passion lecture
                </p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">

    // Ajout de la fonction openModal en JS
    function openModal(modalId) {
        let modal = document.getElementById(modalId);
        let buttonsClose = document.getElementsByClassName("closeBtn");
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Ajout l'évènement pour tous les boutons en ayant la classe closeBtn
        for (let btnClose of buttonsClose) {
            btnClose.addEventListener("click", () => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            })
        }
    }

    // Si erreur coté serveur reouvrir le modal
    <?php if($errors->has('userLogin')|| $errors->has('passwordLogin')): ?>
    openModal('modal-login');

    // Sinon c'est la même choses mais pour le modal register
    <?php elseif($errors->has('user') || $errors->has('password')): ?>
    openModal('modal-register');
    <?php endif; ?>
</script>
</body>
</html>




<?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/layout.blade.php ENDPATH**/ ?>