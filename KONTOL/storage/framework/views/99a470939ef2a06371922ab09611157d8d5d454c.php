
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small text-capitalize">
                    <?php if(strlen(auth()->user()->username) > 10): ?>
                    <?php echo e(substr(auth()->user()->username, 0, 10) . '...'); ?>

                    <?php else: ?>
                        <?php echo e(strip_tags(auth()->user()->username)); ?>

                    <?php endif; ?>
                </span>
                <img class="img-profile rounded-circle"
                 src="/sb-admin/img/undraw_profile.svg">
            </a>
          
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e((auth()->user()->role == 2) ? route('seller.profile') : route('admin.profile')); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <?php if(auth()->user()->role == 2): ?>
                <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                    Halaman Depan
                </a>
                <?php endif; ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar --><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/partials/navbar.blade.php ENDPATH**/ ?>