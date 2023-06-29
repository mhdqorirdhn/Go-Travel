


<?php $__env->startSection('ttitle', 'success'); ?>


<?php $__env->startSection('content'); ?>
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="<?php echo e(url('FrontEnd/Image/ic_mail.jpg')); ?>" alt="" />
                <h1>Yay! Success</h1>
                <p>
                    We’ve sent you email for trip instruction <br />
                    please read it as well
                </p>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-home-page mt-3 px-5">

                    Home Page
                </a>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gotravel\resources\views/pages/success.blade.php ENDPATH**/ ?>