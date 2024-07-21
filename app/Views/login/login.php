<div class="jumbo mt-3">
    <div class="container">
        <h1 class="display-4 text-center">Inicio de Sesión</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card border-primary shadow-lg rounded">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Ingresar</h2>
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('/enviar-login') ?>">
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="E-mail" class="form-control <?php if (session()->getFlashdata('errors') && session()->getFlashdata('errors')['email']) echo 'is-invalid'; ?>">
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('errors')['email'] ?? '' ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control <?php if (session()->getFlashdata('errors') && session()->getFlashdata('errors')['password']) echo 'is-invalid'; ?>">
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('errors')['password'] ?? '' ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                            <button type="submit" class="btn btn-danger btn-block">Cancelar</button>
                        </div>
                        <p class="text-center mb-0"><a href="<?= base_url('registrarse') ?>">¿Aún no está registrado? Regístrese aquí</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
