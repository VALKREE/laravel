<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="main_category" id="<?php echo e($categories->id); ?>" style="display: flex; flex-direction: column;">
                    <p><b>Категория: </b><?php echo e($categories->title); ?></p>
                    <p><b>Автор: </b><?php echo e($categories->author); ?></p>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/categories/show.blade.php ENDPATH**/ ?>