<?php $__env->startSection('content'); ?>
<div class ="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header"></div>
                   <br>
                   <form action="<?php echo e(route('Tag.update', $tag->id)); ?>" method="post">
                    <input type="hidden" name="_method" value="PATCH">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Tag</label>
                      <input type="text" class="form-control" name="nama_tag" value="<?php echo e($tag->nama_tag); ?>">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Simpan data</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/Tag/edit.blade.php ENDPATH**/ ?>