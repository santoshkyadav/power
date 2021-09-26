<?php
    //$data = array();
    if(isset($_POST['name']) && isset($_POST['fname'])) {
        //$data[] = 'You entered:' . $_POST['name'];
		$data=$_POST['name'];
		$data1=$_POST['fname'];
        exit(json_encode($data));       
        exit(json_encode($data1));       
    }
?>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(function() { 
        $('form').submit(function(e) { 
            e.preventDefault();
			var name="san";
            $.ajax({
                type        : 'POST',
                url         : 'ajax_with_same_page.php',
                data        : $(this).serialize(),
                dataType    : 'json',
                encode      : true
            })
            .done(function(data) {
                //$('#result').html(data);
alert(data);				
            })
        });
    }); 
</script>
</head>

<body>
    <form>
        <input type="text" name="name">
		 <input type="text" name="fname">
        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>
</body>