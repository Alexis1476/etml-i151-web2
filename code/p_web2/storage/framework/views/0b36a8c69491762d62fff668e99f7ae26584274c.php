<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour le formulaire d'enregistrement
-->

<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<div class="flex items-center justify-center content-center h-full">
    <form action="/userAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold text-center mb-5">Sign up</h1>
        <?php echo csrf_field(); ?>
        <!-- Include des inputs pour le formulaire de register  -->
        <?php echo $__env->make('partials.form-input', ['nameItem'=>'user', 'text'=>'Username', 'type'=>'text'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.form-input', ['nameItem'=>'password', 'text'=>'Password', 'type'=>'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.form-input', ['nameItem'=>'password_confirmation', 'text'=>'Confirm password', 'type'=>'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">
            <div class="flex items-center justify-between">
                <button
                    class="btnDefault"
                    type="submit">
                    Sign up
                </button>
            </div>
        </div>
    </form>
</div>

<?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/partials/form-register.blade.php ENDPATH**/ ?>