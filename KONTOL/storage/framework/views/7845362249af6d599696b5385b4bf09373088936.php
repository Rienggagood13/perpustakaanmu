<?php $__env->startSection('content'); ?>
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg st-color container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Konfirmasi Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Detail Pesanan</h4>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <form action="<?php echo e(route('pembayaran', $pesanan->no_pesanan)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-4">
                                    <label for="no_pesanan">Nomor Pesanan</label>
                                    <input type="text" class="form-control" id="no_pesanan" value="<?php echo e($pesanan->no_pesanan); ?>" disabled>
                                </div>
                                <label for="">Tanggal Pembayaran</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control  <?php $__errorArgs = ['tgl_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tgl_bayar" value="<?php echo e(old('tgl_bayar')); ?>" id="tanggal" placeholder="dd-mm-yyyy" autocomplete="off">
                                    <div class="input-group-append">
                                      <span class="input-group-text px-3 st-color" id="basic-addon2"><i class="fas fa-fw fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="bukti_bayar">Bukti Pembayaran</label>
                                    <input type="file" class="file-bayar" id="bukti_bayar" name="bukti_bayar">
                                </div>
                                <a href="/shop" class="btn site-btn text-dark border border-secondary" style="background-color: white;">SHOP</a>
                                <button class="btn site-btn float-right">KIRIM</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pembayaran</h4>
                                <div class="checkout__order__products">Bank <span>Rekening</span></div>
                                <ul>
                                    <li>BCA<span>74394384393</span></li>
                                    <li>MANDIRI<span>74394384393</span></li>
                                    <li>BRI<span>74394384393</span></li>
                                </ul>
                                <p class="text-justify">Pembayaran dapat di transfer pada salah satu daftar rekening diatas.</p>
                            </div>
                            <div class="checkout__order mt-5">
                                <h4>Detail Pesanan</h4>
                                <div class="checkout__order__products">Items <span>Total</span></div>
                                <ul>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($item->produk->nama_produk . ' (x'.  $item->qty . ')'); ?>  <span>Rp. <?php echo e(number_format($item->subtotal, 0, ',', '.')); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp. <?php echo e(number_format($pesanan->subtotal, 0, ',', '.')); ?></span></div>
                                <div class="checkout__order__subtotal mt-n3">Ongkir <span id="ongkir">Rp. <?php echo e(number_format($pesanan->ongkir, 0, ',', '.')); ?></span></div>
                                <div class="checkout__order__total">Total <span id="total">Rp. <?php echo e(number_format($pesanan->total, 0, ',', '.')); ?></span></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <script>
        var dateToday = new Date(); 
         $('#tanggal').datepicker({
            todayBtn: "linked",
            orientation: "bottom auto",
            todayHighlight: true,
            // startDate: new Date(),
            autoHide: true,
            format: 'dd-mm-yyyy',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/konfirmasi_pembayaran.blade.php ENDPATH**/ ?>