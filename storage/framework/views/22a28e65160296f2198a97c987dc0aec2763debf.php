<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card-header">Data Tag</div>
                  <div class="card-body">
                  <center>
                    <a href=<?php echo e(route('Tag.create')); ?> class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Tag</th>
                          <th scope="col">Slug</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($data->nama_tag); ?></td>
                            <td><?php echo e($data->slug); ?></td>
                            <td><a href="<?php echo e(route('Tag.edit', $data->id)); ?>" class="btn btn-warning">Edit Data</a></td>
                            <td><a  href="<?php echo e(route('Tag.show', $data->id)); ?>" class="btn btn-success"> Show Data</a></td>
                            <td><form action="<?php echo e(route('Tag.destroy', $data->id)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                            <input type ="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn -sm btn-danger">Hapus Data</button>
                            </form>
                        </td>
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                  </div>
            </div>
        </div>
    </div>
 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/tag/index.blade.php ENDPATH**/ ?>