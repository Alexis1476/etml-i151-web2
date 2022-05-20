<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page pour la liste des livres du sites
-->



<!-- Section content -->
<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <form class="grid grid-cols-4 mt-10 mx-auto space-x-8 h-48" method="post" action="/bookList">
        <?php echo csrf_field(); ?>

        <!-- Ajout de la barre de recherche dans la page bookList -->
        <div class="row-start-2">
            <?php echo $__env->make('partials.form-input', ['nameItem'=>'booName', 'text'=>'Search book', 'type'=>'text'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Liste déroulante pour la recherche non fonctionnel -->
        
        <div class="row-start-2 items-center mt-7">
            <button
                class="btnDefault"
                type="submit">
                Search
            </button>
        </div>
    </form>

    <!-- Affichage de tout les livres -->
    <div class="flexCardDiv">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.book-card',[
            'title'=>$book->booTitle,
            'author'=>$book->author->autFirstName,
            'user'=>$book->user->useNickname,
            'img'=>$book->booCoverName,
            'note'=>$book->booNoteAverage,
            'idUser'=>$book->idUser,
            'idBook'=>$book->idBook], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/bookList.blade.php ENDPATH**/ ?>