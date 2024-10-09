
<?php $__env->startSection('contenido'); ?>

    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">Editar carrera</div>
                <div class="card-body">
                <form id="frmCarreras" method="POST" action="<?php echo e(url('carreras', [$carrera])); ?>">
                    <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                            <input type="text" name="carrera" value="<?php echo e($carrera->carrera); ?>" class="form-control" maxlength="50" placeholder="Carrera" required>
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laralumno\resources\views/editCarrera.blade.php ENDPATH**/ ?>