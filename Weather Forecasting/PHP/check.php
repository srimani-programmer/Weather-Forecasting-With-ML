<?php
session_start();
$captcha=$_POST['captcha'];
$text=$_POST['text'];
	if($captcha==$text)
	{
$db = mysqli_connect('localhost','root','','weather_database');
    $username = test_input($_POST["username"]);
    if (preg_match("/^[_a-zA-Z0-9]+$/", $username)){
    	$password=test_input($_POST["password"]);
    	if (preg_match("/^[_0-9]+$/", $password)){
			$query="select * from login_table where password=".$password;
			$result=mysqli_query($db,$query)
				or die("try again");
			$row=mysqli_fetch_array($result);
			$word=$row['uniqueid'];
			if($row['username']==$username){
				$_SESSION['fname']=$row['fname'];
				$_SESSION['lname']=$row['lname'];
				$_SESSION['uniqueid']=$row['uniqueid'];
				header("Location:loading.php");exit;
			}else{?><script type="text/javascript">
				document.form.username.style.color="red";
				document.form.password.style.color="red";
				</script><?php
				echo "rollnumber or password is incorrect*";
			}
		}else{
			?><script type="text/javascript">
				document.form.username.style.color="red";
				</script><?php
				echo "Please write proper password";
		}

	}else{
    	echo "Please write proper rollnumber";
	}
	}
	else
	{
		echo "entered captcha not correct";
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>