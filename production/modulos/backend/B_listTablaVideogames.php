<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	//$sql = "SELECT * FROM videogames";
	$sql = "SELECT v.id, v.title, v.image FROM consoleVideogames cv, videogames v  WHERE cv.consoles_id='$id' AND cv.videogames_id=v.id";
	$result = $db->query($sql);

	if ($result) {
		$i=0;
	    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	    	$_SESSION['id'] = $row['id'];
	    	$valor[$i] = $_SESSION['id'];
	        echo "<tr>
		        	<td>".$row["title"]."</td>
		        	<td width='60%'><p style='text-align: center;'><img style='width: 30%; border-radius: 7px;' src='../../assets/img/videogames/".$row['image']."' alt='image' /> <p></td>
		        	<td>".
		        	"<div class='form-group col-md-1'>
                        <a id='btnEliminar' onclick='listaVideogamesTableDelete(".$id.",".$row['id'].")' class='btn btn-danger' ><i class='fa fa-times'></i></a>
                    </div>".
		        	"</td>

	        	</tr>";
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$result->closeCursor();
 ?>