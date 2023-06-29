

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

   
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Gallery</h1>
    </div>

    <!-- Content Row -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card shadow">
            <div class="card-body">
                <form action="<?php echo e(route('gallery.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="from-group">
                        <label for="travel_packages_id">Paket Travel</label>
                        <select name="travel_packages_id" required class="form-control">
                            <option value="">Pilih Paket Travel</option>
                            <?php $__currentLoopData = $travel_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="{[$travel_package->id]}">
                                    <?php echo e($travel_package->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                    </div>
                </br>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>

    
    
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gotravel\resources\views/pages/admin/gallery/create.blade.php ENDPATH**/ ?>