<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESET PASSWORD | KASEP KLONTONG</title>

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
            <div class="col-md-5">
                <div class="card px-3">
                    <div class="card-header font-weight-bolder py-4 text-center" style="font-size: 20px;"><?php echo e(__('Kasep Klontong Reset Password')); ?></div>
    
                    <div class="card-body">
                        <img src="/dist/img/logo6.png" width="80%" class="tengah shadow-sm mb-4 bg-white rounded" alt="">
                        <form method="POST" action="<?php echo e(route('password.update')); ?>">
                            <?php echo csrf_field(); ?>
    
                            <input type="hidden" name="token" value="<?php echo e($token); ?>">
    
                            <div class="mb-3">
                                <div class="input-group <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-light" style="background-color: #0B3005">
                                            <span class="fas fa-fw fa-at"></span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="email" name="email" autocomplete="off" placeholder="Email" value="<?php echo e($email ?? old('email')); ?>">
                                </div>
                                <?php $__errorArgs = ['email'];
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
    
                            <div class="mb-3">
                                <div class="input-group <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-light" style="background-color: #0B3005">
                                            <span class="fas fa-fw fa-lock"></span>
                                        </span>
                                    </div>
                                   <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Password Baru">
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
    
                            <div class="mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-light" style="background-color: #0B3005">
                                            <span class="fas fa-fw fa-lock"></span>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                                </div>
                            </div> 
                            <div class="row d-flex justify-content-center">
                                <button type="submit" class="btn btn-style">
                                    <?php echo e(__('Reset Password')); ?>

                                </button>   
                              
                            </div>
                            <div class="row mt-2 mb-3 d-flex justify-content-center">
                               <small> Kembali Ke <a href="<?php echo e(route('login')); ?>" class="text-center text-dark"><u>Login!</u></a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo e(asset('/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>