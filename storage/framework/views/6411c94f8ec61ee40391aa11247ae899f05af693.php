<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            html,body{
                height: 100%;
            }
            .wrapper{
                height: 100%;
                display: flex;
                flex-direction: column;
            }
            .main{
                flex-grow: 1;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="collapse bg-dark" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-white">LaravelProject</h4>
                            </div>
                            <div class="col-sm-4 offset-md-1 py-4">
                                <h4 class="text-white">Меню</h4>
                                <ul class="list-unstyled">
                                    <li><a href="/" class="text-white">Главная</a></li>
                                    <li><a href="/news" class="text-white">Новости</a></li>
                                    <li><a href="/categories" class="text-white">Категории</a></li>
                                    <li><a href="/admin" class="text-white">Админ панель</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-dark bg-dark shadow-sm">
                    <div class="container">
                        <a href="/" class="navbar-brand d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                            <strong>LaravelProject</strong>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </header>
            <main class="main">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <footer class="footer text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                        <a href="#">Вернуться наверх</a>
                    </p>
                    <p class="mb-0">&#169;Сайт создан для Geekbrains</p>
                </div>
            </footer>
        </div>
        <?php echo $__env->yieldPushContent('js'); ?>
        <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>