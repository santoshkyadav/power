<?php 
$server_name = "localhost";
$user_name = "root";
$user_password = "";
$database_name ="easyday";
$con = new mysqli($server_name, $user_name, $user_password, $database_name);
if($con->connect_error) {
	die(" connection Failed " . $con->connect_error);
}
	else {
		echo "connection Successfully";
		
	}
/*
TO CREATE TABLE 
$sql = "CREATE Table tabOOp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), email VARCHAR(30), dATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";
*/

$sql = "INSERT INTO tabOOp (name, email) VALUES('santosh kumar yadav', 'sk@gmail.com');";
/* 
to insert data into table  
*/

$sql .= "INSERT INTO tabOOp (name, email) VALUES('Binay kumar yadav', 'vk@gmail.com');";
$sql .= "INSERT INTO tabOOp (name, email) VALUES('Dinesh kumar yadav', 'dk@gmail.com')";
/*
// multple insert into a table at same time 
*/
if($con->multi_query($sql) === true)
{
	$last_id = $con->insert_id;
	echo "Insert successfully " .$last_id;
}
else
{
	echo "error " . $con->error;
}
	$con->close();
?>