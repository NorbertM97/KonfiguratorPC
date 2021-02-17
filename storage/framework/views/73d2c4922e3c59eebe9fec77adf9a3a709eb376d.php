<?php if(!empty($timings)): ?>

    <?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="timings[]" value=<?php echo e($item->max_timing); ?> <?php echo e((isset($_GET['timings']) && in_array($item->max_timing, $_GET['timings'])) ? 'checked' : ''); ?>>
        <label for=<?php echo e($item->max_timing); ?>> <?php echo e($item->max_timing); ?> Mhz </label>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/partials/timings-filter.blade.php ENDPATH**/ ?>