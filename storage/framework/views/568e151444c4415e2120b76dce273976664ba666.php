<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Добро пожаловать, <?php echo e(Auth::user()->name); ?></h3>
        <?php if(Auth::user()->avatar): ?>
            <img src="<?php echo e(Auth::user()->avatar); ?>" style="width:200px;">
        <?php endif; ?>
        <?php if(Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('admin.index')); ?>">Админ панель</a>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/account/index.blade.php ENDPATH**/ ?>