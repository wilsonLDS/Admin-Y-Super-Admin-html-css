<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>

<?php include ('../../views/front/templates/foot.php'); ?>