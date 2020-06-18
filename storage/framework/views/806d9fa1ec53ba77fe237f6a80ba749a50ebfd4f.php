<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Products</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th></th>
                  <th>
                    SKU
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Quantity
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Image
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      <?php echo e($prod->sku); ?>

                    </td>
                    <td>
                      <?php echo e($prod->name); ?>

                    </td>
                    <td>
                      <?php echo e($prod->quantity); ?>

                    </td>
                    <td>
                      <?php echo e($prod->sellPrice); ?>

                    </td>
                    <td class="text-primary">
                      <img src='<?php echo e("../../admin/imgs/".$prod->img1); ?>' class="img-thumbnail" style="width: 100px" alt="">
                    </td>
                    <td>
                     2
                    </td>
                    
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\hshop\resources\views/admin/layouts/contents/products.blade.php ENDPATH**/ ?>