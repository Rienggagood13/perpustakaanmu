<?php $__env->startSection('content'); ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section st-color container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Keranjang Belanja</h2>
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
                       
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Produk</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php if($totalCart != 0): ?>
                                    <tbody>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <img src="<?php echo e(asset('storage/'. $item->produk->foto_produk)); ?>" alt="" width="20%">
                                                    <h5 class="text-capitalize"><a href="<?php echo e(route('detail_produk', $item->produk->id)); ?>" class="text-decoration-none text-dark"><?php echo e($item->produk->nama_produk); ?></a></h5>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    Rp. <?php echo e(number_format($item->produk->harga_produk, 0, ',', '.')); ?>

                                                </td>
                                                <td class="shoping__cart__quantity">
                                                    <div class="quantity">
                                                        <form action="<?php echo e(route('update_qty', $item->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="pro-qty">
                                                                <input type="text" value="<?php echo e($item->qty); ?>" name="qty" autocomplete="off" readonly>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="shoping__cart__total">
                                                    Rp. <?php echo e(number_format($item->subtotal, 0, ',', '.')); ?>

                                                </td>
                                                <td class="shoping__cart__item__close">
                                                    <form action="<?php echo e(route('delete_qty', $item->id)); ?>" method="POST">
                                                        <?php echo method_field('delete'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button class="icon_close border-0 rounded-circle btn btn-light" type="submit"></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    <?php else: ?>
                                    <tbody>
                                        <td colspan="4">Tidak Ada Sayuran Dalam Keranjang</td>
                                    </tbody>
                                    <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if($totalCart != 0): ?>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="shoping__cart__btns">
                            <a href="<?php echo e(route('shop')); ?>" class="primary-btn cart-btn">Toko</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shoping__checkout mt-n1">
                            <h5>Total Keranjang</h5>
                            <ul>
                                <li>Subtotal <span> Rp. <?php echo e(number_format($subtotal, 0, ',', '.')); ?></span></li>
                                <li>Total <span> Rp. <?php echo e(number_format($subtotal, 0, ',', '.')); ?></span></li>
                            </ul>
                            <a href="/shop/konfirmasi-pesanan" class="primary-btn">Proses Pesanan</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- Shoping Cart Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/main/keranjang.blade.php ENDPATH**/ ?>