<?php 
	require_once 'conexion.php';
	$id = $_POST['idV'];
	
	try{
		$sql = "UPDATE gamers SET name=?, last_name=?, birthdate=?, gender=?, email=?, role=?, username=?, password=?, photo=?, coins=?, youtube=?, twitter=?, facebook=?, twitch=?, mixer=? WHERE id='$id'";
		$result = $db->prepare($sql);
		$result->execute([
	            $_POST['nameV'],
	            $_POST['last_nameV'],
	            $_POST['birthdateV'],
	            $_POST['genderV'],
	            $_POST['emailV'],
	            $_POST['roleV'],
	            $_POST['usernameV'],
	            $_POST['passwordV'],
	            0,
	            $_POST['coinsV'],
	            $_POST['youtubeV'],
	            $_POST['twitterV'],
	            $_POST['facebookV'],
	            $_POST['twitchV'],
	            $_POST['mixerV']
	        ]);
		//$result->closeCursor();
	}catch(PDOException $e){
        echo $e;
    }
    
 ?>