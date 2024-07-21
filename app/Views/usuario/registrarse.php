<div class="jumbo mt-3">
    <div class="container">
        <h1 class="display-4 text-center">Agregar Usuarios</h1>
    </div>
</div>

<?php $validation = \Config\Services::validation(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" id="addname" name="addname" action="<?php echo base_url('/enviar-form') ?>">
                <div class="card border-primary shadow-lg rounded">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control <?php if ($validation->getError('nombre')) echo 'is-invalid'; ?>" placeholder="Nombre">
                            <?php if ($validation->getError('nombre')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('nombre')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control <?php if ($validation->getError('apellido')) echo 'is-invalid'; ?>" placeholder="Apellido">
                            <?php if ($validation->getError('apellido')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('apellido')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control <?php if ($validation->getError('email')) echo 'is-invalid'; ?>" placeholder="correo@algo.com">
                            <?php if ($validation->getError('email')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('email')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" id="usuario" name="usuario" class="form-control <?php if ($validation->getError('usuario')) echo 'is-invalid'; ?>" placeholder="Usuario">
                            <?php if ($validation->getError('usuario')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('usuario')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control <?php if ($validation->getError('password')) echo 'is-invalid'; ?>" placeholder="Contraseña">
                            <?php if ($validation->getError('password')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('password')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="passconf" class="form-label">Confirmar Contraseña</label>
                            <input type="password" id="passconf" name="passconf" class="form-control <?php if ($validation->getError('passconf')) echo 'is-invalid'; ?>" placeholder="Repita su contraseña">
                            <?php if ($validation->getError('passconf')) : ?>
                                <div class='invalid-feedback'>
                                    <?= esc($validation->getError('passconf')) ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-block">Registrar</button>
                            <button type="reset" class="btn btn-info btn-block">Limpiar</button>
                            <a href="<?= site_url('/lista_usuario') ?>" class="btn btn-danger btn-block">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
