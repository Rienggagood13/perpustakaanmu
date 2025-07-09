<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section st-color container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Pesanan Saya</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
    
        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <table class="table table-striped table-bordered" id="mytabel" width="100%">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No.</th>
                                        <th scope="col">No. Pesanan</th>
                                        <th scope="col">Toko</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Tgl. Pesanan</th>
                                        <th scope="col" width = '20%'>Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center">
                                            <td></td>
                                            <td><?php echo e($row->no_pesanan); ?></td>
                                            <td class="text-capitalize"><?php echo e($row->store->nama_toko); ?></td>
                                            <td>Rp. <?php echo e(number_format($row->subtotal, 0, ',', '.')); ?></td>
                                            <td><?php echo e(date("d-m-Y", strtotime($row->tgl_pesan))); ?></td>
                                            <?php if($row->status == 1): ?>
                                                <td> <span class="badge badge-danger">Menunggu Pembayaran</span></td>
                                            <?php elseif($row->status >= 2 && $row->status < 4): ?>
                                             <?php if($row->tipe_pembayaran == 0): ?>
                                            <td> 
                                                <small class="text-danger"><b>Menunggu Konfirmasi Pembayaran oleh Admin 15 Menit - 2 Jam</b></small>
                                            </td>   
                                             <?php else: ?>
                                             <td> <span class="badge badge-warning">Menunggu Pengiriman</span></td>   
                                             <?php endif; ?>
                                            <?php elseif($row->status == 4): ?>
                                                <?php if($row->bukti_bayar == null): ?>
                                                    <td> <span class="badge badge-warning">Menunggu Pengiriman</span></td>
                                                <?php else: ?>
                                                    <td> <span class="badge badge-success">Pesanan Tiba</span></td>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <td> <span class="badge badge-info">Pesanan Selesai</span></td>
                                            <?php endif; ?>
                                            <td>
                                                <?php if($row->status == 1): ?>
                                                <a href="<?php echo e(route('pembayaran', $row->no_pesanan)); ?>"
                                                    class="btn btn-info btn-sm">Bayar Pesanan</a>
                                                <?php endif; ?>
                                                <?php if($row->status == 4 && $row->bukti_bayar != null): ?>
                                                    
                                                    <button type="button" data-id="<?php echo e($row->no_pesanan); ?>" class="btn btn-info btn-sm modal_review" data-toggle="modal" data-target="#reviewModal">
                                                        Konfirmasi
                                                    </button>
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
        </section>
        <!-- Shoping Cart Section End -->

        <!-- Modal -->
    <div class="modal fade" id="reviewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>REVIEW TOKO</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pesanan/INV2309140001" method="POST" id="formReview">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <p class="text-dark text-center">Berikan Rating Pada Toko</p>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1"></label>
                    </div>
                    <div class="form-group">
                        <label for="ulasan">Ulasan</label>
                        <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Konfirmasi</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <script>
        $(document).on("click", ".modal_review", function() {
        var id = $(this).data('id');
        var url = '/pesanan/'+id;
        alert(url);
        $("#formReview").attr("action", url);

    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/list_pesanan.blade.php ENDPATH**/ ?>