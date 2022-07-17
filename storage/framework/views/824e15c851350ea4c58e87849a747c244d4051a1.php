<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme/css/styles.css')); ?>">
    <title>Document</title>
</head>
<body>
    <div class="header">
        
        <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    </div>


    <?php echo $__env->yieldContent('content'); ?>
    
    <div class="footer">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>

    </div>
</body>
</html><?php /**PATH C:\Users\GA\Desktop\FullStack\laravel-product\resources\views/website/index.blade.php ENDPATH**/ ?>