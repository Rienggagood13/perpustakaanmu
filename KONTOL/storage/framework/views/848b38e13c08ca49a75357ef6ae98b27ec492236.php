    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="/"><img src="<?php echo e(asset('/dist/img/logo5.png')); ?>" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="/keranjang"><i class="fa fa-shopping-bag"></i> <span><?php echo e($totalCart); ?></span></a></li>
                <li>
                    <?php if(auth()->check()): ?>
                        <a href="<?php echo e(route('profile')); ?>" class="text-decoration-none text-dark"><i class="fa fa-user"></i> <?php echo e(auth()->user()->username); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-decoration-none text-dark"><i class="fa fa-user"></i> MASUK</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
            </div>
            <div class="header__top__right__auth">
                
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <?php if(auth()->check()): ?>
                    <?php if(auth()->user()->role != 1): ?>
                        <li class="<?php echo e(Request::is('pesanan-saya') ? 'active' : ''); ?>"><a href="<?php echo e(route('pesanan_saya')); ?>">Pesanan Saya</a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <li class="<?php echo e(Request::is('home') ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>">Beranda</a></li>
                <li class="<?php echo e(Request::is('shop') ? 'active' : ''); ?>"><a href="<?php echo e(route('shop')); ?>">Toko</a></li>
                <li class="<?php echo e(Request::is('about') ? 'active' : ''); ?>"><a href="<?php echo e(route('about')); ?>">Tentang</a></li>
                <li class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('contact')); ?>">Hubungi Kami</a></li>
                <?php if(auth()->check()): ?>
                <li ><a href="<?php echo e(route('logout')); ?>">Keluar</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social"></div>
        <div class="humberger__menu__contact">
            <ul></ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top" style="background-color: #8DC63F !important">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                          <ul>  <li>   <a href="/"><img src="<?php echo e(asset('/dist/img/logo6.png')); ?>" alt="" width="40%"></a></li></ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-2 te">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="<?php echo e(route('home')); ?>">Beranda</a>
                                <a href="<?php echo e(route('shop')); ?>">Toko</a>
                                <a href="<?php echo e(route('contact')); ?>">Hubung Kami</a>
                                <a href="<?php echo e(route('about')); ?>">Tentang</a>
                                <a href="/shop/keranjang" ><i class="fa fa-shopping-bag"></i> <span><?php echo e($totalCart); ?></span></a>
                            </div>
                            <div class="header__top__right__auth ">
                                <?php if(auth()->check()): ?>
                                    <div class="dropdown container ml-n3">
                                        <a class="dropdown-toggle container" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                            <span class="text-capitalize"><i class="fa fa-user"></i><?php echo e(auth()->user()->username); ?></span>
                                        </a>

                                        <div class="dropdown-menu container">
                                            <?php if(auth()->user()->role != 1): ?>
                                            <a class="dropdown-item text-dark" id="user-dropdown" href="<?php echo e(route('profile')); ?>">Profil Saya</a>
                                            <?php endif; ?>
                                            <?php if(auth()->user()->role == 2): ?>
                                            <a class="dropdown-item text-dark" id="user-dropdown" href="<?php echo e(route('seller.dashboard')); ?>">Beranda</a>
                                            <?php endif; ?>
                                            <?php if(auth()->user()->role == 1): ?>
                                            <a class="dropdown-item text-dark" id="user-dropdown" href="<?php echo e(route('admin.dashboard')); ?>">Beranda</a>
                                            <?php endif; ?>
                                            <?php if(auth()->user()->role != 1): ?>
                                            <a class="dropdown-item text-dark" id="user-dropdown" href="/pesanan-saya">Pesanan Saya</a>
                                            <?php endif; ?>
                                            <form action="/logout" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button class="dropdown-item" id="user-dropdown" style="font-size: 14px !important;">Keluar</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <a href="/login" class="ml-3"><i class="fa fa-user"></i> Masuk</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5">
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End --><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/partials/header_shop.blade.php ENDPATH**/ ?>