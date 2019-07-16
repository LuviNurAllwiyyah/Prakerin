<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <div class="card-header">Data Artikel</div>
                  <div class="card-body">
                  <center>
                    <a href=<?php echo e(route('Artikel.create')); ?> class="btn btn-outline-primary">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                
                                <th>Tag</th>
                                <th>Kategori</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php $no =1; ?>
                <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($data->judul); ?></td>
                    <td><img src="<?php echo e(asset('assets/img/Artikel/'.$data->foto)); ?>" alt="" height="500px" width="500px"></td>
                    
                    <td>
                        <?php $__currentLoopData = $data->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($a->nama_tag); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($data->kategori->nama_kategori); ?></td>
                    <td><a href="<?php echo e(route('Artikel.edit', $data->id)); ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="<?php echo e(route('Artikel.show', $data->id)); ?>" class="btn btn-success">Detail Data</a></td>
                    <td><form action="<?php echo e(route('Artikel.destroy', $data->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
 </div>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/artikel/index.blade.php ENDPATH**/ ?>