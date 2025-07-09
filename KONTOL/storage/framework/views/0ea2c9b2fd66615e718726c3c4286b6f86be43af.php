<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('/produk/' . $produk->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <div class="row mb-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-primary text-light font-weight-bolder">
                    Deskripsi Sayuran
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_produk" class="text-dark">Nama Sayur</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="nama_produk" name="nama_produk" autocomplete="off"
                            value="<?php echo e(old('nama_produk', $produk->nama_produk)); ?>" autofocus>
                        <?php $__errorArgs = ['nama_produk'];
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
                    <div class="form-group">
                        <label for="desc_produk" class="tex">Deskripsi Sayur</label>
                        <?php $__errorArgs = ['desc_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class=" invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input id="desc_produk" type="hidden" name="desc_produk" value="<?php echo e(old('desc_produk', $produk->desc_produk)); ?>">
                        <trix-editor input="desc_produk" class="<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></trix-editor>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-primary text-light font-weight-bolder">
                    Detail Sayuran
                </div>
                <div class="card-body">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitches" name="stock" checked>
                        <label class="custom-control-label text-primary font-weight-bolder" for="customSwitches" id="labelStock">
                            <?php if($produk->stock_produk == 1): ?>
                                Stock Tersedia                                
                            <?php else: ?>
                                Stock Tidak Tersedia
                            <?php endif; ?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="harga_produk" class="text-dark">Harga Sayur</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary text-light font-weight-bolder px-3" id="basic-addon2">Rp</span>
                            </div>
                            <input type="text" class="form-control uang <?php $__errorArgs = ['harga_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga_produk" name="harga_produk" autocomplete="off" value="<?php echo e(old('harga_produk', $produk->harga_produk)); ?>">
                        </div>
                        <?php $__errorArgs = ['harga_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="foto_produk" class="text-dark mt-3">Foto Sayur</label>
                            <input type="file" class="input-file" id="foto_produk" name="foto_produk" onchange="previewImage()" >
                            <h6 class="text-center font-weight-bolder mt-3">Preview Foto Sayur</h6>
                            <hr>
                            <img src="<?php echo e(asset('storage/' . $produk->foto_produk)); ?>" class="tengah img-preview img-fluid mb-3 tengah" style="max-width: 280px; max-height: 280px;">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-style btn-block py-2 float-right mb-3 mt-3" type="submit">Simpan</button>
        </div>
    </div>
</form>



   <script>

    var check;
    $('#customSwitches').click(function() {
    if($(this).is(':checked')){
        $("#labelStock").attr('class', 'custom-control-label text-primary font-weight-bolder');
        $('#labelStock').html('Stock Tersedia');  
    } 
    else{
        $("#labelStock").attr('class', 'custom-control-label text-danger font-weight-bolder');
        $('#labelStock').html('Stock Tidak Tersedia');
    }
    });

      $('trix-editor').css("min-height", "200px");
      document.addEventListener('trix-file-accept', function(e) {
         e.preventDefault();
      })

      
      function previewImage() {
      const image = document.querySelector('#foto_produk');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0])

      oFReader.onload = function(oFREvent) {
         imgPreview.src = oFREvent.target.result;
      }
   }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klontong_kasep\resources\views/produk/update_produk.blade.php ENDPATH**/ ?>