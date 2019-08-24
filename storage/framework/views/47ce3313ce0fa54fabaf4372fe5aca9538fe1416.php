<?php $__env->startSection('content'); ?>
    <h1>Contact</h1>

    <?php echo Form::open([ 'url'=>'contact/submit']); ?> <!--files true enables you to add file, upload. equivalent of enctype=multiform/data-->

    <div class="form-group">
        <?php echo Form::label('name', 'Name'); ?>

        <?php echo Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

    </div>
        <div class="form-group">
                <?php echo Form::label('email', 'Email'); ?>

                <?php echo Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Mail']); ?>

        </div>
            <div class="form-group">

                    <?php echo Form::label('message', 'Message'); ?>

                    <?php echo Form::textarea('message', null, ['class'=>'form-control']); ?>



                </div>




    <div class="form-group">

        <?php echo Form::submit('Submit', ['class'=>'btn btn-primary']); ?>

    </div>


    <?php echo Form::close(); ?>



    <?php echo $__env->make('includes.errorMsg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>