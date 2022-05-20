<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page d'accueil du site
-->



<!-- Section content -->
<?php $__env->startSection('content'); ?>

    <h2 class="flex justify-center text-4xl mb-8 mt-4">Site description</h2>
    <p class="text-center">Welcome to Passion Lecture, an online library that allows you to find
        information about books that users have put online. <br> In addition, this site allows you to rate
        books and see their average rating</p>

    <div class="flexCardDiv pt-10">
        <!-- Ajout chaque livres dans la page d'accueil -->
        <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('partials.book-card',[
                'title'=>$book->booTitle,
                'author'=>$book->author->autFirstName,
                'user'=>$book->user->useNickname,
                'img'=>$book->booCoverName,
                'note'=>$book->booNoteAverage,
                'idUser'=>$book->idUser,
                'idBook'=>$book->idBook
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Si il n'a aucune info il n'affiche rien -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/home.blade.php ENDPATH**/ ?>