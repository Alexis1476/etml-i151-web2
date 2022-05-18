<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page pour l'ajout d'un livre
-->



<!-- Section content -->
<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <h1 class="text-2xl font-bold text-center">Add a book</h1>
    <div class="flex items-center justify-center content-center h-full">
        <form action="/bookCheckAdd" enctype="multipart/form-data" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <?php echo e(csrf_field()); ?>

            <!-- Ajout de tout les labels avec du text à insérer et les listes déroulante -->
            <?php echo $__env->make('partials.form-input', ['nameItem'=>'title', 'text'=>'Title', 'type'=>'text'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-input', ['nameItem'=>'numberPages', 'text'=>'Number of pages', 'type'=>'number'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-select', ['nameItem'=> 'categories', 'text'=>'Category', 'options'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-select', ['nameItem'=>'authors', 'text'=>'Author','options'=>$authors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-select', ['nameItem'=>'editors', 'text'=>'Editor','options'=>$editors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-input', ['nameItem'=>'publishingDate', 'text'=>'Publishing date', 'type'=>'date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.form-input', ['nameItem'=>'bookPreview', 'text'=>'Book preview', 'type'=>'text'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="mb-4">
                <label class="label" for="resume">
                    Resume
                </label>

                <textarea
                    class="textarea <?php echo e($errors->has("resume") ? 'border-red-500' : ''); ?>"
                    id="resume"
                    rows="3"
                    placeholder="Resume of the book"
                    name="resume"

                ><?php echo e(old('resume')); ?></textarea>
                <!-- Affichage de l'erreur -->
                <?php if($errors->has("resume")): ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($errors->first("resume")); ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="label">Book cover</label>
                <input
                    class="input  <?php echo e($errors->has("bookCovers") ? 'border-red-500' : ''); ?>"
                    name="bookCover"
                    type="file"
                    accept="image/png, image/jpeg, image/jpg, image/PNG">

                <!-- Affichage de l'erreur -->
                <?php if($errors->has("bookCovers")): ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($errors->first("bookCovers")); ?></p>
                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/bookAdd.blade.php ENDPATH**/ ?>