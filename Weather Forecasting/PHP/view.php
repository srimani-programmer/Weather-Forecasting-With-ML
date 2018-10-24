<!DOCTYPE html>
<html>
<head>
	<title>viewing of data to user</title>
</head>
<body>
	<?php
	$place=$_GET['word'];
	echo $place;
include('$place.php')
      ?>
	<h1>Location:</h1>
	<h1>Temp</h1>:<h2><?php echo $row['temp'];?></h2>
	<h1>% of rainfall</h1>:<h2><?php echo $row['rainfall'];?></h2>
	<h1>humidity</h1>:<h2><?php echo $row['humidity'];?></h2>
	<h1>floods</h1>:<h2><?php echo $row['floods'];?></h2>
	<h1>draughts</h1>:<h2><?php echo $row['droughts'];?></h2>
</body>
</html>