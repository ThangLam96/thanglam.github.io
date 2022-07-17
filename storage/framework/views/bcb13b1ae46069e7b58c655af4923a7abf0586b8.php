
    <?php $__env->startSection('content'); ?>
    <h1>Product Module - Index Action</h1>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Intro</td>
            <td>Content</td>
            <td>Image</td>
            <td>Status</td>
            <td>Created_at</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($index->name); ?></td>
            <td><?php echo e($index->price); ?></td>
            <td><?php echo e($index->intro); ?></td>
            <td><?php echo e($index->content); ?></td>
            <td><?php echo e($index->image); ?></td>
            <td><?php echo e($index->status); ?></td>
            <td><?php echo e(date('d/m/Y H:i:s', strtotime($index->created_at))); ?></td>
            <td><a href='<?php echo e(route("product.edit", ['id' => $index->id])); ?>'>Edit</a></td>
            <td><a href='<?php echo e(route("product.destroy", ['id' => $index->id])); ?>'>Delete</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>   
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('website.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GA\Desktop\FullStack\laravel-product\resources\views/website/product/index.blade.php ENDPATH**/ ?>