<?php $__env->startSection('title', 'Все категории'); ?>
<?php $__env->startSection('content'); ?>

    <div class="starter-template">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel">
                <a href="<?php echo e(route('category', $category -> code)); ?>">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                    <h2><?php echo e($category -> name); ?></h2>
                </a>
                <p>
                    <?php echo e($category -> description); ?>

                </p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\shop\resources\views/categories.blade.php ENDPATH**/ ?>