<?php 
include_once('config.php');
$id=$_GET['id'];
//echo $id;
$sql="DELETE FROM employee WHERE id='".$id."'"
$query = $dbConn->prepare($sql);
$query->execute('".$id."'=$id);
header ("Location:index.php");
?>