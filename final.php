<div id="cargacss" class="cargacss"></div>
<span id="span1" class="oculto"></span>
<span id="span2" class="oculto"></span>
<span id="span3" class="oculto"></span>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  
<script src="vendor/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js" type="text/javascript"></script>

  <!-- Page level custom scripts -->
  <script src="js/carga-tabla.js"></script>
  <!--
  <script src="DataTables/datatables.min.js" type="text/javascript"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  -->
  </div>
</body>
</html>


   <script>
   // se incluye el archivo php para que el div este disponible
   // La identificaion del div se pasas por jquery
   // dic 8 2020 se pasan todos los formularios a un solo modal
   // los parametros van en el enlace usando data-XXXXXXXX

$('#modalNuevo').on('show.bs.modal', function (event) {
	
	var button = $(event.relatedTarget)
	var ubicacion = button.data('ubicacion')
	// var idUsuario = 1;
	var titulo = button.data('titulo')
	// var direcciongo=ubicacion+'?dt='+idUsuario;
	var modal = $(this)
  modal.find('.modal-title').text(titulo)
  // alert(direcciongo);
  
  	$( "#cuerpox" ).empty();
	$( "#cuerpox" ).load(ubicacion);
  	/*
	  $.ajax(
	  direcciongo, 
	  {
		  data: { dt : idUsuario },
		  dataType: "html",
		  success: function(data) {
			alert('AJAX call was successful!');
			//alert('Data from the server' + data);
			// limpiar el div
			$( "#cuerpox" ).empty();
			$( "#cuerpox" ).append(data);
			
			alert("paso");
			// destruir data
			//data ='';
			
		  },
		  error: function() {
			alert('Hubo un error');
		  }
	   }
	);
	*/
})
	
	
$('#modalEditar').on('show.bs.modal', function (event) {
	// alert("ingre");
  var button = $(event.relatedTarget) // Button that triggered the modal
  var idUsuario = button.data('idusuario') // Extract info from data-* attributes
  // alert(idUsuario);
  var ubicacion = button.data('ubicacion') // Extract info from data-* attributes
  var titulo = button.data('titulo')
  var direccionir=ubicacion+'='+idUsuario;
	var modal = $(this)
	modal.find('.modal-title').text(titulo)

	$.ajax(
	  direccionir, 
	  {
		  data: { dt : idUsuario },
		  dataType: "html",
		  success: function(data) {

			$( "#cuerpov" ).empty();
			$( "#cuerpov" ).append(data);
			
		  },
		  error: function() {
			alert('Hubo un error');
		  }
	   }
	);
})	
	

</script>


<?php 
// DEBUG 7 dic 2020 RZA
/*
echo "<br>-----------------------------------------<br>SESSION<br>-----------------------------------------<br>";
var_dump($_SESSION);
echo "<br>-----------------------------------------<br> FIN SESSION<br>-----------------------------------------<br>";

echo "<br>-----------------------------------------<br>POST<br>-----------------------------------------<br>";
var_dump($_POST);
echo "<br>-----------------------------------------<br> FIN POST<br>-----------------------------------------<br>";
*/
?>