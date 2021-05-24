<?php
session_start();
	session_destroy();
	session_start();
	include('config.php');
	if(isset($_POST['Login'])){
		$Email          =	$mysqli->real_escape_string($_POST['email']);
		$password          =	md5($_POST['password']);
		$sql2="SELECT id,Email,password  FROM auth WHERE Email='$Email'";
		$run2=mysqli_query($mysqli,$sql2);
		$result=mysqli_fetch_array($run2,MYSQLI_ASSOC);
		if($Email != "" && $password != ""){
			if(isset($result['Email'])){
				if(strtolower($result['Email']) == strtolower($Email) && $result['password']==$password){
					$_SESSION['id'] = $result['id'];
					header("location:index.php");
				}else{
					$getErr = "Incorrect Password";
				}
			}else{
                $getErr = "Email exist";
            }
		}else{
			$getErr = "Nothing Entered";
		}
	}


	if(isset($_POST['Register'])){
		$regUname          =$mysqli->real_escape_string($_POST['regUname']);
		$regUemail         =$mysqli->real_escape_string($_POST['regUemail']);
		$regUpass          =md5($_POST['regUpass']);
		$confRegUpass      =md5($_POST['confRegUpass']);
		

		$sql2="SELECT Email  FROM auth WHERE Email='$regUemail'";
		$run2=mysqli_query($mysqli,$sql2);
		$num_of_rows=mysqli_num_rows($run2);
		if($regUname != "" && $regUpass != "" && $regUemail != "" && $confRegUpass != "" ){
			if(strlen($confRegUpass)>=8){
				if($regUpass == $confRegUpass){
					if($num_of_rows < 1){
						$sql="INSERT INTO auth (Email,password,fullName) VALUES ('$regUemail','$regUpass','$regUname')";
						mysqli_query($mysqli,$sql);
					}else{
						$getErr = "Account already existed";
					}
				}else{
					$getErr = "Password dosen't match";
				}
			}else{
				$getErr = "Password less than 8 characters";
			}
		}else{
			$getErr = "Nothing Entered";
		}

	}
?>