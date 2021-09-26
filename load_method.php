<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#clicks").click(function(){
		$("#show_p").load("para_data.php",function(responseText,statusText,xhr){
			alert(responseText);
			alert(statusText);
		});
	});
});
</script>
</head>
<body>
<div id="show_p">
</div>
<h2 id="clicks">Click Me</h2>
</body>
</html>