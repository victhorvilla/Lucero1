<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?php echo base_url(); ?>Productos/actualizar" autocomplete="off">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center">Modificar Producto</46>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="codigo">Código de producto</label>
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input id="codigo" class="form-control" type="text" name="codigo" required minlength="5" maxlength="5"  pattern="[1-2]{1}[0-2]{1}[1-2]{1}[0-2]{1}[1-2]{1}" value="<?php echo $data['codigo']; ?>">
                                <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i> ¡Código Incorrecto! Vuelva a ingresar</span>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" required minlength="5" maxlength="50"  pattern="[A-Z, 0-9]{5,50}" value="<?php echo $data['nombre']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="cantidad">Stock</label>
                                        <label id="cantidad" class="form-control" type="text" name="cantidad" value="<?php echo $data['cantidad']; ?>"><?php echo $data['cantidad'];?></label> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="precio">Precio</label>
                                        <input id="precio" class="form-control" type="text" name="precio" required value="<?php echo $data['precio']; ?>">
                                        <span class="text-danger d-none" id="error"><i class="fas fa-ad"></i>ingresar valores númericos positivos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-dark" type="submit">Modificar</button>
                            <a href="<?php echo base_url(); ?>Productos/Listar" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie() ?>