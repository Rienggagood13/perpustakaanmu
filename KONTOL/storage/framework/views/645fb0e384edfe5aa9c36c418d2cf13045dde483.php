


<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section st-color container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Registrasi Seller</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
    
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card px-3 pt-3 pb-4" style="background-color: #0B3005">
                                 <div class="card-body">
                                    <img src="/dist/img/logo2.png" alt="" width="70%" class="tengah mb-4">
                                     <form action="<?php echo e(route('register_seller')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nama_toko" class="text-light">Nama Toko</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['nama_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="nama_toko" name="nama_toko" autocomplete="off" value="<?php echo e(old('nama_toko')); ?>"
                                                autofocus>
                                            <?php $__errorArgs = ['nama_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class=" invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="notelp_toko" class="text-light">No. Telp Toko</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['notelp_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="notelp_toko" name="notelp_toko" autocomplete="off" value="<?php echo e(old('notelp_toko')); ?>"
                                                autofocus>
                                            <?php $__errorArgs = ['notelp_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class=" invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="alamat_toko" class="text-light">Alamat Toko</label>
                                            <textarea class="form-control <?php $__errorArgs = ['alamat_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat_toko" rows="2" name="alamat_toko" autocomplete="off"></textarea>
                                            <?php $__errorArgs = ['alamat_toko'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="text-danger"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <a href="<?php echo e(route('profile')); ?>" class="btn btn-danger px-3">Kembali</a>
                                        <button class="btn btn-light float-right px-3">Daftar</button>
                                    </form>
                                 </div>
                                </div>
                             </div>
                            <div class="col-lg-7">
                                <div class="section-title related-blog-title">
                                    <h2>FaQ</h2>
                                    <div class="accordion mt-4" id="faqExample">
                                        <div class="card">
                                            <div class="card-header p-2 st-color" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Q: Apa itu Kasep Klontong?
                                                    </button>
                                                    </h5>
                                            </div>
                        
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                                <div class="card-body">
                                                    <b>Answer:</b> Kasep Klontong adalah toko online yang dapat digunakan untuk memesan kebutuhan dapur dan sayuran melalui aplikasi berbasis website
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header p-2 st-color" id="headingTwo">
                                                <h5 class="mb-0">
                                                <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Q: Bagaimana Cara memesan sayur di Kasep Klontong?
                                                </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                                <div class="card-body text-left">
                                                <b>Answer:</b> <br>
                                                  1. Customer dapat memilih sayuran yang diinginkan <br>
                                                  2. Customer dapat melakukan konfirmasi pemesanan dan pembayaran <br>
                                                  3. Customer dapat menunggu sampai sayuran diterima <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header p-2 st-color" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Q. Bagaimana sayuran kami dapat diterima?
                                                    </button>
                                                    </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                                <div class="card-body">
                                                <b>Answer:</b> Kasep Klontong menyediakan jasa pengiriman sesuai dengan harga dari masing-masing penjual sayur yang sudah ditentukan sesuai lokasi customer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header p-2 st-color" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q. Jam Buka Pesanan Kasep Klontong?
                                                    </button>
                                                    </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                                                <div class="card-body">
                                                    <b>Answer:</b>  Kasep Klontong dapat menerima pesana 24 jam, namun akan dikonfirmasi oleh admin dan penjual dari pukul 07.00 AM - 17.00 PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/auth/regis_seller.blade.php ENDPATH**/ ?>