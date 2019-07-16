<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <div class="card-header">Membuat Data Tag</div>
                  <br>
                  <form action="<?php echo e(route('Tag.store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>


                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tag</label>
                        <input type="text" class="form-control"  name="nama_tag">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                      </div>
                       <div class="form-group">
                          <a href="<?php echo e(url('Tag')); ?>" class="btn btn-outline-info">Kembali</a>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/tag/create.blade.php ENDPATH**/ ?>