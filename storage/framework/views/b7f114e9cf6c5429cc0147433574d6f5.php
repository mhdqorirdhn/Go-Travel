
<?php $__env->startSection('title', 'Travel Package'); ?>

<?php $__env->startSection('content'); ?>
     <section class="section-popular-content" id="popularcontent" style="margin-top: 50px">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-1.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Derata, Bali</div>
                        <div class="travel-button mt-auto">
                            <a href="<?php echo e(route('detail')); ?>" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-2.jpg) ;">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Bromo, Malang</div>
                        <div class="travel-button mt-auto">
                            <a href="<?php echo e(route('detail')); ?>" class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-3.jpg) ;">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Nusa Penida</div>
                        <div class="travel-button mt-auto">
                            <a href="<?php echo e(route('detail')); ?>" class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-4.jpg) ;">
                        <div class="travel-country">Middle East</div>
                        <div class="travel-location">Dubai</div>
                        <div class="travel-button mt-auto">
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gotravel\resources\views/pages/travelpackage.blade.php ENDPATH**/ ?>