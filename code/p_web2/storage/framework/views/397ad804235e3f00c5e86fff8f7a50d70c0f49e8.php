<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour le style des inputs
-->

<div class="mb-4">
    <label class="label" for="<?php echo e($nameItem); ?>">
        <?php echo e($text); ?>

    </label>
    <!-- Ajout d'un input texte pour avec la valeur désirer dedans -->
    <input
        class="input <?php echo e($errors->has($nameItem) ? 'border-red-500' : ''); ?>"
        id="<?php echo e($nameItem); ?>" type="<?php echo e($type); ?>" placeholder="<?php echo e($text); ?>" name="<?php echo e($nameItem); ?>"
        
        <?php if($nameItem != 'password'): ?>
            value="<?php echo e(old($nameItem)); ?>"
        <?php endif; ?>
        
        <?php if($nameItem=='publishingDate'): ?>
            max="<?php echo e(date('Y-m-d')); ?>"
        <?php endif; ?>
    >
    <!-- Affichage des erreurs -->
    <?php if($errors->has($nameItem)): ?>
        <p class="text-red-500 text-xs italic"><?php echo e($errors->first($nameItem)); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/partials/form-input.blade.php ENDPATH**/ ?>