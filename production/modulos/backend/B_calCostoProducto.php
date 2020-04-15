<?php
	include_once 'conexion.php';

	$idProducto = $_POST['idProducto'];
	$sql= "SELECT cost_mxn FROM candyStore WHERE id_dulceria='$idProducto'";
	$result = $db->query($sql);

	if ($result) {
		$row = $result->fetch(PDO::FETCH_ASSOC);
		//echo "<input type='number' value='".$row['cost_mxn']."' id='costo' class='form-control' name='costo' disabled='' />";
		echo $row['cost_mxn'];
		
	} else {
	    echo "0 results";
	}
	$result->closeCursor();
?>