<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form metgod="POST" action="/feedback/store" class="feedback d-flex flex-column">
            <?php echo csrf_field(); ?>
            <h3 class="feedback_header">Форма обратной связи</h3>
            <label for="name" class="w-25 m-1 d-flex flex-column">Имя пользователя:
                <input name="name" placeholder="Введите имя пользователя">
            </label>
            <label for="comment class="w-25 m-1 d-flex flex-column">Комментарий:
                <textarea name="comment" id="comment" placeholder="Ваш комментарий"></textarea>
            </label>
            <input type="submit" class="w-25 m-1">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/feedback/index.blade.php ENDPATH**/ ?>