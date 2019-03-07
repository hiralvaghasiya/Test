<?php 
$database="localhost";
$databaseName="database1";
$databaseUserName="root";
$databasePassword="";


try{
	//access to database
	$dbConn = new PDO('mysql:host=localhost;dbname=database1', $databaseUserName, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	
	//foreach($dbConn->query("select*from employee")as $row){
		//print_r($row);
		//}
	}
	catch(PDOException $e)
	{
	echo "Connection failed: " .$e->getMessage();
	}
?>