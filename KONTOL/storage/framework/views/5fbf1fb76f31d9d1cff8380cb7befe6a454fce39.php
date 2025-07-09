

<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section st-color container" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Toko KASEP KLONTONG</h2>
                      </div>
                  </div>
                </div>
            </div>
        </section>
        
        <!-- Breadcrumb Section End -->
    
        <!-- Product Section Begin -->
        <section class="product spad mt-n5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form  action="<?php echo e(url('/shop')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="hero__search__categories">
                                        Pencarian
                                    </div>
                                    <input type="text" placeholder="Cari Toko..." autocomplete="off" name="keyword" class="text-dark" value="<?php echo e(($keyword != null) ? $keyword : ''); ?>">
                                    <button type="submit" class="site-btn">Cari</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="filter__item mt-n3">
                            <div class="row">
                            </div>
                        </div>
                        <div class="row mt-n5">
                            <?php $__currentLoopData = $toko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6">
                                <div class="card ml-4 mt-3 px-2 py-2 pb-0 border-left-primary" style="max-width: 520px; max-height: 200px !important;" id="">
                                    <div class="row no-gutters">
                                    <div class="col-sm-4">
                                        <img src="<?php echo e(asset('/dist/img/logo2.png')); ?>" alt="" class="mt-1 border border-dark" style="border-color: #0b3005 !important; max-height: 100%; max-width: 100% !important;" width="100%">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                        <h5 class="card-title text-capitalize"><b><?php echo e($item->nama_toko); ?></b></h5>
                                        <p class="card-text" style="font-size: 15px !important;"><?php echo e($item->alamat_toko); ?></p>
                                        <p class="card-text mt-n3"><small class="text-muted"><?php echo e($item->notelp_toko); ?></small></p>
                                        <a href="<?php echo e(route('detail_shop', $item->id)); ?>" class="btn btn-style float-right mt-0 px-4">Kunjungi Toko <i class="fas fa-fw fa-sign-in-alt"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <?php echo e($toko->links()); ?>

                                </div>
                                <div class="pull-right">
                                    <small>
                                        Showing
                                        <?php echo e($toko->firstItem()); ?>

                                        To
                                        <?php echo e($toko->lastItem()); ?>

                                        Of
                                        <?php echo e($toko->total()); ?>

                                        Items
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
      <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
      </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/shop_list.blade.php ENDPATH**/ ?>