<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<html lang="en"> 
<head> 
    <title>Approved</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css">
<style>
    
body {
    margin: 5px;
    background:#ECF0F1;
}

/* Tab Navigation */
.nav-tabs {
    margin: 0;
    padding: 0;
    border: 0;

}
</style>
</head>
<body>
  <div class="container" style="width:1500px;margin-left:10px;">
  <div class="panel panel-default">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Timesheet Approved</b></h5>
</div>
</div>
     <div style="margin-top: 40px;">
     <div class="container-fluid" style="text-align: center;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Employee Name</th>
            <th>TimeSheet Total</th>
            <th>Project Name</th>
            <th>Task Name</th>
            <th>TimeSheet Date</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
    $sql = "SELECT * from timesheetapproved LIMIT 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
        <tbody>
          <tr>
            <td><?php echo $row['employee']; ?></td>
            <td><?php echo $row['timesheettotal'];?></td>
            <td><?php echo $row['projectname']; ?></td>
            <td><?php echo $row['taskname']; ?></td>
            <td><?php echo $row['timesheetdate']; ?></td>
            <td><?php echo $row['description'];?></td>
            <td><a href="invoicemanagement.php" class="btn btn-info">Generate Invoice</a></td>
          </tr>
        </tbody>
        <?php } }else { echo "0 results"; } ?>
      </table>
     </div>
  </div>
 </div>
</div>
<div class="container" style="width:1500px;margin-left:10px;">
  <div class="panel panel-default">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Expense Approved</b></h5>
</div>
</div>
     <div style="margin-top: 40px;">
     <div class="container-fluid" style="text-align: center;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Project Name</th>
            <th>Employee Name</th>
            <th>Expanse Name</th>
            <th>Payment Method</th>
            <th>Expense Date</th>
            <th>Net Amount</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
    $sql = "SELECT * from expenseapproved LIMIT 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
        <tbody>
          <tr>
            <td><?php echo $row['clientname']; ?></td>
            <td><?php echo $row['projectname'];?></td>
            <td><?php echo $row['employeename']; ?></td>
            <td><?php echo $row['expensename']; ?></td>
            <td><?php echo $row['paymentmethod']; ?></td>
            <td><?php echo $row['expensedate'];?></td>
            <td><?php echo $row['netamount'];?></td>
            <td><?php echo $row['amount'];?></td>
            <td><a href="invoicemanagement.php" class="btn btn-info">Generate Invoice</a></td>
          </tr>
        </tbody>
        <?php } }else { echo "0 results"; } ?>
      </table>
     </div>
  </div>
 </div>
</div>
</body>
</html>
