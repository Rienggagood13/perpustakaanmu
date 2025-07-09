<?php $__env->startSection('content'); ?>
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section st-color container">
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
                <form action="/shop/proses_pesanan" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <div class="form-group mb-4">
                                <label for="tipe_pembayaran">Tipe Pembayaran</label>
                                <select class="form-control selectpicker border <?php $__errorArgs = ['tipe_pembayaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tipe_pembayaran" name="tipe_pembayaran" data-size="4" data-live-search="true" title="Pilih Tipe Pembayaran">
                                    <option value="0" 
                                    <?php if(old('tipe_pembayaran') == "0"): ?>
                                        selected
                                    <?php endif; ?>>Transfer Bank</option>
                                    <option value="1"  <?php if(old('tipe_pembayaran') == "1"): ?>
                                    selected
                                <?php endif; ?>>COD (<i>Cash On Delivery</i>)</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="nama_penerima">Nama Penerima</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['nama_penerima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_penerima" name="nama_penerima" autocomplete="off" value="<?php echo e(old('nama_penerima')); ?>" autofocus>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                  <label for="notelp_penerima">No. Telp Penerima</label>
                                  <input type="text" class="form-control <?php $__errorArgs = ['notelp_penerima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="notelp_penerima" name="notelp_penerima" value="<?php echo e(old('notelp_penerima', auth()->user()->notelp)); ?>" autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="email">Email</label>
                                  <input type="text" class="form-control" id="email" name="email" value="<?php echo e(auth()->user()->email); ?>" readonly>
                                </div>
                              </div>
                            <div class="form-group mb-4">
                                <label for="kabupaten">Kabupaten</label>
                                <select class="form-control selectpicker border <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kabupaten" name="kabupaten" data-size="4" data-live-search="true" title="Pilih Kabupaten">
                                    <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->kabupaten->id); ?>"><?php echo e($row->kabupaten->nama_kab); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control selectpicker border <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kecamatan" name="kecamatan" title="Pilih Kecamatan" data-size="4" data-live-search="true">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="alamat_penerima">Alamat Pengiriman</label>
                                <textarea class="form-control <?php $__errorArgs = ['alamat_penerima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat_penerima" rows="2" name="alamat_penerima" autocomplete="off"><?php echo e(auth()->user()->alamat); ?></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="catatan">Catatan Pesanan</label>
                                <textarea class="form-control <?php $__errorArgs = ['catatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="catatan" rows="3" name="catatan" autocomplete="off"><?php echo e(old('catatan')); ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="checkout__order">
                                <h4>Detail Pesanan</h4>
                                <div class="checkout__order__products">Items <span>Total</span></div>
                                <ul>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><b class="text-capitalize font-weight-normal"><?php echo e($item->produk->nama_produk); ?></b> (x<?php echo e($item->qty); ?>)  <span>Rp. <?php echo e(number_format($item->subtotal, 0, ',', '.')); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp. <?php echo e(number_format($subtotal, 0, ',', '.')); ?></span></div>
                                <div class="checkout__order__subtotal mt-n3">Ongkir <span id="ongkir">Rp. <?php echo e(number_format(0, 0, ',', '.')); ?></span></div>
                                <div class="checkout__order__total">Total <span id="total">Rp. <?php echo e(number_format($subtotal, 0, ',', '.')); ?></span></div>
                                <button type="submit" class="site-btn">Konfirmasi Pesanan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <script>
        $("#kabupaten").change(function() {
            var id = $(this).val();
            var store = <?php echo e($store); ?>;
            var url = "/kec_checkout";
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: "post",
                url: url,
                dataType: "html",
                data: {
                    "_token": token,
                    "id_store": store,
                    "id_kab" : id
                },
                success: function(msg) {
                    // alert('OK');
                    $("#kecamatan").html(msg).selectpicker('refresh');
                    $("#kecamatan").selectpicker('refresh');
                }
            });
        });

        $("#kecamatan").change(function() {  
            var idkec = $(this).val();
            var idkab = $("#kabupaten").val();
            var token = $("meta[name='csrf-token']").attr("content");
            var url = "/shop/detail_ongkir";
            $.ajax({
                type: 'POST',
                url: url,
                dataType: "html",
                data: {
                    "_token": token,
                    "idkab": idkab,
                    "idkec": idkec
                },
                success: function(msg) {
                    let tmp = JSON.parse(msg)
                    if (tmp.ongkir == '0') {
                        $('#ongkir').html('Gratis Ongkir!');
                    } else {
                        $('#ongkir').html('Rp. ' + tmp.ongkir);
                    }
                    $('#total').html('Rp.' + tmp.total);
                },
                error: function(data){
                    alert(data.message);
                }
            });
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/konfirmasi_pesanan.blade.php ENDPATH**/ ?>