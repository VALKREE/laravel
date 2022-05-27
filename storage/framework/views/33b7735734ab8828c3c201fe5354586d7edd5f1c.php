<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список категорий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Наименование</th>
                <th scope="col">Автор</th>
                <th scope="col">Обновлена</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
               <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <tr>
                       <td><?php echo e($category->id); ?></td>
                       <td><?php echo e($category->title); ?> ( <?php echo e($category->news_count); ?>) </td>
                       <td><?php echo e($category->author); ?></td>
                       <td><?php echo e($category->updated_at); ?></td>
                       <td>
                           <a href="<?php echo e(route('admin.categories.edit', ['category' => $category->id])); ?>" style="font-size: 12px;">Ред.</a> &nbsp;
                           <a href="<?php echo e(route('admin.categories.destroy', ['category' => $category->id])); ?>" style="color:red; font-size: 12px;">Уд.</a>
                       </td>
                   </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                   <tr>
                       <td colspan="4">Записей нет</td>
                   </tr>
               <?php endif; ?>
            </tbody>
        </table>

        <?php echo e($categories->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>