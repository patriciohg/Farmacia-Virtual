<!-- Content Wrapper. Contains page content -->
<div class="content-wraper space">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="container" >  
        <!-- Default box -->
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
                            <form action ="<?php echo base_url();?>Mantenimiento/Clientes/store" method="POST" >
                                <div class="form-group">
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" class = "form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Apellido: </label>
                                    <input type="text" class = "form-control" id="apellido" name="apellido">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Rut: </label>
                                    <input type="text" class = "form-control" id="rut" name="rut">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Telefono: </label>
                                    <input type="text" class = "form-control" id="telefono" name="telefono">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Direccion: </label>
                                    <input type="text" class = "form-control" id="direccion" name="direccion">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Empresa: </label>
                                    <input type="text" class = "form-control" id="empresa" name="empresa">
                                </div>
                                <div class="form-group">
                                    <button type = "submit"class="btn btn-success btn-flat">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
        <!-- /.content-wrapper -->