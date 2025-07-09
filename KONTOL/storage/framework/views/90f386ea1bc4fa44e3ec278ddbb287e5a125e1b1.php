<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800">Data Invoice</h1>
    <form action="<?php echo e((auth()->user()->role == 1) ? route('admin.laporan.pdf') : route('seller.laporan.pdf')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button class="btn btn-style float-right" type="submit">Download PDF</button>
    </form>
</div>

<div class="row mb-5">
    <div class="col-lg-12">
        <div class="card border-top-primary">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="mytabel" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nomor Invoice</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Total</th>
                            <th scope="col">Tgl. Invoice</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td></td>
                                <td><?php echo e($row->no_invoice); ?></td>
                                <td><?php echo e($row->user->email); ?></td>
                                <td>Rp. <?php echo e(number_format($row->total, 0, ',', '.')); ?></td>
                                <td><?php echo e(date("d-m-Y", strtotime($row->tgl_invoice))); ?></td>
                                <td>
                                    <?php if(auth()->user()->role == 1): ?>
                                        <a href="<?php echo e(route('admin.detinv', $row->no_invoice)); ?>"
                                        class="btn btn-primary btn-sm"><i class="fas fa-fw fa-search"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('seller.detinv', $row->no_invoice)); ?>"
                                        class="btn btn-primary btn-sm"><i class="fas fa-fw fa-search"></i></a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/invoice/index.blade.php ENDPATH**/ ?>