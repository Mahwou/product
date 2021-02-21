

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-succes"> <?php echo e(Session::get('message')); ?> </div>
        <?php endif; ?>
            <div class="card">
                
                <div class="card-header"><?php echo e(__('Products')); ?>

                
                <div class="col-md-4 text-right">
                    <form action=<?php echo e(route("product_search")); ?> method="get">
                       <div class="input-group">
                          <input type="search" name="search" class="form-control" placeholder="Search...">
                          <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search
                            </button>
                          </span>
                       </div>
                    </form>
                </div>

                </div>

                <div class="card-body">
                <table class="table">
                <thead></thead>
                <tr>
                      <th> Names </th>
                      <th> Prices </th>
                      <th> Action </th>
                </tr>

                <?php if(!empty($products)): ?> 
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                  <td><?php echo e(link_to_route('product.show',$product->names,[$product->id])); ?></td>
                  <td><?php echo e(link_to_route('product.show',$product->prices,[$product->id])); ?></td>
                  <td>
                  <?php echo Form::open(array('route'=>['product.destroy',$product->id], 'method'=>'DELETE')); ?>


                  <?php echo e(link_to_route('product.edit','Edit',[$product->id],['class'=>'btn btn-primary'])); ?>

                      |
                        <?php echo Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']); ?>

                      <?php echo Form::close(); ?>

                </tr> 
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php endif; ?>
                </table>
                
               
                </div>
            </div>
            <?php echo e(link_to_route('product.create','Add new Product',null,['class'=>'btn btn-success'])); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product-manager\resources\views/product/index.blade.php ENDPATH**/ ?>