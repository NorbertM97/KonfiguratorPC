<?php $__env->startSection('krok'); ?>
Krok 1: wybór obudowy
<?php $__env->stopSection(); ?>
<?php $__env->startSection('zdjecie_komponentu'); ?>
    ../images/obudowa.jpg
<?php $__env->stopSection(); ?>
<?php $__env->startSection('filtry'); ?>

        <form action="<?php echo e(url()->current()); ?>" method="GET">
            <div class="head-filter">
                <div class="head-filter-title">
                    Producent
                </div>
            </div>


                    <?php echo $__env->make('partials.producent-filter',['producents', $producents], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Kompatybilność
                </div>
            </div>

            <?php echo $__env->make('partials.compability-filter',['compabilities', $compabilities], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Długość karty graficznej
                </div>
            </div>

                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <input type="checkbox" name="GPU_size[]" value=<?php echo e($size->GPU_size); ?> <?php echo e((isset($_GET['GPU_size']) && in_array($size->GPU_size, $_GET['GPU_size'])) ? 'checked' : ''); ?>>
                    <label for=<?php echo e($size->GPU_size); ?>> <?php echo e($size->GPU_size); ?> mm</label>
                    <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value=<?php echo e(__('Filtruj')); ?>>
            </div>
        </form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.emptyResults', ['collection' => $covers], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__currentLoopData = $covers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cover): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
    <div rel="<?php echo e($cover->producent_id); ?>" class="lista-komponentow asd <?php echo e($cover->producent_id); ?> <?php echo e($cover->compability_id); ?> <?php echo e($cover->GPU_size); ?> <?php echo e($cover->type); ?>">
    <div class="card-komponent">
        <div class="grid-container">
            <div class="grid-item1">
                <div class="zoomimage">
                    <img src="<?php echo e($cover->zdj); ?>"class="zdjecie_produktu alignleft size-medium wp-image-7000">
                </div>
            </div>
            <div class="grid-item2">
                <a><h3 class="tytul-produktu"><b><?php echo e($cover->name); ?></b></h3> </a>
                <div class="cat-product-features">
                    <div class="cat-product-feature" title="#">
                        Producent:
                        <b><?php echo e($cover->producent->name); ?></b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Kompatybilność:
                        <b><?php echo e($cover->compability->name); ?></b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Długość karty graficznej:
                        <b><?php echo e($cover->GPU_size); ?> mm</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Typ obudowy:
                        <b><?php echo e($cover->type); ?></b>
                    </div>

                </div>
            </div>
            <div class="grid-item3">
                <div class="przycisk-produktu">

                <form class="wybor" action="<?php echo e(url('/addCoverToCart')); ?>">
                    <input type="hidden" name="selected_cover" value="<?php echo e($cover->id); ?>">
                    <?php if(Session::get('cart')['cover'] == null): ?>
                    <button type="submit" class="btn btn-danger" id="wybierz">Wybierz!</button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-danger" id="wybierz">Zamień!</button>
                    <div style="padding-top:10px;">

                        <div class="napis_potwierdzenie">
                            <a style="color:red;"><strong>Uwaga!</strong> Koszyk zostanie wyczyszczony.</a>
                        </div>
                    </div>

                    <?php endif; ?>
                </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/firststep.blade.php ENDPATH**/ ?>