

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Edit')); ?></div>

                <div class="card-body">
                   
                    <?php echo Form::model($product , array('route'=>['products.update',$product->id], 'method'=>'PUT' )); ?>

                       
                         <div class="Form-group">
                             <?php echo Form::label('Name','Enter Name'); ?>

                             <?php echo Form::text('names',null,['class'=>'form-control']); ?>

                         </div>
                         <div class="Form-group">
                             <?php echo Form::label('Phone','Set Price'); ?>

                             <?php echo Form::text('prices',null,['class'=>'form-control']); ?>

                         </div>
                         <div class="Form-group">
                             <?php echo Form::label('Description','Description'); ?>

                             <?php echo Form::text('description',null,['class'=>'form-control']); ?>

                         </div>
                         <div class="Form-group">
                             <?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']); ?>

                         </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
         
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product-manager\resources\views/products/edit.blade.php ENDPATH**/ ?>