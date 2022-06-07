<?php $__env->startSection('content'); ?>
    <div class="container w-100">
        <div>
            <h1>Главная страница</h1>
            <a href="/feedback">Обратная связь</a>
            <a href="/upload">Форма загрузки</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/index.blade.php ENDPATH**/ ?>