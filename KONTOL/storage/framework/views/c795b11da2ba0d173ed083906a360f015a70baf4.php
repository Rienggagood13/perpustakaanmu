<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Master Data Administrator</h1>
    <a href="<?php echo e(route('tambah_admin')); ?>" class="btn btn-style float-right"><i class="fas fa-fw fa-plus"></i> Tambah Administrator</a>
</div>
<div class="row mb-5">
    <div class="col-lg-12">
        <div class="card border-top-primary">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="mytabel" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td></td>
                            <td><?php echo e($row->username); ?></td>
                            <td><?php echo e($row->notelp); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td>
                                <form action="<?php echo e(route('delete_user', $row->id)); ?>" method="POST" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-sm tombol-hapus" type="submit">
                                        <i class="far fa-fw fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/user/admin.blade.php ENDPATH**/ ?>