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
<h1 class="w3-right">Total : $<?php echo $this->cart->total();?></h1>
</div>
<hr>        
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; A-turing 2019</span>
          </div>
        </div>
</footer>



