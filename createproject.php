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
	$dbname='sillab';

	$conn=new mysqli($servername,$user,$pass,$dbname) or die("Connection failed");
	//check connection if we can connect to the database or not
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}

	$projectname=$_REQUEST["projectname"];
	$projectlead=$_REQUEST["projectlead"];
	$member1=$_REQUEST["member1"];
	$member2=$_REQUEST["member2"];
  $member3=$_REQUEST["member3"];
  $projectimage=$_REQUEST["projectimage"];
  $description=$_REQUEST["description"];

	$sql="INSERT INTO project VALUES('?','".$projectname."','".$projectlead."','".$member1."','".$member2."','".$member3."','".$description."','".$projectimage."')";
	$result = $conn->query($sql);
	if(mysql_errno()){
    echo "MySQL error ".mysql_errno().": "
         .mysql_error()."\n<br>When executing <br>\n$query\n<br>";
			 }
	redirect('adminpage.html');
	$conn->close();
?>
