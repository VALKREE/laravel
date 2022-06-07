<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать категорию</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3>Форма редактирования категории</h3>

        <form method="post" action="<?php echo e(route('admin.categories.update', ['category' => $category])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo e($category->title); ?>">
            </div>

            <div class="form-group">
                <label for="author">Автор</label>
                <textarea class="form-control" name="author" id="author"><?php echo $category->author; ?></textarea>
            </div>

            <div class="form-group">
                <label for="created_at">Дата</label>
                <textarea class="form-control" name="created_at" id="created_at"><?php echo $category->created_at; ?></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>