
<?php $__env->startSection('contenido'); ?>

    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">Editar alumno</div>
                <div class="card-body">
                <form id="frmCarreras" method="POST" action="<?php echo e(url('alumnos', [$alumno])); ?>">
                    <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="nombre" value="<?php echo e($alumno->nombre); ?>" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            <input type="email" name="correo" value="<?php echo e($alumno->correo); ?>" class="form-control" maxlength="50" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                            <select name="id_carrera" class="form-select" required>
                                <option value="">Carrera</option>
                                <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($row -> id == $alumno -> id_carrera): ?>
                                        <option selected value="<?php echo e($row -> id); ?>"><?php echo e($row -> carrera); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($row -> id); ?>"><?php echo e($row -> carrera); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laralumno\resources\views/editAlumno.blade.php ENDPATH**/ ?>