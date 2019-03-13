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
  <div class="well"><a href="dashboard.php"><h4>Dashboard</h4></a></div>
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
  
  <div class="panel panel-default" style="margin-left:-10px;width:600px;">
   
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
    <?php
      $sql = "SELECT * from task order by id desc limit 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
         <td><?php echo $row['taskname'];?></td>
        <td><?php echo $row['taskstatus'];?></td>
        <td><?php echo $row['priority'];?></td>
      </tr>
      
    </tbody>
    <?php } } else { echo "0 results"; } ?>
  </table>
</div>
  </div>
</div>

<div class="container">
  
  <div class="panel panel-default" style="margin-left:650px;width:610px;margin-top: -330px;">
   
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
    <?php
      $sql = "SELECT * from project order by p_id desc limit 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
        <td><?php echo $row['projectname'];?></td>
        <td><?php echo $row['project_status'];?></td>
      </tr>
    </tbody>
    <?php } } else { echo "0 results"; } ?>
  </table>
</div>
  </div>
</div>
<div class="container">
  
  <div class="panel panel-default" style="margin-left:-10px;width:600px;margin-top:-10px;">
   
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
    <?php
      $sql = "SELECT * from project order by p_id desc limit 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
       <!--  <td><?php echo $row['project_status'];?></td>
        <td><?php echo $row['project_status'];?></td>
        <td><?php echo $row['project_status'];?></td>
        <td><?php echo $row['project_status'];?></td> -->
      </tr>
    </tbody>
    <?php } } else { echo "0 results"; } ?>
  </table>
</div>
  </div>
</div>

</body>
</body>
</html>