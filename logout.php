<?php
session_start();
ob_start();
if(isset($_SESSION['userid'])){
	session_destroy();
	unset($_SESSION['userid']);
	unset($_SESSION['emailid']);
	unset($_SESSION['fname']);
	unset($_SESSION['user_role']);
	header("Location: index.php");
}else{
	header("Location:index.php");
}
?>