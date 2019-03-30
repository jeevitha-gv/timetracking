<?php
// Starting session
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<title>Sign In</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #FF4500;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body style="background: -webkit-gradient(linear, left top, left bottom, from(#8BDFFA), to(#334CFC)) fixed;">

  <h1 style="margin-left: 40%;">TNE Tracker</h1><br><br>
<form action ="" method="post">
<div class="container" style="width: 20%; margin-left: 575px;">
  


      <div class="input-container">
    <i class="fa fa-user icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
     
     <div class="input-container">
    <i class="fa fa-key icon fa-2x"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
        </div>

        <label>
          <input type="checkbox" name="remember" style="width: 40px; height: 20px;">Remember me
        </label>

<button type="submit" name="login" class="btn btn-success" style="background-color:#6DAA03;  width:50%; margin-left: 70px; margin-top: 10px;">Log In</button>      



  
</div>
</form>
<div style="margin-left: 625px;">
<p style="margin-top: 10px;">Don't have an account? <a href="signup.php" style="color:black;"><b>Sign Up</b></a> </p>
</div>
</body>
</html>

<?php 
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<?php
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mdpass=md5($password);
  $q = "SELECT * FROM signup WHERE email='$email' AND password = '$mdpass' limit 1";

  $result = mysqli_query($con, $q);
  if(mysqli_num_rows($result) == 1)
  {
    $result2=mysqli_fetch_array($result);
    $_SESSION['userid'] = $result2['id'];
    $_SESSION['emailid']=$result2['email'];
    $_SESSION['fname'] = $result2['fname'];
    $_SESSION['user_role'] = $result2['user_role'];
    header("Location:dashboard.php");
  } else{
  
echo "<script>alert('Email and password does not match');location.href='index.php'</script>";
  }

}
?>