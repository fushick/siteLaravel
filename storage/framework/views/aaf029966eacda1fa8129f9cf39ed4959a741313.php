<?php $__env->startSection('title', 'Корзина'); ?>

<?php $__env->startSection('content'); ?>
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $order ->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($product -> name); ?>

                        </td>
                        <td><span class="badge"><?php echo e($product -> pivot ->count); ?></span>
                            <div class="btn-group form-inline">
                                <form action="<?php echo e(route('basketDelete', $product)); ?>" method="post">

                                    <button type="submit" class="btn btn-danger" ><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    <?php echo csrf_field(); ?>

                                </form>
                                <form action="<?php echo e(route('basketAdd', $product)); ?>" method="post">

                                <button type="submit" class="btn btn-success" ><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    <?php echo csrf_field(); ?>

                                </form>
                            </div>
                        </td>
                        <td><?php echo e($product -> price); ?> руб</td>
                        <td><?php echo e($product -> getPriceForCount($product -> pivot ->count)); ?> руб </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td><?php echo e($order -> calculateFullPrice()); ?> руб </td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="<?php echo e(route('basketPlace')); ?>">Оформить заказ</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\shop\resources\views/basket.blade.php ENDPATH**/ ?>