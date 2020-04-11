<?php 
	require_once 'conexion.php';
	
	try{
		$sql = "INSERT INTO gamers (name, last_name, birthdate, gender, email, role, username, password, photo, coins, youtube, twitter, facebook, twitch, mixer) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
	            0,
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