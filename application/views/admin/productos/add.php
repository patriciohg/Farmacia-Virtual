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
                            <form action ="<?php echo base_url();?>Mantenimiento/productos/store" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="codigo">Codigo: </label>
                                    <input type="text" class = "form-control" id="codigo" name="codigo">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" class = "form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion: </label>
                                    <input type="text" class = "form-control" id="descripcion" name="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio: </label>
                                    <input type="text" class = "form-control" id="precio" name="precio">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock: </label>
                                    <input type="text" class = "form-control" id="stock" name="stock">
                                </div>
                                <div class ="form-group">
                                <label for="userfile">Imagen: </label>
                                    <input type="file" name="userfile" value="fichero" >                                    
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoria: </label>
                                        <select name = "categoria" id="categoria" class="form-control">
                                        <?php foreach($Categorias as $categoria):?>
                                        <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre?></option>
                                        <?php endforeach ?>
                                        </select>
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