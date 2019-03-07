<?php 
include_once('config.php');
if (isset($_POST['submit'])){
$fname=$_POST["f_name"];
$lname=$_POST["l_name"];
$job_title=$_POST["job_title"];
$salary=$_POST["salary"];
$note=$_POST["notes"];

$result="INSERT INTO employee('first_name','last_name','job_title','salary','notes') VALUES ('".$fname."','".$lname."','".$job_title."','".$salary."','".$note."')";
//$sql =$dbConn->prepare($result);
$dbConn->exec($result);
echo "data inserted Sucessfull.";
}
?>