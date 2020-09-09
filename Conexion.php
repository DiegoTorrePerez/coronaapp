	<?php
	try{
		$pdo = new PDO("mysql:host=fdb22.awardspace.net;dbname=3385091_servicio", "3385091_servicio", "S3zLq.SB0e)mV8QQ");
	} catch (PDOException $e){
		print"!Error! " . $e->getMessage() . "<br/>";
		die();
	}
