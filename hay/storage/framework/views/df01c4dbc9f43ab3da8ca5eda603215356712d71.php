<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="<?php echo e(asset('fonts/material-icons.css')); ?>" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/materializenavbar.css')); ?>" media="screen,projection"/>

    <title><?php echo $__env->yieldContent('page_title'); ?></title>
    <link rel="icon" href=""/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php echo $__env->yieldContent('other_css'); ?>
</head>
<body>


<?php echo $__env->yieldContent('header'); ?>

<?php echo $__env->yieldContent('main'); ?>

<?php echo $__env->yieldContent('footer'); ?>

<script type="text/javascript" src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/materialize.min.js')); ?>"></script>

<?php echo $__env->yieldContent('other_js'); ?>
</body>
</html>