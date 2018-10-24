<?php
session_start();
$db = mysqli_connect('localhost','root','','weather');
$date1=$_POST['date1'];
$temp1=$_POST['temp1'];
$rainfall1=$_POST['rainfall1'];
$humidity1=$_POST['humidity1'];
$floods1=$_POST['floods1'];
$draughts1=$_POST['draughts1'];

$date2=$_POST['date2'];
$temp2=$_POST['temp2'];
$rainfall2=$_POST['rainfall2'];
$humidity2=$_POST['humidity2'];
$floods2=$_POST['floods2'];
$draughts2=$_POST['draughts2'];

$date3=$_POST['date3'];
$temp3=$_POST['temp3'];
$rainfall3=$_POST['rainfall3'];
$humidity3=$_POST['humidity3'];
$floods3=$_POST['floods3'];
$draughts3=$_POST['draughts3'];

$date4=$_POST['date4'];
$temp4=$_POST['temp4'];
$rainfall4=$_POST['rainfall4'];
$humidity4=$_POST['humidity4'];
$floods4=$_POST['floods4'];
$draughts4=$_POST['draughts4'];


$insert_path1="INSERT INTO telangana VALUES('telangana','$temp1','$rainfall1','$humidity1','$floods1','$draughts1','$date1')";
$result=mysqli_query($db,$insert_path1)
				or die("try again1");

$insert_path2="INSERT INTO telangana VALUES('telengana','$temp2','$rainfall2','$humidity2','$floods2','$draughts2','$date2')";
$result=mysqli_query($db,$insert_path2)
				or die("try again2");

$insert_path3="INSERT INTO telangana VALUES('telangana','$temp3','$rainfall3','$humidity3','$floods3','$draughts3','$date3')";
$result=mysqli_query($db,$insert_path3)
				or die("try again3");

$insert_path4="INSERT INTO telangana VALUES('telengana','$temp4','$rainfall4','$humidity4','$floods4','$draughts4','$date4')";
$result=mysqli_query($db,$insert_path4)
				or die("try again");



?>
