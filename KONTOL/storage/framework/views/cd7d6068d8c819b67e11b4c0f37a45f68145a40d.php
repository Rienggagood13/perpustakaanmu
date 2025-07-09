<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KASEP KLONTONG">
    <meta name="author" content="MangDharma">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title); ?> | KASEP KLONTONG</title>

    <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script>moment.locale('id');</script>
    <link rel="stylesheet" href="<?php echo e(asset('/css/toastr/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-select/bootstrap-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/trix.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/sb-admin/css/sb-admin-2.css')); ?>">

    <script src="<?php echo e(asset('/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/trix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker/bootstrap-datepicker.js')); ?>"></script>

</head>

<body id="page-top">

    <div id="wrapper">

        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="container-fluid">
                   <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>


            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; KASEP KLONTONG <?php echo e(date('Y')); ?></span>
                    </div>
                </div>
            </footer>
        </div>

    </div>
   
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Keluar jika anda yakin mengakhiri sesi ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="/logout" method="POST">
                       <?php echo csrf_field(); ?>
                       <button class="btn btn-danger" type="submit">Keluar</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/sb-admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/sb-admin/js/sb-admin-2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/bootstrap-select/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/select/defaults-id_ID.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/toastr/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/jquery-mask/jquery.mask.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/bootstrap-filestyle/bootstrap-filestyle.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('/plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/myjs.js')); ?>"></script>
    <?php if(Session::has('success')): ?>
        <script>
            var message = '<?php echo e(Session::get('success')); ?>';
            Swal.fire({
                title: 'Success',
                text:  message,
                icon: 'success'
            });
        </script>   
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    <script>
        var message = '<?php echo e(Session::get('error')); ?>';
        Swal.fire({
            title: 'Error',
            text:  message,
            icon: 'error'
        });
    </script>   
<?php endif; ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/layouts/main.blade.php ENDPATH**/ ?>