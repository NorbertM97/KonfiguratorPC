<?php if(!empty($slots)): ?>

    <?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <input type="checkbox" name="slots[]" value=<?php echo e($item->slots); ?> <?php echo e((isset($_GET['slots']) && in_array($item->slots, $_GET['slots'])) ? 'checked' : ''); ?>>
        <label for=<?php echo e($item->slots); ?>> <?php echo e($item->slots); ?> </label>
        <br>                                
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/partials/slots-filter.blade.php ENDPATH**/ ?>