<?php
	include_once 'conexion.php';

	$pagasV = $_POST['pagasV'];
	$costoV = $_POST['costoV'];
	$total;

	if($pagasV>=$costoV && $pagasV!=''){
		$total = $pagasV - $costoV;
		echo $total;
	}else{
		echo "Necesitas mas dinero";
	}

?>