
<?php $__env->startSection('contenido'); ?>
    
    <div class="row mt-3">
        <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
                <button class="btn btn-dark openModal" data-bs-toggle="modal" data-bs-target="#modalCarreras">
                    <i class="fa-solid fa-circle-plus"></i> Añadir</button>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-lg-8 offset-0 offset-lg-2">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ALUMNO</th>
                            <th>CORREO</th>
                            <th>CARRERA</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($row -> nombre); ?></td>
                                <td><?php echo e($row -> correo); ?></td>
                                <td><?php echo e($row -> carrera); ?></td>
                                <td>
                                    <a href="<?php echo e(url('alumnos',[$row])); ?>" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo e(url('alumnos',[$row])); ?>">
                                        <?php echo method_field("delete"); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCarreras" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="h5" id="titulo_modal">Añadir alumnos</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmCarreras" method="POST" action="<?php echo e(url('alumnos')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="nombre" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            <input type="email" name="correo" class="form-control" maxlength="50" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                            <select name="id_carrera" class="form-select" required>
                                <option value="">Carrera</option>
                                <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row -> id); ?>"><?php echo e($row -> carrera); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laralumno\resources\views/alumnos.blade.php ENDPATH**/ ?>