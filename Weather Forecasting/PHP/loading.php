<!DOCTYPE html>
<html>
<head>
	<title>loading</title>
</head>
<body>
	<img src="http://localhost/Weather_Forecasting/IMAGES/loading.gif" style="position: absolute;top: 30%;left: 35%;">
	<h1 style="position: fixed;top: 60%;left: 40%;">Logging you 
	    <?php 
    session_start();
    echo $_SESSION['fname'];
    echo $_SESSION['lname'];
    ?></h1>
    <script type="text/javascript">
		setTimeout(function() {
			window.location.href="upload.php?word=<?php echo $_SESSION['uniqueid']; ?>";
		},3000)
	</script>

</body>
</html>