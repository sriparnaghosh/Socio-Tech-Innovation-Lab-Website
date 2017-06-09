<?php
    session_start();
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }


	$email_login=$_POST["email"];
	$password_login=$_POST["password"];
  $servername ='localhost';
    $user='root';
    $pass='';
    $dbname='silblog';

	   if ($email_login && $password_login) {
            $conn =new mysqli($servername,$user,$pass,$dbname) or die("Connection failed");

            $sql ="SELECT * FROM admin WHERE Email = '$email_login'";
            $result =$conn->query($sql);
            $row=mysqli_fetch_array($result);
            if($row)
            {
                $password=$row['Password'];
                $_SESSION['id'] =$row['id'];
            }
            if($password==$password_login)
            {
                redirect('adminpage.html');

            }
            else
                 redirect('index.html');

        }
	$conn->close();

?>
