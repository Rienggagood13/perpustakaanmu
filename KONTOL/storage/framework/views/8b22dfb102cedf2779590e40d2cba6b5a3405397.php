<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Reset Password Kasep Klontong</title>

    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body style="background-color: #0B3005">
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header font-weight-bolder text-center"><?php echo e(__('Request Reset Password Mai Sayur')); ?></div>
    
                    <div class="card-body px-4 pb-3">
                        

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-3 d-flex justify-content-center">
                          <div class="col-lg-11">
                            <img src="/dist/img/logo6.png" width="80%" class="tengah shadow-sm p-3 mb-2 bg-white rounded" alt="">
                            <input id="email" type="email" class="form-control mt-4 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off" placeholder="Email Address">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <button type="submit" class="btn btn-style d-flex justify-content-center">
                                <?php echo e(__('KIRIM RESET PASSWORD')); ?>

                            </button>
                        </div>
                        <p class="text-center mt-3">Kembali ke <a href="<?php echo e(route('login')); ?>" class="text-decoration-none text-dark"><b>Login</b></a></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo e(asset('/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/adminlte.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>

    <?php if(session('status')): ?>
    <script>
        Swal.fire({
            text:  'Link Verifikasi sudah dikirimkan ke email anda!',
            icon: 'success'
        });
    </script>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>