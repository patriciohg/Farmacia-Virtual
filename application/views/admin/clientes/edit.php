<div class="content-wrapper space">
    <section class="content-header">
        <h1>
        Cliente
        <small>Editar</small>
        </h1>
    </section>
    <section class="container">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <?php if($this->session->flashdata("error")): ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type = "button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>
                                </div> 
                            <?php endif; ?>
                            <form action ="<?php echo base_url();?>index.php/Mantenimiento/Clientes/update" method="POST" >
                                <input type="hidden" value="<?php echo $cliente->id;?>" name="idCliente">
                                <div class="form-group">
                                    <label for="nombre">Nombres: </label>
                                    <input type="text" class = "form-control" id="nombre" name="nombre" value="<?php echo $cliente->nombres;?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Apellidos: </label>
                                    <input type="text" class = "form-control" id="apellido" name="apellido" value="<?php echo $cliente->apellidos;?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Telefono: </label>
                                    <input type="text" class = "form-control" id="telefono" name="telefono" value="<?php echo $cliente->telefono;?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Direccion: </label>
                                    <input type="text" class = "form-control" id="direccion" name="direccion" value="<?php echo $cliente->direccion;?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Rut: </label>
                                    <input type="text" class = "form-control" id="rut" name="rut" value="<?php echo $cliente->ruc;?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Empresa: </label>
                                    <input type="text" class = "form-control" id="empresa" name="empresa" value="<?php echo $cliente->empresa;?>">
                                </div>
                                <div class="form-group">
                                    <button type = "submit"class="btn btn-success btn-flat">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>