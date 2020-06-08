


<?php $__env->startSection('titulo', 'Administración de productos'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li class="breadcrumb-item active"><?php echo $__env->yieldContent('titulo'); ?></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<style type="text/css">
  .table1 {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    text-align: center;
  }

  .table1 td, .table1 th {
    padding: .75rem;
    vertical-align: center;
    border-top: 1px solid #dee2e6;
  }

</style>


<div id="confirmareliminar" class="row">

  <span style="display:none;" id="urlbase"><?php echo e(route('admin.product.index')); ?></span>
  <?php echo $__env->make('custom.modal_eliminar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sección de productos</h3>

          <div class="card-tools">

            <form>
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="nombre" class="form-control float-right"
                placeholder="Buscar"
                value="<?php echo e(request()->get('nombre')); ?>"
                >

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
                <a class=" m-2 float-right btn btn-primary"  href="<?php echo e(route('admin.product.create')); ?>">Crear</a>
          <table class="table1 table-head-fixed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Activo</th>
                <th>Slider Principal</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($producto->id); ?> </td>
                        <td>
                           <?php if($producto->images->count()<=0 ): ?>
                              <img style="height: 100px;    width: 100px;" src="/imagenes/default.jpg" class="rounded-circle">
                           <?php else: ?>
                              <img style="height: 100px;    width: 100px;" src="<?php echo e($producto->images->random()->url); ?>" class="rounded-circle">
                           <?php endif; ?>




                        </td>
                        <td> <?php echo e($producto->nombre); ?> </td>
                        <td> <?php echo e($producto->estado); ?> </td>
                        <td> <?php echo e($producto->activo); ?> </td>


<?php $__env->startSection('titulo', 'Administración de productos'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li class="breadcrumb-item active"><?php echo $__env->yieldContent('titulo'); ?></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<style type="text/css">
  .table1 {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    text-align: center;
  }

  .table1 td, .table1 th {
    padding: .75rem;
    vertical-align: center;
    border-top: 1px solid #dee2e6;
  }

</style>


<div id="confirmareliminar" class="row">

  <span style="display:none;" id="urlbase"><?php echo e(route('admin.product.index')); ?></span>
  <?php echo $__env->make('custom.modal_eliminar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sección de productos</h3>

          <div class="card-tools">

            <form>
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="nombre" class="form-control float-right"
                placeholder="Buscar"
                value="<?php echo e(request()->get('nombre')); ?>"
                >

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
                <a class=" m-2 float-right btn btn-primary"  href="<?php echo e(route('admin.product.create')); ?>">Crear</a>
          <table class="table1 table-head-fixed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Activo</th>
                <th>Slider Principal</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($producto->id); ?> </td>
                        <td>
                           <?php if($producto->images->count()<=0 ): ?>
                              <img style="height: 100px;    width: 100px;" src="/imagenes/default.png" class="rounded-circle">
                           <?php else: ?>
                              <img style="height: 100px;    width: 100px;" src="<?php echo e($producto->images->random()->url); ?>" class="rounded-circle">
                           <?php endif; ?>




                        </td>
                        <td> <?php echo e($producto->nombre); ?> </td>
                        <td> <?php echo e($producto->estado); ?> </td>
                        <td> <?php echo e($producto->activo); ?> </td>
                        <td> <?php echo e($producto->sliderprincipal); ?> </td>

                        <td> <a class="btn btn-default"
                            href="<?php echo e(route('admin.product.show',$producto->slug)); ?>">Ver</a>
                        </td>

                        <td> <a class="btn btn-info"
                            href="<?php echo e(route('admin.product.edit',$producto->slug)); ?>">Editar</a>
                        </td>

                        <td> <a class="btn btn-danger"
                            href="<?php echo e(route('admin.product.index')); ?>"
                            v-on:click.prevent="deseas_eliminar(<?php echo e($producto->id); ?>)"
                            >Eliminar</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
          </table>
          <?php echo e($productos->appends($_GET)->links()); ?>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->



 <?php $__env->stopSection(); ?>
                        <td> <?php echo e($producto->sliderprincipal); ?> </td>

                        <td> <a class="btn btn-default"
                            href="<?php echo e(route('admin.product.show',$producto->slug)); ?>">Ver</a>
                        </td>

                        <td> <a class="btn btn-info"
                            href="<?php echo e(route('admin.product.edit',$producto->slug)); ?>">Editar</a>
                        </td>

                        <td> <a class="btn btn-danger"
                            href="<?php echo e(route('admin.product.index')); ?>"
                            v-on:click.prevent="deseas_eliminar(<?php echo e($producto->id); ?>)"
                            >Eliminar</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
          </table>
          <?php echo e($productos->appends($_GET)->links()); ?>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->



 <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('plantilla.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Marver\resources\views/admin/product/index.blade.php ENDPATH**/ ?>