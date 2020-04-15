<?php
	require_once 'conexion.php';
	$sql = "SELECT * FROM candyStore";
	$result = $db->query($sql);
	if ($result = $db->query($sql)) {
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id_dulceria'];
	    	$valor[$i] = $_SESSION['id'];
	        echo"
	        <!--CREANDO EL PINCHE MODAL PARA ACTUALIZAR -->
	        <div class='modal fade' id='registrarProducto".$valor[$i]."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>Registrar Producto</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <!-- contenido de modal Registrar consola -->
           <form>
              <div class='form-group'>
                <label for='nombreProducto' class='col-form-label'>Nombre</label>
                <input type='text' name='nombreProducto' class='form-control' id='nombreProducto".$valor[$i]."' value='".$row['candy_name']."'>

              </div>
              <div class='form-group'>
                <label for='costoProducto' class='col-form-label'>Costo</label>
                <input type='number' class='form-control' name='costoProducto' id='costoProducto".$valor[$i]."' min='1' pattern='^[0-9]+' value='".$row['cost_mxn']."'>

              </div>
                <div class='form-group'>
                <label for='monedasProducto'>Bonificación de Monedas</label>
                    <input type='number' class='form-control' name='monedasProducto' id='monedasProducto".$valor[$i]."'  min='1' pattern='^[0-9]+' value='".$row['coins_per_candy']."'>
                </div>
            </form>
        <!-- contenido de modal Registrar consola -->
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-danger' data-dismiss='modal' id='cancelarConsola'>Cancelar</button>
        <button type='button' onclick='actualizarProducto(".$valor[$i].")' class='btn btn-success' id='guardarConsola'>Guardar Registro</button>
      </div>
    </div>
  </div>
</div>";

	        echo "<tr>
		        	<td>".$row["id_dulceria"]."</td>
		        	<td>".$row["candy_name"]."</td>
		        	<td>".$row["cost_mxn"]."</td>
		        	<td>".$row["coins_per_candy"]."</td>
		        	<td>".
		        	"<div style='display:flex;'>".
			        	"<button id='btnActualizarProducto' class='btn  btn-success btnActualizarProducto' onclick='verModal(".$valor[$i].")'  >"."<i class='fa fa-pencil'></i>". "Actualizar".
			        	"</button>".
			        	"<button id='btnEliminar' onclick='btnEliminarProducto(".$valor[$i].")' class='btn  btn-danger btnEliminar' >"."<i class='fa fa-times'></i>". " Eliminar".
			        	"</button>".
			        "<div>".
		        	"</td>
	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>