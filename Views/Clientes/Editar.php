<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?php echo base_url(); ?>Clientes/actualizar" autocomplete="off">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center"><i class="fas fa-user-edit"></i> Modificar Cliente</46>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ruc">Ruc</label>
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="ruc" class="form-control" type="text" name="ruc" required minlength="11" maxlength="11"  pattern="[1-2]{1}0[0-9]{9}" value="<?php echo $data['ruc']; ?>">
                                <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i> ¡RUC Incorrecto! Vuelva a ingresar</span>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" required minlength="5" maxlength="50"  pattern="[A-Z, ]{5,50}" value="<?php echo $data['nombre']; ?>">
                                <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i> ¡USO un caracter Incorrecto! Vuelva a ingresar</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <input id="direccion" class="form-control" type="text" name="direccion" required minlength="5" maxlength="50"  pattern="[A-Z,0-9, ,°,/]{5,50}" value="<?php echo $data['direccion']; ?>">
                                        <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i> ¡Correo Largo sobrepasa los 50 caracteres! Vuelva a ingresar</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input id="telefono" class="form-control" type="text" name="telefono" required minlength="9" maxlength="9"  pattern="9{1}[0-9]{8}" value="<?php echo $data['telefono']; ?>">
                                        <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i> ¡Número Incorrecto! Vuelva a ingresar Recuerda que el primer digito inicia con 9 y son 9 caracteres</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-dark" type="submit"><i class="fas fa-save"></i> Modificar</button>
                            <a href="<?php echo base_url(); ?>Clientes/Listar" class="btn btn-danger"><i class="fas fa-arrow-alt-circle-left"></i> Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie() ?>