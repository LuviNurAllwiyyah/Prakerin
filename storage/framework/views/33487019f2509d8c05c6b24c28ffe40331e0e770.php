<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Artikel</div>

         <div class="card-body">
                <form action="<?php echo e(route('Artikel.update', $artikel->id)); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control " value="<?php echo e($artikel->judul); ?>" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br>

                    <p>
                            <img src="<?php echo e(asset('assets/img/artikel/'.$artikel->foto.'')); ?>"
                            style="margin-top:15px;
                                   margin-bottom:15px;
                                   width:100px;
                                   height:100px;" alt="foto"
                            class="card-img img-fluid mb-4">
                    </p>

                    <div class="custom-file">
                    <input type="file" class="custom-file-input" multiple="" id="validatedCustomFile" name="foto" value="<?php echo e($artikel->foto); ?>">
                    <label class="custom-file-label" for="validatedCustomFile"><?php echo e($artikel->foto); ?></label>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select class="form-control" name="id_kategori">
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"
                    <?php echo e($artikel->id_kategori == $data->id ? ' selected="selected" ':''); ?>><?php echo e($data->nama_kategori); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tag</label>
                    <select name="tag[]" class="form-control multiple" id="s2_demo3" multiple>
                        <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"
                        <?php echo e((in_array($data->id, $selected)) ? 'selected="selected"':''); ?>> <?php echo e($data->nama_tag); ?>

                    </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" class="form-control" id="editor1"><?php echo e($artikel->konten); ?></textarea>

                </div>
                <div class="form-group">
                        <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
                </form>
                </div>
                </div>
                    </div>
                        </div>
                            </div>
                                <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Prakerinluvi\resources\views/backend/Artikel/edit.blade.php ENDPATH**/ ?>