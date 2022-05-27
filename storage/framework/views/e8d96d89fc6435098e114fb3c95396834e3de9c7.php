<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="admin d-flex flex-column gap-1">
            <h1 class="">Админ панель</h1>
            <a href="/admin/news">Редактор новостей</a>
            <a href="/admin/categories">Редактор категорий</a>
            <a href="/admin/feedback">Обратная связь</a>
            <a href="/admin/upload">Заявки на загрузку</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>