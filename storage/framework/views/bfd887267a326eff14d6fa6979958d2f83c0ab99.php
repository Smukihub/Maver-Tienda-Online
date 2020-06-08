
<?php $__env->startSection('titulo','Administración de Categorías'); ?>

<?php $__env->startSection('breadcrumb'); ?>

<li class="breadcrumb-item active"><?php echo $__env->yieldContent('titulo'); ?></li>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div id= "confirmareliminar" class="row">
    <span style="display:none;" id="urlbase"><?php echo e(route('admin.category.index')); ?></span>


<?php echo $__env->make('custom.modal_eliminar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sección de categorías</h3>

                <div class="card-tools">
                    <form>
                    
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name=  "nombre" class="form-control float-right" placeholder="Buscar"
                      value="<?php echo e(request()->get('nombre')); ?>">

                     <div class="input-group-append">
                       <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                     </div>
                  </div>
                  
                    
                    </form>

                 

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
              <a class=" m-2 float-right btn btn-primary"  href="<?php echo e(route('admin.category.create')); ?>">Crear</a>
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Slug</th>
                      <th>Descripción</th>
                      <th>Fecha de creación</th>
                      <th>Fecha de modificación</th>
                      <th colspan="3"></th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                        <td> <?php echo e($categoria->id); ?> </td>
                        <td> <?php echo e($categoria->nombre); ?> </td>
                        <td> <?php echo e($categoria->slug); ?> </td>
                        <td> <?php echo e($categoria->descripcion); ?> </td>
                        <td> <?php echo e($categoria->created_at); ?> </td>
                        <td> <?php echo e($categoria->updated_at); ?> </td>

                        <td> <a class="btn btn-default"
                            href="<?php echo e(route('admin.category.show',$categoria->slug)); ?>">Ver</a>
                        </td>

                        <td> <a class="btn btn-info"
                            href="<?php echo e(route('admin.category.edit',$categoria->slug)); ?>">Editar</a>
                        </td>

                        <td> <a class="btn btn-danger"
                            href="<?php echo e(route('admin.category.index')); ?>"
                            v-on:click.prevent="deseas_eliminar(<?php echo e($categoria->id); ?>)"
                            >Eliminar</a>
                        </td>

                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                   
                  </tbody>
                </table>
                <?php echo e($categorias->appends($_GET)->links()); ?>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Marver\resources\views/admin/category/index.blade.php ENDPATH**/ ?>