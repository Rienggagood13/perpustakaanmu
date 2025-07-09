<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Master Data Sayuran</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card border-top-primary">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="mytabel" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Sayuran</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Toko</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td></td>
                                <td class="text-capitalize"><?php echo e($row->nama_produk); ?></td>
                                <td>Rp. <?php echo e(number_format($row->harga_produk, 0, ',', '.')); ?></td>
                                <td>
                                    <?php if($row->stock_produk == 1): ?>
                                        <span class="badge badge-primary">Tersedia</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Tidak Tersedia</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-capitalize"><?php echo e($row->store->nama_toko); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/admin/produk.blade.php ENDPATH**/ ?>