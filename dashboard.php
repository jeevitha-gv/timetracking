<!DOCTYPE html>
<?php
include "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<html>
<head>
  <title></title>
</head>
<body> 

<div class="container" style="margin-left:-15px;margin-top:-37px;width:110%;">
  <div class="well">Dashboard</div>
</div>
<div class="container">
  
  <div class="panel panel-default" style="width:450px;height:370px;margin-left:-10px;"> 
   
    <div class="panel-body">Expense Summary<p style="color: grey;">Total Expense Amount</p> <!-- <span class="glyphicon glyphicon-calendar" style="margin-left:120px;"></span> --></div>

  </div>
  <div class="panel panel-default" style="width:450px;height:370px;margin-left:410px;margin-top:-390px;"> 
   
    <div class="panel-body">Timesheet Hours<p style="color: grey;">Billable & Non-Billable Hours</p> <!-- <span class="glyphicon glyphicon-calendar" style="margin-left:120px;"></span> --></div>

  </div>
  <div class="panel panel-default" style="width:450px;height:370px;margin-left:810px;margin-top:-390px;"> 
   
    <div class="panel-body">Time Off Hours<p style="color: grey;">Available Time Off Hours</p> <!-- <span class="glyphicon glyphicon-calendar" style="margin-left:120px;"></span> --></div>

  </div>
</div>
<div class="container">
  
  <div class="panel panel-default" style="margin-left:-10px;width:600px;height:250px;">
   
    <div class="panel-body" style="color: #4C8EBA"><h3>MY TASK LIST</h3></div>
    <hr>

<div style="margin-top:30px;margin-left: 20px;width:90%;">
      <table class="table table-bordered">
    <thead>
      <tr>
       
        <th>Name</th>
        <th>Status</th>
        <th>Priority</th>
        
      
      </tr>
    </thead>
    <tbody>
      <tr>
         <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
  </div>
</div>

<div class="container">
  
  <div class="panel panel-default" style="margin-left:650px;width:610px;height:250px;margin-top:-270px;">
   
    <div class="panel-body" style="color: #4C8EBA"><h3>MY PROJECTS LIST</h3></div>
    <hr>
    <div style="margin-top:30px;margin-left: 20px;width:90%;">
      <table class="table table-bordered">
    <thead>
      <tr>
       
        <th>Name</th>
        <th>Status</th>
        
      
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
  </div>
</div>
<div class="container">
  
  <div class="panel panel-default" style="margin-left:-10px;width:600px;height:250px;margin-top:-10px;">
   
    <div class="panel-body" style="color: #4C8EBA"><h3>MY OPEN TIMESHEET PERIODS</h3></div>
    <hr>
    <div style="margin-top:30px;margin-left: 20px;width:90%;">
      <table class="table table-bordered">
    <thead>
      <tr>
       
        <th>Timesheet Period</th>
        <th>Duration</th>
        <th>Hours</th>
        <th>Status</th>
        
      
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
  </div>
</div>

</body>
</body>
</html>
