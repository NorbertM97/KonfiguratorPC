<?php if(!empty($sockets)): ?>
    <?php $__currentLoopData = $sockets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="sockets[]" value=<?php echo e($item->socket->name); ?> <?php echo e((isset($_GET['sockets']) && in_array($item->socket->name, $_GET['sockets'])) ? 'checked' : ''); ?>>
        <label for=<?php echo e($item->socket->name); ?>> <?php echo e($item->socket->name); ?> </label>
        <br>                                
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/partials/sockets-filter.blade.php ENDPATH**/ ?>