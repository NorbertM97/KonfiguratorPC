<?php $__env->startSection('krok'); ?>
    Krok 2: wybór płyty głównej
<?php $__env->stopSection(); ?>
<?php $__env->startSection('zdjecie_komponentu'); ?>
    ../images/plyta_glowna.jpg
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
                Socket
            </div>
        </div>
        <?php echo $__env->make('partials.sockets-filter',['sockets' => $sockets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <hr class="hr">

        
        <div class="head-filter">
            <div class="head-filter-title">
                Ilość slotów Ram
            </div>
        </div>
        <?php echo $__env->make('partials.slots-filter',['slots' => $slots], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <hr class="hr">



        <div class="head-filter">
            <div class="head-filter-title">
                Maksymalne taktowanie Ramu
            </div>
        </div>
        <?php echo $__env->make('partials.timings-filter', ['timings', $timings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <hr class="hr">
    <div class="przycisk-filtru">
        <input class="filtruj" type="submit" value=<?php echo e(__('Filtruj')); ?>>

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <?php echo $__env->make('partials.emptyResults', ['collection' => $mbs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__currentLoopData = $mbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="lista-komponentow asd <?php echo e($mb->producent_id); ?> <?php echo e($mb->socket_id); ?> <?php echo e($mb->slots); ?> <?php echo e($mb->max_timing); ?>">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="<?php echo e($mb->zdj); ?>"class="zdjecie_produktu alignleft size-medium wp-image-7000">
                    </div>
                    <div class="grid-item2">
                        <a><h3 class="tytul-produktu"><b><?php echo e($mb->name); ?></b></h3> </a>
                        <div class="cat-product-features">
                            <div class="cat-product-feature" title="#">
                                Producent:
                                <b><?php echo e($mb->producent->name); ?></b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Kompatybilność:
                                <b><?php echo e($mb->compability->name); ?></b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Socket:
                                <b><?php echo e($mb->socket->name); ?></b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Slotów Ram:
                                <b><?php echo e($mb->slots); ?></b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Maksymalne taktowanie ramu:
                                <b><?php echo e($mb->max_timing); ?> Mhz</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item3">
                        <div class="przycisk-produktu">
                            <form class="wybor" action="<?php echo e(url('/addMBToCart')); ?>">
                                <input type="hidden" name="item" value="<?php echo e($mb->id); ?>">
                                <?php if(Session::get('cart')['motherboard'] == null): ?>
                                    <button type="submit" class="btn btn-danger" id="wybierz">Wybierz!</button>
                                <?php else: ?>
                                    <button type="submit" class="btn btn-danger" id="wybierz">Zamień!</button>
                                    <div class="potwierdzenie">
                                        <div class="napis_potwierdzenie">Jeśli zostały wybrane inne komponenty, zostaną one usunięte.</div>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kitsune\Desktop\projekty\Norbert\ProjektInzynierski\resources\views/secondstep.blade.php ENDPATH**/ ?>