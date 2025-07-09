
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e((auth()->user()->role == 2) ? route('seller.dashboard') : route('admin.dashboard')); ?>">
        
        <img src="<?php echo e(asset('/dist/img/logo6.png')); ?>" alt="" width="90%">
    </a>

    <hr class="sidebar-divider my-0">

    <?php if(auth()->user()->role == 2): ?>
    <li class="nav-item <?php echo e(Request::is('seller*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('seller.dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item <?php echo e(Request::is('produk*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('/produk')); ?>">
            <i class="fa-fw fas fa-leaf"></i>
            <span>Data Sayuran</span></a>
    </li>

    <li class="nav-item <?php echo e(Request::is('ongkir*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('/ongkir')); ?>">
            <i class="fas fa-fw fa-caravan"></i>
            <span>Data Ongkir</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        FITUR UTAMA
    </div>

    <li class="nav-item <?php echo e(Request::is('pesanan*') ? 'active' : ''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-archive"></i>
            <span>Pesanan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('/pesanan')); ?>">Data Pesanan</a>
                
                <a class="collapse-item" href="<?php echo e(route('seller.konfirmasi')); ?>">Konfirmasi Pesanan</a>
            </div>
        </div>
    </li>

    <li class="nav-item  <?php echo e(Request::is('invoice*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('seller.invoice')); ?>">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Laporan</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <?php else: ?>
     <li class="nav-item <?php echo e(Request::is('admin') || Request::is('admin/dashboard') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('admin')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>


    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item <?php echo e(Request::is('admin/produk*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(url('/admin/produk')); ?>">
            <i class="fa-fw fas fa-leaf"></i>
            <span>Data Sayuran</span></a>
    </li>

    <li class="nav-item  <?php echo e(Request::is('admin/user*') ? 'active' : ''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pengguna</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(url('/admin/user/customer')); ?>">Customer</a>
                <a class="collapse-item" href="<?php echo e(url('/admin/user/seller')); ?>">Seller</a>
                <a class="collapse-item" href="<?php echo e(url('/admin/user/admin')); ?>">Administrator</a>
            </div>
        </div>
    </li>
    
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        FITUR UTAMA
    </div>

    
    <li class="nav-item  <?php echo e(Request::is('admin/pesanan*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.pesanan')); ?>">
            <i class="fas fa-fw fa-archive"></i>
            <span>Pesanan</span></a>
    </li>

    <li class="nav-item  <?php echo e(Request::is('admin/invoice*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.invoice')); ?>">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Laporan</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <?php endif; ?>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>