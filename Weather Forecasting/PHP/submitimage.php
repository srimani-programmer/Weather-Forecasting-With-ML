<?php
$date=date('y-m-d');

$db = mysqli_connect('localhost','root','','weather_database');
  $query="select * from login_table";
    $result=mysqli_query($db,$query);
      $row=mysqli_fetch_array($result);


	$file1=$_FILES['file1'];
	$fileName1=$_FILES['file1']['name'];
	$fileTmpName1=$_FILES['file1']['tmp_name'];
	$filesize1=$_FILES['file1']['size'];
	$fileError1=$_FILES['file1']['error'];
	$fileType1=$_FILES['file1']['type'];
	

	$fileExt1=explode('.', $fileName1);
	$fileActualExt1=strtolower(end($fileExt1));

	$file2=$_FILES['file2'];
	$fileName2=$_FILES['file2']['name'];
	$fileTmpName2=$_FILES['file2']['tmp_name'];
	$filesize2=$_FILES['file2']['size'];
	$fileError2=$_FILES['file2']['error'];
	$fileType2=$_FILES['file2']['type'];

	$fileExt2=explode('.', $fileName2);
	$fileActualExt2=strtolower(end($fileExt2));

	$file3=$_FILES['file3'];
	$fileName3=$_FILES['file3']['name'];
	$fileTmpName3=$_FILES['file3']['tmp_name'];
	$filesize3=$_FILES['file3']['size'];
	$fileError3=$_FILES['file3']['error'];
	$fileType3=$_FILES['file3']['type'];

	$fileExt3=explode('.', $fileName3);
	$fileActualExt3=strtolower(end($fileExt3));

	$file4=$_FILES['file4'];
	$fileName4=$_FILES['file4']['name'];
	$fileTmpName4=$_FILES['file4']['tmp_name'];
	$filesize4=$_FILES['file4']['size'];
	$fileError4=$_FILES['file4']['error'];
	$fileType4=$_FILES['file4']['type'];

	$fileExt4=explode('.', $fileName4);
	$fileActualExt4=strtolower(end($fileExt4));

	$file5=$_FILES['file5'];
	$fileName5=$_FILES['file5']['name'];
	$fileTmpName5=$_FILES['file5']['tmp_name'];
	$filesize5=$_FILES['file5']['size'];
	$fileError5=$_FILES['file5']['error'];
	$fileType5=$_FILES['file5']['type'];

	$fileExt5=explode('.', $fileName5);
	$fileActualExt5=strtolower(end($fileExt5));

	$allowed=array('jpg','jpeg','png');

	
				$fileNameNew1='temp'.$date.".".$fileActualExt5;;
				$fileDestination1= $row['location'].'/'.$fileNameNew1;
				move_uploaded_file($fileTmpName1, $fileDestination1);

				$fileNameNew2='rainfall'.$date.".".$fileActualExt5;;
				$fileDestination2= $row['location'].'/'.$fileNameNew2;
				move_uploaded_file($fileTmpName2, $fileDestination2);

				$fileNameNew3='humidity'.$date.".".$fileActualExt5;;
				$fileDestination3= $row['location'].'/'.$fileNameNew3;
				move_uploaded_file($fileTmpName3, $fileDestination3);

				$fileNameNew4='floods'.$date.".".$fileActualExt5;;
				$fileDestination4= $row['location'].'/'.$fileNameNew4;
				move_uploaded_file($fileTmpName4, $fileDestination4);

				$fileNameNew5='droughts'.$date.".".$fileActualExt5;;
				$fileDestination5= $row['location'].'/'.$fileNameNew5;
				move_uploaded_file($fileTmpName5, $fileDestination5);
				$query="insert into tsimages values('$date','$fileNameNew1','$fileNameNew2','$fileNameNew3','$fileNameNew4','$fileNameNew5','yes')";
			$result=mysqli_query($db,$query)
				or die("try again");
			


?>