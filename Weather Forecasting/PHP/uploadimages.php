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
  <link rel="stylesheet" type="text/css" href="http://localhost/Weather_Forecasting/CSS/updatedstyle.css">
  <style type="text/css">
    form{
      width:400px;
    height: 560px;
    background: white;
    color: #898e84;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
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
      <a class="navbar-brand" href="#myPage">Weather Forecast data upload</a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php 
              include("find.php")
          ?>
          <li><a>Location: <?php echo $row['location']; ?></a></li>
        <li><a>Date : <?php 
              echo date('d-m-y');
          ?></a></a></li>
      	<li><a href="#"><?php 
          echo $row['fname'];
          ?></a></a></li>
        <li><a href="login.php">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
  <center>
    <h2 style="color: white;">Please enter estimated graphs here for your convinience</h2>
    <form action="submitimage.php" method="POST" enctype="multipart/form-data">
  
   <h2>Temparature</h2><input type="file" name="file1" id="file1" size="80">
    <h2>Rainfall</h2><input type="file" name="file2" id="file2">
<h2>Humidity</h2><input type="file" name="file3" id="file3">
    <h2>Floods</h2><input type="file" name="file4" id="file4">
    <h2>Droughts</h2><input type="file" name="file5" id="file5">
 
<br><br>
<input type="submit" name="submit">
</form>
</center>



</body>
</html>
