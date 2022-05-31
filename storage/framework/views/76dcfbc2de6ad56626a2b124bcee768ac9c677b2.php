<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список обратной связи</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="<?php echo e(route('admin.feedback.create')); ?>" class="btn btn-sm btn-outline-secondary">Добавить обратную связь</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">email</th>
                <th scope="col">Информация</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Дата обновления</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $upload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uploadItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($uploadItem->id); ?></td>
                    <td><?php echo e($uploadItem->name); ?></td>
                    <td><?php echo e($uploadItem->phone); ?></td>
                    <td><?php echo e($uploadItem->email); ?></td>
                    <td><?php echo e($uploadItem->information); ?></td>
                    <td><?php echo e($uploadItem->created_at); ?></td>
                    <td><?php echo e($uploadItem->updated_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($upload->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/forms/upload/index.blade.php ENDPATH**/ ?>