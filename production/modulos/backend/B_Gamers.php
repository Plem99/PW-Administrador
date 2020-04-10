<?php 
	require_once 'conexion.php';
	include "B_GamersCard.php"; 	
	//$sql = "SELECT idGamer, nombre, apePat, apeMat, genero, direccion, tel FROM tGamers";
	$sql = "SELECT * FROM gamers";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
	    
		$i=0;
	    while($row = $result->fetch_assoc()) {
	    	$_SESSION['id'] = $row['id'];
	    	$valor[$i] = $_SESSION['id']; 
	    	//echo $valor[$i];
	    	top($row['username']);
	        echo "<h2>" . $row['name']. " ". $row['last_name']."</h2>".
	        "<p><strong><i class='fa fa-male'></i> Genero: "."</strong>".$row['gender']."</p>".
	        "<p><strong><i class='fa fa-google'></i> Email: "."</strong>".$row['email']."</p>".
	        "<p><strong><i class='fa fa-usd'></i> Monedas: "."</strong>".$row['coins']."</p>".
	        "<p><strong><i class='fa fa-facebook-square'></i> Facebook: "."</strong>".$row['facebook']."</p>".
	        "<p><strong><i class='fa fa-twitch'></i> Twitch: "."</strong>".$row['twitch']."</p>".
	        "<p><strong><i class='fa fa-twitter'></i> Twitter: "."</strong>".$row['twitter']."</p>".
	        "<p><strong><i class='fa fa-youtube-play'></i> Youtube: "."</strong>".$row['youtube']."</p>";
	        down($valor[$i]);
	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}

	$db->close();
 ?>