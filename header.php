		<?php  
		
		include('includes/bd/conexion.php');
		include('includes/bd/conexionSQL.php');
		include('includes/libs/Smarty.class.php');
		include('includes/clases/Fecha.php');
	    include('includes/clases/Reporte.php');
		@session_start();
		if (!$_SESSION){
		echo '<script language = javascript>
		alert("usuario no autenticado")
		self.location = "/control-de-fabricacion/"
		</script>';
		}
		?>