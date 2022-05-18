<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour la barre de navigation
-->

<!-- Affichage des liens dans la barre de navigation avec le nom de celui-ci -->
<a href="<?php echo e(url($lien)); ?>" class="block py-2 pr-4 pl-3 md:bg-transparent md:text-white-700 md:p-0 md:hover:underline <?php echo e(request()->is($lien) ? 'text-white ?' : ""); ?>"><?php echo e($texte); ?></a>
<?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/partials/navbar-item.blade.php ENDPATH**/ ?>