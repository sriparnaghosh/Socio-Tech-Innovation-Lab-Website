<?php
	session_start();
	function redirect($url, $statusCode = 303)
  {
   header('Location: ' . $url, true, $statusCode);
   die();
 }

	$servername='localhost';
	$user='root';
	$pass='';
	$dbname='silblog';

	$conn=new mysqli($servername,$user,$pass,$dbname) or die("Connection failed");
	//check connection if we can connect to the database or not
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect->error);
	}
  $email=$_REQUEST["email"];
  $sql="INSERT INTO subscription VALUES('?','".$email."')";
  $result = $conn->query($sql);
  $conn->close();
  redirect('blog.html');
?>
