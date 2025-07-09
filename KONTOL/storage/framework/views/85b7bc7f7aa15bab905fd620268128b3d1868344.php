<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Kasep Klontong</title>

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

<body style="background-color: #2E7D18">
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="login-box mt-5">
                <div class="card">
                    <div class="pt-5 pb-3 px-4">
                        <div class=" card-body p-0">
                            <div class="text-center">
                                <h2 style="font-size: 40px; color: #0B3005"><i class="fa-solid fa-user"></i> MASUK</h2>
                                <hr class="garis mb-4">
                            </div>
                            <form method="POST" action="<?php echo e(route('login')); ?>" class="mt-0">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <div class="input-group <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text st-color">
                                                <span class="fas fa-fw fa-user"></span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="Username" name="username"
                                            autocomplete="off" autofocus>
                                    </div>
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class=" invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <div>
                                    <div class="input-group <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text st-color">
                                                <span class="fas fa-fw fa-lock"></span>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            placeholder="Password" name="password" autocomplete="off">
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class=" invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <small class="mb-4 float-right"><a href="<?php echo e(route('password.request')); ?>" class="text-decoration-none text-dark font-weight-bolder">Lupa Password?</a></small>
                                <button class="btn st-color btn-block font-weight-bolder" type="submit">MASUK</button>
                                <hr>
                                <div class="text-center mt-4">
                                    <p class="small">Belum Punya Akun? Silahkan
                                        <a href="<?php echo e(route('register')); ?>"
                                            class="text-decoration-none" style="color: #0B3005">
                                            <strong> REGISTRASI</strong>
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo e(asset('/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/dist/js/adminlte.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
    <?php if(Session::has('error')): ?>
        <script>
            var message = '<?php echo e(Session::get('error')); ?>';
            Swal.fire({
                title: 'Error!',
                text:  message,
                icon: 'error'
            });
        </script>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
        <script>
            var message = '<?php echo e(Session::get('success')); ?>';
            Swal.fire({
                title: 'Berhasil',
                text:  message,
                icon: 'success'
            });
        </script>
    <?php endif; ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/auth/login.blade.php ENDPATH**/ ?>