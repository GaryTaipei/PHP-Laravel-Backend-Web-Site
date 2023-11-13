
<?php $__env->startSection('content'); ?>
    <section class="container">
        <form action="<?php echo e(url('article')); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <label for="title">title</label><input type="text" name="title" class="form-control" >
            <label for="content">content</label><textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            <label class="form-label" for="inputFile">File:</label>
            <input type="file" name="file" id="inputFile" class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="active">active</label><input type="checkbox" name="active" value="Y"><br>
            <input type="submit" value="送出" class="btn btn-primary">
        </form>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\youwotest\resources\views/article/create.blade.php ENDPATH**/ ?>