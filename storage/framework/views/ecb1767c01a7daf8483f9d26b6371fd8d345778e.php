
<?php $__env->startSection('titulo','Ver Categoría'); ?>


<?php $__env->startSection('breadcrumb'); ?>
  <li class="breadcrumb-item"><a href="<?php echo e(route('admin.category.index')); ?>">Categorías</a></li>
  <li class="breadcrumb-item active"><?php echo $__env->yieldContent('titulo'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div id="apicategory">

<form>
  <?php echo csrf_field(); ?>

  

  <span style="display:none;" id="editar"><?php echo e($editar ?? ''); ?></span>
  <span style="display:none;" id="nombretemp"><?php echo e($cat->nombre); ?></span>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Adminitración de categorías</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">


            
                
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input v-model="nombre" 

                        @blur="getCategory" 
                        @focus  = "div_aparecer= false"
                        
                    
                    class="form-control" type="text" name="nombre" id="nombre" value="<?php echo e($cat->nombre); ?>" readonly>
                    <label for="slug">Slug</label>
                    <input  v-model="generarSLug"  class="form-control" type="text" name="slug" id="slug" value=" <?php echo e($cat->slug); ?> " readonly>
                  
                    <br v-if="div_aparecer">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" readonly>  <?php echo e($cat->descripcion); ?>  </textarea>
                    
                </div>
              

        
    
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            
          <a class="btn btn-danger" href="<?php echo e(route('cancelar','admin.category.index')); ?>">Cancelar</a>

          <a class="btn btn-success" href="<?php echo e(route('admin.category.edit', $cat->slug)); ?>">Editar</a>

            
        
            
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </form>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Marver\resources\views/admin/category/show.blade.php ENDPATH**/ ?>