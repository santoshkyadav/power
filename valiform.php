<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#name").keyup(function(){
		$("span").remove();
	});
});
</script>
</head>
<body>

<h2>Text input fields</h2>

<form action="valicode.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="name" name="name" ><span><?php echo $_SESSION['errorMsg'];?></span><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  <input type="submit" value="Ok">
</form>
</body>
</html>
