
        <!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper space">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid tabla-categorias">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 19rem;padding-bottom: 1rem;">
                        <a href="<?php echo base_url()?>index.php/Mantenimiento/productos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus "></span> Agregar producto</a>                                   
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered btn-hover" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>                                        
                                        <th>Descripcion</th>
                                        <th>Precio</th>                                        
                                        <th>Stock</th>
                                        <th>Imagen</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($Productos)): ?>
                                        <?php foreach($Productos as $producto):?>
                                        <tr>
                                        <td><?php echo $producto->id;?></td>
                                        <td><?php echo $producto->codigo;?></td>
                                        <td><?php echo $producto->nombre;?></td>                                            
                                        <td><?php echo $producto->descripcion;?></td>
                                        <td><?php echo $producto->precio;?></td>
                                        <td><?php echo $producto->stock;?></td>
                                        <td><img src="<?php echo base_url()?>assets/imagenes/productos/<?php echo $producto->imagen;?>" height="100" width="100"/></td>

                                
                                            <td>
                                                <div class="btn-group">
                                                                  <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $producto->id;?>">
                                                                    <span class="fa fa-search"></span>
                                                                  </button>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Productos/edit/<?php echo $producto->id; ?>" class="btn btn-warning"><span class="fa fa-pencil-alt"></span></a>
                                                        

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif?>
                                </tbody>
                                
                            </table>
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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de los clientes</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->