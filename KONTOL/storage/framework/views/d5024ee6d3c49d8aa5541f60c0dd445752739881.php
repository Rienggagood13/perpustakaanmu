<?php $__env->startSection('content'); ?>
    
    <!-- Breadcrumb Section Begin -->
    <section class="container breadcrumb-section set-bg st-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 class="text-capitalize"><?php echo e($produk->nama_produk); ?></h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo e(route('home')); ?>">Beranda</a>
                            <a href="<?php echo e(route('shop')); ?>">Toko</a>
                            <span>Detail Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <img class="tengah" src="<?php echo e(asset('storage/' . $produk->foto_produk)); ?>" alt="" width="70%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3 class="text-capitalize"><?php echo e($produk->nama_produk); ?></h3>
                        <div class="product__details__price">Rp. <?php echo e(number_format($produk->harga_produk, 0, ',', '.')); ?></div>
                        <p class="text-justify pr-5"><?php echo e(strip_tags(Str::limit($produk->desc_produk, 200))); ?></p>
                        
                        <?php if(!auth()->check()): ?>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="qty" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <a href="/login" class="primary-btn">ADD TO CARD</a>
                        <?php else: ?>
                            <?php if(auth()->user()->email_verified_at == null): ?>
                                <div class="product__details__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" name="qty" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('verification.notice')); ?>" class="primary-btn">ADD TO CARD</a>
                            <?php else: ?>
                                <?php if($produk->stock_produk == 0): ?>
                                <a href="#" id="stock_habis" class="primary-btn">ADD TO CARD</a>
                                <?php else: ?>
                                <form action="<?php echo e(route('tambah_keranjang', $produk->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="product__details__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty" id="pro-qty">
                                                <input type="text" value="1" name="qty" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="keranjang" class="primary-btn border-0"><i class="fa fa-shopping-cart"></i></button>
                                </form>
                                <?php endif; ?>
                               
                            <?php endif; ?>     
                        <?php endif; ?>
                        <ul>
                            <li><b>Stock</b> 
                                <?php if($produk->stock_produk == 0): ?>
                                    <span>Tidak Tersedia</span>
                                <?php else: ?>
                                    <span>Tersedia</span>
                                <?php endif; ?>
                            </li>
                            <li><b>Store</b> <span class="text-capitalize"><?php echo e($produk->store->nama_toko); ?></span></li>
                            <li><b>Total Terjual</b> <span class="text-capitalize">
                                <?php if($sold->total > 10): ?>
                                    <?php echo e($sold->total); ?> Pcs
                                <?php else: ?>
                                    0<?php echo e($sold->total); ?> Pcs
                                <?php endif; ?>
                            </span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Deskripsi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc text-justify">
                                    <p><?php echo $produk->desc_produk; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <?php if(count($related) != 0): ?>
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Produk Lainnya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo e(asset('storage/'. $item->foto_produk)); ?>">
                        </div>
                        <div class="featured__item__text">
                            <h6 class="text-capitalize"><a href="/shop/detail-produk/<?php echo e($item->id); ?>"><?php echo e($item->nama_produk); ?></a></h6>
                            <h5>Rp.<?php echo e(number_format($item->harga_produk, 0, ',', '.')); ?></h5>
                        </div>
                    </div>
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Related Product Section End -->
    <script>
        $(document).on("click", "#keranjang", function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            var urlForm = $(this).parents('form').attr('action');
            var idProduk = urlForm.split(",");
            var idProduk = urlForm.split("/");
            idProduk = idProduk[5];
            var url = "/shop/cek_produk";
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: "post",
                url: url,
                dataType: "html",
                data: {
                    "_token": token,
                    "idProduk" : idProduk
                },
                success: function(msg) {
                    let tmp = JSON.parse(msg);
                    // alert(tmp.change);
                    if(tmp.change == 1){
                        Swal.fire({
                            title: 'Warning!',
                            text: "Anda memiliki item dari toko lain dalam keranjang, ganti item dari toko ini?",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#539165',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Pesan Item Ini!'
                            }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        })
                    }else{
                        form.submit();
                    }
                },error: function(){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Kesalahan Akun Privilege',
                        icon: 'error'
                    });
                }
            });
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/detail_produk.blade.php ENDPATH**/ ?>