
<?php $__env->startSection('content'); ?>
    <section class="container">
        <form action="<?php echo e(url('article/' . $query->id )); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="_method" value="PUT">
            <label for="title">title</label><input type="text" name="title" class="form-control" value="<?php echo e($query->title); ?>">
            <label for="content">content</label><textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo e($query->content); ?></textarea>
            <?php if(empty($query->image_path) == false): ?>
                <div>
                    <img src="<?php echo e(asset('uploads/'. $query->image_path)); ?>" alt="<?php echo e($query->title); ?>" srcset="">
                </div>
            <?php endif; ?>
            <input type="file" name="file" id="inputFile" class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <label for="active">active</label><input type="checkbox" name="active" value="Y" <?php echo e(($query->active === 'Y' ? 'checked' : '')); ?> ><br>
            <input type="submit" value="送出" class="btn btn-primary">
        </form>
        <?php if(count($errors) > 0): ?>
        <div class="errors-container">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\youwotest\resources\views/article/edit.blade.php ENDPATH**/ ?>