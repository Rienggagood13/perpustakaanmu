


<?php $__env->startSection('content'); ?>
        <section class="breadcrumb-section st-color container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-11">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5">
                                <div class="card px-3 py-3" style="background-color: #0B3005">
                                 <div class="card-body">
                                    <img src="/dist/img/logo2.png" alt="" width="70%" class="tengah mb-4">
                                    <form action="" method="POST">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="username" class="text-light">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" disabled value="<?php echo e($user->username); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="text-light">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" disabled value="<?php echo e($user->email); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="notelp" class="text-light">No. Telp</label>
                                            <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo e($user->notelp); ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="alamat" class="text-light">Alamat</label>
                                            <textarea class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat" rows="2" name="alamat" autocomplete="off"><?php echo e($user->alamat); ?></textarea>
                                        </div>
                                        <button class="btn btn-light font-weight-bolder" type="submit">Update Profile</button>
                                    </form>
                                    <hr style="background-color: white;">
                                    <a href="<?php echo e(route('update_password')); ?>"  class="btn btn-danger btn-sm px-4 mt-3 mb-3">Ganti Password</a>
                                   <?php if(auth()->user()->role == 2): ?>
                                        <a href="/seller" class="btn btn-light btn-sm px-4 mt-3 mb-3 float-right">Dashboard Seller</a>
                                    <?php elseif(auth()->user()->role == 3 && ($store == null || $store->is_active == 2)): ?>
                                        <a href="<?php echo e(route('register_seller')); ?>" class="btn btn-light btn-sm px-4 mt-3 mb-3 float-right">Daftar Seller</a>
                                    <?php endif; ?>
                                    <?php if(auth()->user()->role == 3 && ($store != null && $store->is_active == 0)): ?>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            <small class="badge badge-light text-center text-secondary font-weight-bolder px-4 py-1 rounded-pill">Pendaftaran Seller Menunggu Konfirmasi Administrator</small>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(auth()->user()->role == 3 && ($store != null && $store->is_active == 2)): ?>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            <small class="text-danger text-center font-weight-bolder badge badge-light px-5 py-1 rounded-pill">Pendaftaran Seller Anda Ditolak!</small>
                                        </div>
                                    <?php endif; ?>
                                 </div>
                                </div>
                             </div>
                            <div class="col-lg-7">
                                <div class="section-title related-blog-title">
                                    <h2>FaQ</h2>
                                    <div class="py-3">
                                      
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
                                                            Q. Bagaimana kebtuhan dapur dan sayuran kami dapat diterima?
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
                                                        <b>Answer:</b>  Kasep Klontong dapat menerima pesana 24 jam, namun akan dikonfirmasi oleh admin dan penjual dari pukul 07.00 AM - 15.00 PM
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--container-->
                                      
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/user/profile.blade.php ENDPATH**/ ?>