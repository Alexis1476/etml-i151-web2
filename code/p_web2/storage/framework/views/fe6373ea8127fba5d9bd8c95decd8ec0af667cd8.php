
<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <div class="block w-4/5 mt-5 mx-auto border-4 border-blue-500 rounded-3xl p-10">
        <div class="flex flex-row justify-between w-full h-full">
            <section class="text-blue-500">
                
                <h1 class="text-2xl font-bold">Title :</h1>
                <h2 class="text-xl my-4">Category :</h2>
                <h2 class="text-xl my-4">Number of pages :</h2>
                <h2 class="text-xl my-4">Author :</h2>
                <h2 class="text-xl my-4">Editor :</h2>
                <h2 class="text-xl my-4">Average :</h2>
                <h2 class="text-xl my-4">Note :</h2>
            </section>
            <section>
                <h1 class="text-2xl font-bold"><?php echo e($book->booTitle); ?></h1>
                <h2 class="text-xl my-4"><?php echo e($book->category->catName); ?></h2>
                <h2 class="text-xl my-4"><?php echo e($book->booNbPages); ?></h2>
                <h2 class="text-xl my-4"><?php echo e($book->author->autFirstName); ?></h2>
                <h2 class="text-xl my-4"><?php echo e($book->editor->ediName); ?></h2>
                <h2 class="text-xl my-4"><?php echo e($book->booNoteAverage); ?></h2>
                <form action="/bookDetails<?php echo e($book->idBook); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                <div class="mb-4 flex flex-wrap">
                    <div class="relative w-1/5">
                            <select
                                class="select <?php echo e($errors->has("note") ? 'border-red-500' : ''); ?>"
                                id="note"
                                name="note">
                                <?php for($i = 2; $i < 11; $i++): ?>
                                    <option value="<?php echo e($i/2); ?>"><?php echo e($i/2); ?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="pointer">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                    </div>
                    <button class="btnDefault ml-5" type="submit"> Appreciate</button>
                    </form>
                    <?php if($errors->has("note")): ?>
                        <p class="text-red-500 text-xs italic"><?php echo e($errors->first("note")); ?></p>
                    <?php endif; ?>
                </div>
            </section>
            <section class="w-1/4">
                <img class="rounded-lg object-cover h-full" src="<?php echo e(asset("/storage/$book->booCoverName")); ?>"
                     alt="Book cover">
            </section>
        </div>
        <div>
            <h2 class="text-xl text-blue-500 my-4">Resume :</h2>
            <p><?php echo e($book->booResume); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pq33vbf\Desktop\etml-p040-web2\code\p_web2\resources\views/bookDetails.blade.php ENDPATH**/ ?>