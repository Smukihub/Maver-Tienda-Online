
<?php $__env->startSection('titulo','Editar Categoría'); ?>


<?php $__env->startSection('breadcrumb'); ?>
  <li class="breadcrumb-item"><a href="<?php echo e(route('admin.category.index')); ?>">Categorías</a></li>
  <li class="breadcrumb-item active"><?php echo $__env->yieldContent('titulo'); ?></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>

<div id="apicategory">

<form action="<?php echo e(route('admin.category.update',$cat->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>

  <?php echo method_field('PUT'); ?>

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
                    
                    class="form-control" type="text" name="nombre" id="nombre" value="<?php echo e($cat->nombre); ?>">
                    <label for="slug">Slug</label>
                    <input readonly v-model="generarSLug"  class="form-control" type="text" name="slug" id="slug" value=" <?php echo e($cat->slug); ?> ">
                    <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                       {{ div_mensajeslug }}
                    </div>
                    <br v-if="div_aparecer">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5">  <?php echo e($cat->descripcion); ?>  </textarea>
                    
                </div>
              

        
    
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <a class="btn btn-danger" href="<?php echo e(route('cancelar','admin.category.index')); ?>">Cancelar</a>

             <input 
                   :disabled = "deshabilitar_boton==1"
                    type="submit" value="Guardar" class="btn btn-primary float-right">
        
            
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </form>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Marver\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>