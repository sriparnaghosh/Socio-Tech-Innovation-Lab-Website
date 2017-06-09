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
		die("Connection failed:".$conn->connect_error);
	}

	$blogname=$_REQUEST["blogname"];
	$blogtagline=$_REQUEST["blogtagline"];
	$blogimage=$_REQUEST["blog-image"];
  $blogvideo=$_REQUEST["blog-video"];
  $description=$_REQUEST["description"];

  //if($blogimage)
	 //$sql="INSERT INTO posts VALUES('?','".$blogname."','".$blogtagline."','".$description."','".$blogimage."')";
  //else {
    # code...
   $sql="INSERT INTO posts VALUES('?','".$blogname."','".$blogtagline."','".$description."','".$blogimage."','".$blogvideo."')";
  //}
	$result = $conn->query($sql);
	if(mysql_errno()){
    echo "MySQL error ".mysql_errno().": "
         .mysql_error()."\n<br>When executing <br>\n$query\n<br>";
			 }
	redirect('adminpage.html');
	$conn->close();
?>
