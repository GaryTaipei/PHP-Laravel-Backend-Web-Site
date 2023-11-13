
<?php $__env->startSection('content'); ?>
    <section class="container">
        <a href="<?php echo e(url('article/create')); ?>" role="btn" class="btn btn-primary pull-right" >新增</a>
        <table class="table table=hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Active</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($var->id); ?></td>
                    <td><?php echo e($var->title); ?></td>
                    <td><?php echo e($var->active); ?></td>
                    <td><a href="<?php echo e(url('article/'. $var->id . '/edit')); ?>" role="button" class="btn btn-warning">編輯</a></td>
                    <td>
                        <form action="<?php echo e(url('article/'. $var->id )); ?>" method="POST" onsubmit="return confirm('確定要刪除這個項目嗎?');">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" role="button" class="btn btn-danger" value="刪除">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($query->links()); ?>

        </table>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\youwotest\resources\views/article/index.blade.php ENDPATH**/ ?>