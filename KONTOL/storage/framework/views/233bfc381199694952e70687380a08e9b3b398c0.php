
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?> | KASEP KLONTONG</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script>moment.locale('id');</script>
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/template/css/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-select/bootstrap-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker/bootstrap-datepicker.css')); ?>">
    
    <script src="<?php echo e(asset('/template/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('/css/toastr/toastr.css')); ?>">
    <style>      
        .pagination > li > a,
        .pagination > li > span {
            color: #0b3005; // use your own color here
        }

        .pagination > .active > a,
        .pagination > .active > a:focus,
        .pagination > .active > a:hover,
        .pagination > .active > span,
        .pagination > .active > span:focus,
        .pagination > .active > span:hover {
            background-color: #8DC63F !important;
            border-color: #8DC63F !important;
            color: white;
        }
    </style>
</head>

<body>

    <?php echo $__env->make('partials.header_shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

   
    <footer class="footer spad" style="background-color: #8DC63F !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-light">Copyright &copy;<?php echo e(date('Y')); ?> Kasep_Code</p> </div>
                </div>
            </div>
        </div>
    </footer>

   
    <script src="<?php echo e(asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/template/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/template/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('/template/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/template/js/mixitup.min.js')); ?>"></script>

    <script src="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>

    <script src="<?php echo e(asset('/js/bootstrap-filestyle/bootstrap-filestyle.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('/js/bootstrap-select/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/toastr/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/jquery-mask/jquery.mask.js')); ?>"></script>
    <script src="<?php echo e(asset('/template/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/myjs.js')); ?>"></script>
    <?php if(Session::has('success')): ?>
    <script>
            var message = '<?php echo e(Session::get('success')); ?>';
            toastr.info(message);
    </script>
    <?php endif; ?>

    <script>
         $(document).ready(function() {
            $("#stock_habis").click(function() {
                toastr.error('Stock Tidak Tersedia');
                // You can add your code to execute when the button is clicked here
            });
        });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/layouts/shop.blade.php ENDPATH**/ ?>