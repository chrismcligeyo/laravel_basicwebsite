<?php $__env->startSection('content'); ?>
<h1>Home</h1>

<?php if(Session::has("success")): ?>
    <div class="alert alert-danger">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque beatae distinctio est eveniet incidunt itaque magnam nulla odit, omnis possimus provident quam sapiente suscipit ut vel voluptatem voluptatibus voluptatum!</p>


    <?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771## 
    <p>This is appendend to the sidebar</p>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>