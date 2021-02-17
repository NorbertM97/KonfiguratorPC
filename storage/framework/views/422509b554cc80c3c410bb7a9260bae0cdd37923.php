<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <?php echo $__env->make('partials.admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pamięci RAM</div>
                <div class="col-md-12 p-2">                    
                    <a class="btn btn-success" href="<?php echo e(route('adminRamAdd')); ?>" role="button">Dodaj</a>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(!empty($rams)): ?>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Pamięć</th>
                            <th scope="col">Opóżnienie</th>
                            <th scope="col">Timing</th>
                            <th scope="col">Typ</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ram): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($ram->id); ?></th>
                                    <td><?php echo e($ram->name); ?></td>
                                    <td><?php echo e($ram->memory); ?></td>
                                    <td><?php echo e($ram->latency); ?></td>
                                    <td><?php echo e($ram->timing); ?></td>
                                    <td><?php echo e($ram->typ); ?></td>
                                    <td><?php echo e($ram->producent->name); ?></td>
                                    <td>
                                        <form action="<?php echo e(route('adminRamDelete')); ?>" method='POST'>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value = <?php echo e($ram->id); ?>>
                                            <button type="submit" class="btn btn-danger">X</button>
                                        </form>    
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                            
                        </tbody>
                    </table>
                      

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/admin/ram/index.blade.php ENDPATH**/ ?>