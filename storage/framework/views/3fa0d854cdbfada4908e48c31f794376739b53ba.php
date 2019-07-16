<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <center>
                        <a href= <?php echo e(route('Kategori.create')); ?> class="btn btn-success">Tambah Data</a>
                    </center>
                    <br>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Slug</th>
                                <th scope="col" colspan="3" style="text-align: center,">Aksi</th>
                            </tr>
                        </thead>

                            <?php  $no=1; ?>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($data->nama_kategori); ?></td>
                                    <td><?php echo e($data->slug); ?></td>
                                    <td><a href="<?php echo e(route('Kategori.edit', $data->id)); ?>" class="btn btn-warning">Edit Data</td></a>
                                    <td><a href= "<?php echo e(route('Kategori.show', $data->id)); ?>" class="btn btn-success">Show Data</td></a>
                                    <td><form action="<?php echo e(route('Kategori.destroy', $data->id)); ?>"method="post">
                                      <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                        <button  class="btn btn -sm btn-danger" type="submit" >Hapus Data</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/Kategori/index.blade.php ENDPATH**/ ?>