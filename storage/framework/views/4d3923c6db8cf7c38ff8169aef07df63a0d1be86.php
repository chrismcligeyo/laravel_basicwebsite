<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css"><!--already knows to look in public,css,app.css. csswe put in app.scss in sass, assets,resources, will be compiled to app.css in public when we run dev-->
</head>
<body>
<?php echo $__env->make('includes.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <?php if(Request::is('/')): ?>
            <?php echo $__env->make('includes.welcome2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
                <div class="col-md-4 col-lg-4">
                  <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2020 &copy; Intro</p>
    </footer>

</body>
</html>