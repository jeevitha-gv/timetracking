<!DOCTYPE html>
<?php 
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<html>
<head>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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



</style>
</head>
<body style="background: -webkit-gradient(linear, left top, left bottom, from(#8BDFFA), to(#334CFC)) fixed;">
  <h1 style="margin-left: 43%;">TNE Tracker</h1><br>
<?php
if($_POST) {
  signup();
}
?>
<form action="" method="post" style="max-width:500px;margin:auto">
  
  <div class="input-container">
    <i class="fa fa-user icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="Firstname" name="fname" required>
  </div>
  <div class="input-container">
    <i class="fa fa-address-book icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="Lastname" name="lname" required>
  </div>
  <div class="input-container">
    <i class="fa fa-bank icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="CompanyName" name="C_name" required>
  </div>
  <div class="input-container">
    <i class="fa fa-phone icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="Phone Number" name="number" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon fa-2x"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon fa-2x"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" class="form-control" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>

   <div class="input-container">
    <i class="fa fa-lock icon fa-2x"></i>
    <input class="input-field" type="password" placeholder="Confirm-Password" name="cnfpass" class="form-control" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>

  <div class="input-container">
    <i class="fa fa-user icon fa-2x"></i>
    <select  class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="role" style="height: 47px;">
      <option>--> Select User Role <--</option>
      <option value="employee">Employee</option>
      <option value="client">Client</option>
      <option value="project">Project Manager</option>
      <option value="admin">Admin</option>
    </select>
  </div>

  <div style="margin-top: 30px;">
  <button type="submit" name="submit" class="btn btn-success" style="margin-left: 130px;">Signup</button>
  <button type="reset" class="btn btn-danger" style="margin-left: 100px;">Cancel</button><br><br>

              <center>Already have an account <a href="index.php" style="color: black;"><h4>Sign In</h4></a></center>

</div>
</form>

</body>
</html>
<script>




#psw{

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

}
</script>
