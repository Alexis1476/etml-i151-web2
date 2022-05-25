<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour les listes déroulantes
-->

<div class="mb-4">
    <label class="label" for="<?php echo e($nameItem); ?>">
        <?php echo e($text); ?>

    </label>
    <div class="relative">
        <select
            class="select <?php echo e($errors->has($nameItem) ? 'border-red-500' : ''); ?>"
            id="<?php echo e($nameItem); ?>"
            name ="<?php echo e($nameItem); ?>">
            <option value="">-</option>
            <!-- Ajout de toutes les données dans la liste déroulante et vérifie aussi
            si il y a avait déja un valeur séléction lors d'un erreur -->
            <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option <?php echo e(old($nameItem)==$option->id ? 'selected' : ''); ?> value="<?php echo e($option->id); ?>"><?php echo e($option->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>

        </select>
        <div class="pointer">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
        </div>
    </div>
    <!-- Affichage de l'erreur -->
    <?php if($errors->has($nameItem)): ?>
        <p class="text-red-500 text-xs italic"><?php echo e($errors->first($nameItem)); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/partials/form-select.blade.php ENDPATH**/ ?>