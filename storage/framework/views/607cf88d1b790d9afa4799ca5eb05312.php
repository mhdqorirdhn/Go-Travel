
<?php $__env->startSection('title', 'Visa'); ?>

<?php $__env->startSection('content'); ?>
                   <div class="card shadow"style="margin: 50px 250px" >
            <div class="card-body">
                <form action="<?php echo e(route('home')); ?>" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="image">Scan KTP</label>
                        <br>
                        <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Buat Visa
                    </button>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gotravel\resources\views/pages/visa.blade.php ENDPATH**/ ?>