

<?php $__env->startSection('content'); ?>

    <h1>Editar docente grupo</h1>

    <form action="<?php echo e(route('docentes_grupos.update', $docenteGrupo->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-5">
                <label for="docente_id" class="form-label">Docente</label>
                <select name="docente_id" class="form-control" required>
                    <option value="">Seleccione un docente</option>
                    <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($docente->id); ?>" <?php if($docente->id == $docenteGrupo->docente_id): ?> selected <?php endif; ?>>
                            <?php echo e($docente->nombre); ?> <?php echo e($docente->apellido); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <label for="grupo_id" class="form-label">Grupo</label>
                <select name="grupo_id" class="form-control" required>
                    <option value="">Seleccione un grupo</option>
                    <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($grupo->id); ?>" <?php if($grupo->id == $docenteGrupo->grupo_id): ?> selected <?php endif; ?>>
                            <?php echo e($grupo->nombre); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             </div>
        </div>
            
       

        <br>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a href="<?php echo e(route('docentes_grupos.index')); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Katia\Herd\laravel2024php\resources\views/docentes_grupos/edit.blade.php ENDPATH**/ ?>