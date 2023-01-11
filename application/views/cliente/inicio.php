
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-right">Todos los articulos</p>
    <div class="w3-left">
    <ul class="carrito">
      <li><a href="<?php echo site_url('Auth');?>"><i class="fa fa-user w3-margin-right"></i></a>
      <li><a href=""><i class="fa fa-shopping-cart w3-margin-right"></i></a></a>
        <ul>
          <table class="table table-bordered btn-hover" id="example1">
          <thead>
            <tr>
              <th>Vaciar<br><a href="<?php echo base_url();?>Cliente/reiniciarCarro" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span></a></th>
              <th>Nombre</th>
              <th></th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
          <tr>
          
          <?php $total= 0;  $i = 0;?>
          <?php foreach ($this->cart->contents() as $items): ?>
              <td><img src="<?php echo base_url() ?>assets/imagenes/productos/<?php echo $items['imagen']; ?>" height="100" width= "100"></td>
              <td><?php echo $items['name']; ?></td>
              <td></td>
              <td>$<?php echo $items['price'];?></td>
              <td><?php echo $items['qty'];?></td>
              <td><a href="<?php echo base_url();?>Cliente/remove/<?php echo $items['rowid'];?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span></a></td>
            </tr>
            <?php $i++;?>
            <?php $total += $items['subtotal'] ?>
          <?php endforeach;?>
          </tbody>  
          </table>
          <?php if($i>=1):?>
          <li>Total a pagar : $<?php echo $this->cart->total()?></li>
          <li><a href="<?php echo base_url();?>Comprar">Finalizar mi compra <i class="fa fa-shopping-bag"></i></a></li>
          <?php endif;?>
          <?php if($i==0):?>
          <li>Tu carrito esta vacio</li>
          <li>Comienza a comprar ya!</li>
          <?php endif;?>
        </ul>
      </li>
    </ul>
    </div>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container" >
    <img src="<?php echo base_url() ?>assets/template/bootstrap/img/logito.jfif" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-hide-small">Articulos nuevos</h1>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p><?php if(!empty($Productos)): echo sizeof($Productos); endif?> Productos</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
  <?php if(!empty($Productos)): ?>
    <?php foreach($Productos as $producto):?>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="<?php echo base_url();?>assets/imagenes/productos/<?php echo $producto->imagen;?>" width="200" height ="200">
          <div class="w3-display-middle w3-display-hover">
            <a class="w3-button w3-black" href="<?php echo base_url();?>Cliente/add/<?php echo $producto->id;?>">Comprar<i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <p><?php echo $producto->nombre;?><br><b><?php echo $producto->precio;?></b></p>
      </div>
  </div>
  <?php endforeach ?>
  <?php endif?>
    </div>