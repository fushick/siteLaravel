<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: <?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="active" ><a href="<?php echo e(route('index')); ?>">Все товары</a></li>

                <li ><a href="<?php echo e(route('categories')); ?>">Категории</a>
                </li>
                <li><a href="<?php echo e(route('register')); ?>">Регистрация</a></li>

                <li ><a href="<?php echo e(route('basket')); ?>">В корзину</a></li>
                <li><a href="">Панель Администратора</a></li>

            </ul>

        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <?php if(session()->has('success')): ?>
            <p class="alert alert-success"><?php echo e(session() -> get('success')); ?></p>
        <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\shop\resources\views/master.blade.php ENDPATH**/ ?>