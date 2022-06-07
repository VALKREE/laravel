<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="main_new" id="<?php echo e($newsItem->id); ?>" style="display: flex; flex-direction: column;">
                        <a href="<?php echo e(route('news.show', ['id' => $newsItem->id])); ?>"><?php echo e($newsItem->title); ?></a>
                        <img style="width: 300px;" src="<?php echo e($newsItem->image); ?>" alt="<?php echo e($newsItem->title); ?>" class="main_image">
                        <p class="main_description"><?php echo e($newsItem->description); ?></p>
                        <p class="main_author"><b>Автор:</b><?php echo e($newsItem->author); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($news->links()); ?>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/news/index.blade.php ENDPATH**/ ?>