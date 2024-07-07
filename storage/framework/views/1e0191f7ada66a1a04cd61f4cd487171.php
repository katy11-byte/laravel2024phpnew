

<?php $__env->startSection('content'); ?>

<h1>Login docente</h1>

<form action="<?php echo e(route('docentes.login')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    </div>

    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        
    </div>


    <div style="margin-top: 10px" class="row">
    <?php $__errorArgs = ['InvalidCredentials'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Katia\Herd\laravel2024php\resources\views/docentes/login.blade.php ENDPATH**/ ?>