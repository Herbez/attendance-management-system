<?php 

try{
	$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
	if($dbh){
		echo "Database connection is well established!";
	}
}

catch(PDOException $e){
	echo "error.".$e->getMessage();
}


 ?> 

 