

<?php $__env->startSection('content'); ?>
    <h1>Product Module - Edit Action</h1>
    <form action=" <?php echo e(route('product.update', ['id' => $product->id])); ?> " method="post">   
        <?php echo csrf_field(); ?>  
            <div class="inputBox">
                <input type="text" name="name" value="<?php echo e($product->name); ?>" required='required' />
                <span>Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="price" value="<?php echo e($product->price); ?>" required='required' />
                <span>Price</span>
            </div>
            <div class="inputBox">
                <input name="intro" value="<?php echo e($product->intro); ?>" required='required'></textarea>
                <span>Intro</span>
            </div>
            <div class="inputBox">
                <input name="content" value="<?php echo e($product->content); ?>" required='required'></textarea>
                <span>Content</span>
            </div>
            <div class="inputBox">
                <input type="file" name="image" value="<?php echo e($product->image); ?>" required='required' />
                <span>Image</span>
            </div>
            <div class="inputBox">
                <input name="status" value="<?php echo e($product->status); ?>" required='required'></textarea>
                <span>Status</span>
            </div>
            <div class="Box">
                <input type="submit" value='Edit' required='required' />
            </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GA\Desktop\FullStack\laravel-product\resources\views/website/product/edit.blade.php ENDPATH**/ ?>