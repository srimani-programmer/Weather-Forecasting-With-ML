<html>
<head>
    <title>Login Form</title>
    <script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>
    <style type="text/css">
    body{
        background: url('http://localhost/Weather_Forecasting/IMAGES/logingif.gif');
        background-size: cover;
    }

        .login-box{
    width:320px;
    height: 480px;
    background: white;
    color: #898e84;
    top: 50%;
    left: 75%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
}

#username,#password
{
     width: 100%;
    margin-bottom: 30px;
    color: #898e84;
    border: none;
    border-bottom: 1px solid #8b9099;
    background: transparent;
    outline: none;
    height: 25px;
    color: #898e84
    font-size: 16px;
}
#text{
    width: 100%;
    margin-bottom: 50px;
    color: #898e84;
    border: none;
    border-bottom: 1px solid #8b9099;
    background: transparent;
    outline: none;
    height: 25px;
    color: #898e84
    font-size: 16px;
}
#button
{
    border: none;
    outline: none;
    height: 40px;
    width: 260px;
    background: #3bce3b;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}
#button:hover
{
    cursor: pointer;
    background: #898e84;
    color: white;
}
a{
    padding-left: 80px;
    text-decoration: none;
    color: #898e84;
}
a:hover{
    color: red;
}
.head{
    padding-left: 60px;
    margin-bottom: 40px;
    color: #a8f46e
}
p{
    padding-left: 20px;
    color: #898e84}
#captcha{
    background-image: url('sri6.jpg');
    background-size: cover;
    border: 1px solid #8b9099;
    color: #898e84;
    cursor: no-drop;
    font-size: 25px;
    height: 40px;
    width: 140px;
    margin-left: 50px;
    padding-left: 25px;
    border-radius: 40px;
}
::placeholder {
    color: #898e84;
    opacity: 1;
}
::value {
    color: #898e84;
    opacity: 1;
    }
</style>
</head>
    <body id="myimage">
    <div class="login-box">
        <h1 class="head">Login Here</h1>
            <form name="form"  action="<?php

            echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="username" placeholder="Enter username" id="username" required="yes" value="<?= isset($_POST['username']) ? $_POST['username']: ''; ?>">
            <input type="password" name="password" placeholder="Enter Password" id="password" required="yes" value="<?= isset($_POST['password']) ? $_POST['password']: ''; ?>">

            <input type="text" name="text" id="text" placeholder="Enter captcha code here" required="yes" autocomplete="off">
            <input name="captcha" value="<?php include('rand.php'); ?>" id="captcha" readonly="yes"><br><br>
            <input type="submit" name="submit" value="Login" id="button"><br><br>
            <a href="upload.php">Forgot Password.?</a>
            <p id="page"><?php
           $username=$nameErr="";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            include("check.php");
        }
          ?>
        </p>
            </form>
        </div>

    </body>
</html>
