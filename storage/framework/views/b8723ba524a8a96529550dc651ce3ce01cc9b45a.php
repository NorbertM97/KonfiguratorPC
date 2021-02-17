<?php if(!empty($compabilities)): ?>

    <?php $__currentLoopData = $compabilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <input type="checkbox" name="compability[]" value=<?php echo e($item->name); ?> <?php echo e((isset($_GET['compability']) && in_array($item->name, $_GET['compability'])) ? 'checked' : ''); ?>>
        <label for=<?php echo e($item->name); ?>> <?php echo e($item->name); ?> </label>
        <br>                                
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/partials/compability-filter.blade.php ENDPATH**/ ?>