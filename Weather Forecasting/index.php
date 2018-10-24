<!DOCTYPE html>
<html lang="en">
<head>
  <title>Weather Forecast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="http://localhost/Weather_Forecasting/IMAGES/icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Weather_Forecasting/CSS/style.css">
  <style type="text/css">
    body {
       margin: 0;
    font-family: Arial;
    font-size: 17px;
      color: #777;
      background: url('IMAGES/back.gif');
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
      <a class="navbar-brand" href="#myPage">Weather Forecast</a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a><p style="color: white;margin-left: 200px;">Date : <?php echo date('d-m-y'); ?></p></a></li>
        <li><a href="http://localhost/Weather_Forecasting/PHP/login.php">MDLogin</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Location
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/Weather_Forecasting/PHP/telangana.php">Telangana</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/kerala.php">Kerala</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/orissa.php">Orissa</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/arunachalpradesh.php">Arunachal pradesh</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/assam.php">Assam</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/andhrapradesh.php">Andhrapradesh</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/jarkand.php">Jarkand</a></li>
            <li><a href="http://localhost/Weather_Forecasting/PHP/karnataka.php">Karnataka</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="content">
  <h1>About Weather</h1>
  <q>Nature is so powerful, so strong. Capturing its essence is not easy - your work becomes a dance with light and the weather. It takes you to a place within yourself.-by Annie Leibovitz</q>
</div>

</body>
</html>
