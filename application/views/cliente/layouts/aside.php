
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <img src ="<?php echo base_url()?>assets/template/bootstrap/img/logito.jfif" style="width:100%; height:50%" />
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
  <?php if(!empty($Categorias)):?>
    <?php foreach($Categorias as $categoria):?>
    <a href="<?php echo base_url()?>cliente/categoria/<?php echo $categoria->id; ?>" class="w3-bar-item w3-button"><?php echo $categoria->nombre;?></a>
    <?php endforeach; ?>
  <?php endif;?>
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
