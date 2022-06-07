<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="main_new" id="<?php echo e($news->id); ?>" style="display: flex; flex-direction: column;">
                    <a href="<?php echo e(route('news.show', ['id' => $news->id])); ?>"><?php echo e($news->title); ?></a>
                    <img style="width: 300px;" src="<?php echo e($news->image); ?>" alt="<?php echo e($news->title); ?>" class="main_image">
                    <p class="main_description"><?php echo e($news->description); ?></p>
                    <p class="main_author"><b>Автор:</b><?php echo e($news->author); ?></p>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/news/show.blade.php ENDPATH**/ ?>