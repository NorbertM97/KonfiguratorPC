<?php if(!empty($producents)): ?>
    <?php $__currentLoopData = $producents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="producent[]" value=<?php echo e($item->producent->name); ?> <?php echo e((isset($_GET['producent']) && in_array($item->producent->name, $_GET['producent'])) ? 'checked' : ''); ?>>
        <label for=<?php echo e($item->producent->name); ?>> <?php echo e($item->producent->name); ?> </label>
        <br>                                
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/partials/producent-filter.blade.php ENDPATH**/ ?>