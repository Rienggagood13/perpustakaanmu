<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Master Data Seller</h1>
</div>

<div class="row mb-5">
    <div class="col-lg-12">
        <div class="card border-top-primary">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="mytabel" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nama Toko</th>
                            <th scope="col">Username</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td></td>
                                <td class="text-capitalize"><?php echo e($row->nama_toko); ?></td>
                                <td><?php echo e($row->user->username); ?></td>                                          
                                <td><?php echo e($row->notelp_toko); ?></td>                                          
                                <td><?php echo e($row->user->email); ?></td> 
                                <td>
                                    <?php if($row->is_active == 0): ?>
                                    <form action="<?php echo e(route('approve_seller', $row->id)); ?>" method="POST" class="d-inline">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-style btn-sm tombol-approve"><i class="fas fa-fw fa-check"></i></button>
                                    </form>
                                    <form action="<?php echo e(route('reject_seller', $row->id)); ?>" method="POST" class="d-inline">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger btn-sm tombol-reject"><i class="fas fa-fw fa-times"></i></i></button>
                                    </form>
                                    <?php endif; ?>
                                    <?php if($row->is_active == 1): ?>
                                        <form action="<?php echo e(route('delete_user', $row->user->id)); ?>" method="POST" class="d-inline" >
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-danger btn-sm tombol-hapus" type="submit">
                                                <i class="far fa-fw fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/user/seller.blade.php ENDPATH**/ ?>