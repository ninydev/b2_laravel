<!-- extends('layouts.app') -->



<?php $__env->startSection('page_title'); ?>
    <?php if(isset($pageTitle)): ?> <?php echo e($pageTitle); ?> | <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="voyager-categories"></i>
        <?php if(isset($pageTitle)): ?> <?php echo e($pageTitle); ?> <?php endif; ?>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
        <?php echo $__env->make('voyager::alerts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                    
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="panel-body">        

    <ul>
        <?php $__currentLoopData = $fromDB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php 
            var_dump ($people->name );
            echo $people["name"] . " ";
            echo $people->name . " ";
            ?>
            <?php echo e($people->name); ?>

        </li>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </hr>
    </ul>


                        </div>
                    </div>
                </div>  
                
            </div>  <!-- row -->

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>