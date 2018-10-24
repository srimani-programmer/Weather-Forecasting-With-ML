<!DOCTYPE html>
<html lang="en">
<head>
  <title>upload weather forecast data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="http://localhost/Weather_Forecasting/IMAGES/icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Weather_Forecasting/CSS/updatestyle.css">
  <style type="text/css">
    .upload-box{
    width:480px;
    height: 300px;
    background: url('http://localhost/Weather_Forecasting/IMAGES/loginbgm.jpg');
    background-size: cover;
    color: white;
    top: 50%;
    left: 25%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
}
body {
       margin: 0;
    font-family: Arial;
    font-size: 17px;
      color: #777;
      background: url('http://localhost/Weather_Forecasting/IMAGES/back.gif');
      background-size: cover;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navnav"><img class="navbar-brand" src="http://localhost/Weather_Forecasting/IMAGES/icon.png" style=" height: 55px;width: 55px;">
      <a class="navbar-brand" href="#myPage">Weather Forecast file upload</a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><?php 
              include("find.php")
          ?></a></li>
        <li><a href="login.php">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="welcome"><h1>welcome <?php 
              echo $word;
          ?>, how are you</h1></div>
<div class="upload-box">
	<h2>please upload your .csv or .xlsx of your department place</h2>
	<form action="http://localhost/Extension/connect.php" method="POST">
    <div class="Url">
    	<input type="file" name="url" class="url">
    </div>
     <center><input type="submit" name="submit" class="submit">
   <p>or</p>
    <a href="uploaddata.php?word=<?php echo $uniqueid ?>" style="color: white;">Enter prediction data</a> or <a href="uploadimages.php?word=<?php echo $uniqueid ?>" style="color: white;">Images</a></center>
  </form>
</div>


</body>
</html>
