<?php $__env->startSection('title', 'товар'); ?>
<?php $__env->startSection('content'); ?>
    <div class="starter-template">
        <h1>iPhone X 64GB</h1>
        <h2><?php echo e($product); ?></h2>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="0rdh4n27q2OOuMU5m7ZRhDn3bZcYiWk5ttUHUj71">        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\shop\resources\views/product.blade.php ENDPATH**/ ?>