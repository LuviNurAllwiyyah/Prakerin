<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Data Artikel</div>
                  <div class="card-body">
                  <center>
                    <a href=<?php echo e(route('Artikel.create')); ?> class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Penulis</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($data->judul); ?></td>
                                <td><?php echo e($data->slug); ?></td>
                                <td><?php echo e($data->kategori->nama_kategori); ?></td>
                                <td>
                                        <ol>
                                            <?php $__currentLoopData = $data->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($tag->nama_tag); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ol>
                                </td>
                                <td><?php echo e($data->user->name); ?></td>
                                <td>
                                <img src="<?php echo e(asset('assets/img/artikel/'.$data->foto.'')); ?>"
                                     style="width:100px; height:100px;" alt="foto"
                                     class="card-img img-fluid mb-4">
                                </td>

                                    <td>
                                    <form action="<?php echo e(route('Artikel.destroy',$data->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="<?php echo e(route('Artikel.edit',$data->id)); ?>" class="btn btn-md btn-warning btn-floating">Edit</li></a>
                                                                                <a href="<?php echo e(url('/')); ?>" class="btn btn-md btn-success btn-floating" >Show</a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Delete</button>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/Artikel/index.blade.php ENDPATH**/ ?>