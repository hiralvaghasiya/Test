<?php
include_once('config.php');
$id=$_POST['id'];

$fname=$_POST["f_name"];
$lname=$_POST["l_name"];
$job_title=$_POST["job_title"];
$salary=$_POST["salary"];
$note=$_POST["notes"];

$result="UPDATE employee SET 'first_name'='".$fname."','last_name'='".$lname."','job_title'='".$job_title."','salary='".$salary."','notes'='".$note."' WHERE id = '".$id."'";
$sql =$dbConn->prepare($result);
$dbConn->exec($result);


 ?>