	<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; A-turing 2019</span>
          </div>
        </div>
      </footer>

	  </div>
    <!-- End of Content Wrapper -->

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
    <!-- ./wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/template/bootstrap/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>assets/template/bootstrap/js/demo/chart-pie-demo.js"></script>
<script>
$(document).ready(function () {
	var base_url = "<?php echo base_url();?>";
	$('.sidebar-menu').tree();
	$(".btn-remove").on("click", function(e){
		e.preventDefault();
		var ruta = $(this).attr("href");

		$.ajax({
			url: ruta,
			type: "POST",
			success: function(resp){
				window.location.href = base_url+"Mantenimiento/Categorias";
			}

		});

	});
	$(".btn-view").on("click",function(){
		var id = $(this).val();
		$.ajax({
			url: base_url + "Mantenimiento/Categorias/view/"+id,
			type: "POST",
			success: function(resp){
				$("#modal-default .modal-body").html(resp);				
			}

		});
	});
	$('#example1').DataTable({
		"language":{
			"lenghtMenu": "Mostrar _MENU_ registros por pagina",
			"zeroRecords": 	"No se encontraron Resultados en su busqueda",
			"searchPlaceGolder": "Buscar registros",
			"info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
			"infoEmpty": "no existen registros",
			"infoFiltered":"Filtrando de un total de _MAX_ registros",
			"search": "Buscar: ",
			"paginate":{
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"

			},
		}
	});
});
</script>


</body>
</html>
