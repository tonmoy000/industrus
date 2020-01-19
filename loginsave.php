<?php
session_start();
include_once("dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM user_login where email ='$email' AND password='$password'";
            $result = $conn->query($sql);
					//	print_r($result);
              if($result->num_rows>0){
	               $_SESSION['isLoggedIn']=TRUE;

					foreach($result as $row){
							$_SESSION['email']=$row['email'];
							$_SESSION['name']=$row['name'];
							$_SESSION['company_name']=$row['company_name'];
            }

					}
				//echo $_SESSION['name'];exit;
	header('Location:index');
}else{
	$_SESSION['lmsg']="invalid login";
	header('Location:login.php');
}
?>
