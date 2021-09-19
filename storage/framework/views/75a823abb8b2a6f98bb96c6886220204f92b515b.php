<div class="col-sm-6 col-md-4" >
<div class="thumbnail">
    <div class="caption">
        <h3><?php echo e($product->name); ?></h3>
        <p><?php echo e($product->price); ?> руб.</p>
        <p>
            <form action="<?php echo e(route('basketAdd', $product->id)); ?>" method="post">
            <button type="submit" class="btn btn-primary"
               role="button">В корзину</button>
            <?php echo csrf_field(); ?>
            </form>
        </p>
    </div>
</div>
</div>
<?php /**PATH C:\OpenServer\domains\shop\resources\views/card.blade.php ENDPATH**/ ?>