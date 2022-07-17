

<?php $__env->startSection('content'); ?>
    <h1>Product Module - Create Action</h1>
    <form action=" <?php echo e(route('product.store')); ?> " method="post">   
        <?php echo csrf_field(); ?>  
            <div class="inputBox">
                <input type="text" name="name" required='required' />
                <span>Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="price" required='required' />
                <span>Price</span>
            </div>
            <div class="inputBox">
                <textarea name="intro" required='required'></textarea>
                <span>Intro</span>
            </div>
            <div class="inputBox">
                <textarea name="content" required='required'></textarea>
                <span>Content</span>
            </div>
            <div class="inputBox">
                <input type="file" name="image" required='required' />
                <span>Image</span>
            </div>
            <div class="inputBox">
                <textarea name="status" required='required'></textarea>
                <span>Status</span>
            </div>
            <div class="Box">
                <input type="submit" value='Create' required='required' />
            </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GA\Desktop\FullStack\laravel-product\resources\views/website/product/create.blade.php ENDPATH**/ ?>