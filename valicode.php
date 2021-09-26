<?php
session_start();
$errorMsg="";
$name=check($_POST['name']);

if(empty($name))
{
	$errorMsg="Enter Name";
	$_SESSION['errorMsg']=$errorMsg;
	header("Location:valiform.php");
	
	
}
else
{
	session_destroy();
}
function check($data)
{
	$data=trim($data);
	$data=htmlspecialchars($data);
    return $data;
}
?>