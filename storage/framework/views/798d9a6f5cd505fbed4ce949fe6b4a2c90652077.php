<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <br>
                <form action="<?php echo e(route('Kategori.store')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>


                  <div class="form-group">
                      <label for="">Kategori</label>
                      <input class="form-control" type="text" name="nama_kategori">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-outline-info">
                          Simpan Data
                      </button>
                  </div>
                  <div class="fotm-group">
                      <a href="<?php echo e(url('Kategori')); ?>" class="btn btn-outline-info">Kembali</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/Kategori/create.blade.php ENDPATH**/ ?>