        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Categorias
                <small>Editar</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid tabla-categorias">
                    <div class="box-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if($this->session->flashdata("error")): ?>
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type = "button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>
                                        </div> 
                                    <?php endif; ?>
                                    <form action ="<?php echo base_url();?>index.php/Mantenimiento/Productos/update" method="POST" style="width: 950px;">
                                        <input type="hidden" value="<?php echo $producto->id;?>" name="idProducto">
                                        <div class="form-group">
                                            <label for="codigo">Codigo: </label>
                                            <input type="text" class = "form-control" id="codigo" name="codigo" value="<?php echo $producto->codigo;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">Nombre: </label>
                                            <input type="text" class = "form-control" id="nombre" name="nombre" value="<?php echo $producto->nombre;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion">Descripcion: </label>
                                            <input type="text" class = "form-control" id="descripcion" name="descripcion" value="<?php echo $producto->descripcion;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="precio">Precio: </label>
                                            <input type="text" class = "form-control" id="precio" name="precio" value="<?php echo $producto->precio;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Stock: </label>
                                            <input type="text" class = "form-control" id="stock" name="stock" value="<?php echo $producto->stock;?>">
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