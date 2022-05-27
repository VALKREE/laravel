<?php $__env->startSection('content'); ?>
    <div class="container w-100">
        <div>
            <h1>Главная страница</h1>
            <form action="" class="feedback d-flex flex-column">
                <h3 class="feedback_header">Форма обратной связи</h3>
                <label for="" class="w-25 m-1 d-flex flex-column">Имя пользователя: <input type="text" placeholder="Введите имя пользователя"></label>
                <label for="" class="w-25 m-1 d-flex flex-column">Комментарий: <textarea name="" id="" placeholder="Ваш комментарий"></textarea></label>
                <input type="submit" class="w-25 m-1">
            </form>

            <form action="" class="formUploadData d-flex flex-column">
                <h3 class="formUploadData_header">Форма загрузки</h3>
                <label for="" class="w-25 d-flex flex-column m-1">Имя: <input type="text" placeholder="Введите ваше имя"></label>
                <label for="" class="w-25 d-flex flex-column m-1">Телефон: <input type="text" placeholder="Введите ваш телефон"></label>
                <label for="" class="w-25 d-flex flex-column m-1">E-mail: <input type="email" placeholder="Введите ваш e-mail"></label>
                <label for="" class="w-25 d-flex flex-column m-1">Информация: <textarea name="info" id="" placeholder="Введите информацию о том, что вы хотите закачать"></textarea></label>
                <input type="submit" class="w-25 m-1">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/home.blade.php ENDPATH**/ ?>