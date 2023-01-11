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

      <form class="user" action="<?php echo site_url('Comprar/tipo_pago')?>" method="post">
        <div  class="row" >
            <div class="col-md-6 btn-lg" id="linea">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-money-check-alt fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Pago En linea</h4>
              <p class="text-muted">Pago en linea.</p>
              <input style="display: none;" type = "checkbox" name="pago" Value="pago_linea"  id="pago_linea">
            </div>
            <div class="col-md-6 btn-lg" id="tienda">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-store fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Pago en tienda</h4>
              <p class="text-muted">Ven a retirar tu producto y pagas en tienda.</p>
              <input  style="display: none;" type = "checkbox" name="pago" id="tienda_sel" value="pago_tienda">
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
  $("#linea").click(function(){
    $("#pago_linea").prop("checked", true);     
    if($("#tienda").attr("checked", true)){
        $("#tienda_sel").prop("checked", false);
    }
   });
  $("#tienda").click(function(){
      $("#tienda_sel").prop("checked", true);
      if($("#linea").attr("checked", true)){
        $("#pago_linea").prop("checked", false);
      }
         
      
   });
});
</script>
