<header class="w3-container w3-xlarge">
    <p class="w3-right">Finalizar compra</p>
    <div class="w3-left">
    <ul class="carrito">
      <li><a href="<?php echo site_url('Cliente');?>"><i class="fa fa-home w3-margin-right"></i></a>
      <li><a href="<?php echo site_url('Auth');?>"><i class="fa fa-user w3-margin-right"></i></a>
      
    </ul>
    </div>
</header>
<table class="table table-bordered btn-hover ">
          <thead>
            <tr>
              <th>codigo</th>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Disponibilidad</th>
              <th>Precio</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
          <tr>
          <?php foreach ($this->cart->contents() as $items): ?>
                <td><center><?php echo $items['id']?><center></td>
              <td><center><img src="<?php echo base_url() ?>assets/imagenes/productos/<?php echo $items['imagen']; ?>" height="148" width= "135"></center></td>
              <td><center><?php echo $items['name']; ?></center></td>
              <td><center><?php echo $items['qty'];?></center></td>
              <td><center><i class="btn btn-success"><span class="fa fa-check-circle "></span></i></center></td>
              <td><center>$<?php echo $items['price'];?></center></td>
              
              <td><center>$<?php echo $items['subtotal'];?></center></td>
            </tr>
          <?php endforeach;?>
          
          </tbody>  
          </table>
<div class="container">
<h1 class="w3-right">Total a pagar: $<?php echo $this->cart->total();?></h1>
</div>
<hr>        
<div class="card">
  <div class="card-body p-0">
    <div class="p-5">
      <div class="text-center">
            
            <?php if($this->session->flashdata("error")):?>
            <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error");?></p>
            </div>
            <?php endif ?>
      </div>

      <form class="user" action="<?php echo site_url('Comprar/finish')?>" method="post">
        <div  class="row" >
            <div class="col-md-6 btn-lg" id="Domi">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Entrega a domicilio</h4>
              <p class="text-muted">Te lo llevamos a tu casa!.</p>
              <input style="display: none;" type = "checkbox" name="Entrega" Value="Domi"  id="Domi_sel">
            </div>
            <div class="col-md-6 btn-lg" id="Suc">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-store fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Retiro en tienda</h4>
              <p class="text-muted">Ven a retirar tu producto con nosotros!.</p>
              <input  style="display: none;" type = "checkbox" name="Entrega" id="Suc_sel" value="Suc">
            </div>
        </div>
        <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="Nombre" name="Nombre" placeholder="Primer Nombre">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="Apellidos"name="Apellidos" placeholder="Apellidos">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="Rut" name="Rut"  placeholder="Rut">
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="Ciudad" name="Ciudad"  placeholder="Ciudad">
              </div>
            </div>              
              <input type="text" class="form-control form-control-user" id="Mail" name="Mail"  placeholder="Direccion de correo electronico">
                

             
        <div id="entrega_Domi" style="display: none;">
          <br>
          <h1 class="h4 text-gray-900 mb-4 text-center">Datos de entrega a domicilio</h1>
              <div class="col-sm-6">
                <input type="date" class="form-control form-control-user" name="Fecha_entrega"  min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" name="Direccion" placeholder="Direccion">
              </div>
            </div>
            <br>
        </div>
        
        <div id="entrega_Suc" style="display: none;">
            <h1 class="h4 text-gray-900 mb-4">Datos de retiro en tienda</h1>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <select class="form-control form-control-user" name="Sucursal" >
                  <option value="Sucursal1">Sucursal1</option>
                  <option value="Sucursal2">Sucursal2</option>
                  <option value="Sucursal3">Sucursal3</option>                  
                </select> 
              </div>
            </div>            
          </div>
          
        </div>
        <br>
        <br>
        <button class="btn btn-primary btn-user btn-block" >Pagar</button> 
      </form>
    </div>
  </div>
</div>
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; A-turing 2019</span>
          </div>
        </div>
</footer>






<script src="<?php echo base_url()?>assets/template/bootstrap/vendor/jquery/jquery.min.js" type="text/javascript">
</script>
<script>
$(document).ready(function(){
  $("#Domi").click(function(){
    $("#Domi_sel").prop("checked", true);
    $("#entrega_Domi").toggle();      
    if($("#Suc").attr("checked", true)){
          $("#Suc_sel").prop("checked", false);
          $("#entrega_Suc").hide();
    }
   });
  $("#Suc").click(function(){
      $("#Suc_sel").prop("checked", true);
      $("#entrega_Suc").toggle();
      if($("#Domi").attr("checked", true)){
        $("#Domi_sel").prop("checked", false);
        $("#entrega_Domi").hide();
      }
         
      
   });
});
</script>
