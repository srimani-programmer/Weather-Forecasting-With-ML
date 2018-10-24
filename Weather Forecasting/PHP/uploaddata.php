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
        <li><a>Date : <?php 
              echo date('d-m-y');
          ?></a></a></li>
      	<li><a href="#"><?php 
              include("find.php")
          ?></a></a></li>
        <li><a href="login.php">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
  <center><h1 style="color: white;">Location: <?php echo $row['location']; ?></h1>
    <form action="submit.php" method="POST">
<div>
  <table frame="box" class="tabledata" border="0">
    <thead>
  <tr>
    <td><h2>Date</h2></td>
    <td><h2>Temp</h2></td>
    <td><h2>% of Rainfall</h2></td>
    <td><h2>Humidity</h2></td>
    <td><h2>% of floods</h2></td>
    <td><h2>% of droughts</h2></td>
  </tr><br>
</thead>
  <tr>
    <td><input type="text" name="date1" value="<?php 
              echo date('d-m-y',strtotime('+1 day'));
          ?>" readonly="yes" style="border: none;"></td>
    <td><input type="text" name="temp1"></td>
    <td><input type="text" name="rainfall1"></td>
    <td><input type="text" name="humidity1"></td>
    <td><input type="text" name="floods1"></td>
    <td><input type="text" name="draughts1"></td>
  </tr><br><br>
  <tr>
    <td><input type="text" name="date2" value="<?php 
               echo date('d-m-y',strtotime('+2 day'));
          ?>" readonly="yes" style="border: none;"></td>
    <td><input type="text" name="temp2"></td>
    <td><input type="text" name="rainfall2"></td>
    <td><input type="text" name="humidity2"></td>
    <td><input type="text" name="floods2"></td>
    <td><input type="text" name="draughts2"></td>
  </tr>
  <tr>
    <td><input type="text" name="date3" value="<?php 
              echo date('d-m-y',strtotime('+3 day'));
          ?>" readonly="yes" style="border: none;"></td>
    <td><input type="text" name="temp3"></td>
    <td><input type="text" name="rainfall3"></td>
    <td><input type="text" name="humidity3"></td>
    <td><input type="text" name="floods3"></td>
    <td><input type="text" name="draughts3"></td>
  </tr>
  <tr>
    <td><input type="text" name="date4" value="<?php 
              echo date('d-m-y',strtotime('+4 day'));
          ?>" readonly="yes" style="border: none;"></td>
   <td><input type="text" name="temp4"></td>
    <td><input type="text" name="rainfall4"></td>
    <td><input type="text" name="humidity4"></td>
    <td><input type="text" name="floods4"></td>
    <td><input type="text" name="draughts4"></td>
  </tr>
</table>
</div>
<br><br><br>
<input type="submit" name="submit">
</form>
</center>



</body>
</html>
