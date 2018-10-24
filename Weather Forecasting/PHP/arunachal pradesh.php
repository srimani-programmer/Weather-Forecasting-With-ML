

  <!DOCTYPE html>
<html>
<head>
	<title>viewing of data to user</title>
</head>
<body>
	<?php
$date=date('y-m-d');
$db = mysqli_connect('localhost','root','','weather_database');
  $query="select * from arunachalpradesh where date=$date";
    $result=mysqli_query($db,$query);
      $row=mysqli_fetch_array($result);
      echo $row['date'];
  ?>
	<h1>Location:Kerala</h1>
	<h1>Temp</h1>:<h2><?php echo $row['temp'];?></h2>
	<h1>% of rainfall</h1>:<h2><?php echo $row['rainfall'];?></h2>
	<h1>humidity</h1>:<h2><?php echo $row['humidity'];?></h2>
	<h1>floods</h1>:<h2><?php echo $row['floods'];?></h2>
	<h1>draughts</h1>:<h2><?php echo $row['droughts'];?></h2>
</body>
</html>