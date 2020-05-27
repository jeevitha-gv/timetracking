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
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<meta charset="utf-8">

    <title>Billing</title>
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
       <div class="col-md-12">
   
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashbord</a> : <a href="approval.php">Manage Approvals</a> : Expense Approval</h4>
  <div class="panel panel-default" style="width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>EXPENSE APPROVAL
    </b></h5>
</div>
</div>
          <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>Client Name</th>
         <th>Project Name</th>
         <th>Expense Entry Date</th>
         <th>Expense Type</th>
        <th>Employee Name</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Billable / NonBillable</th>
        <th>Action</th>
        </tr>
    </thead>
    <?php
    $sql = "SELECT * from expense";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
        <td><?php echo $row['clientname']; ?></td>
        <td><?php echo $row['projectname']; ?></td>
        <td><?php echo $row['expenseentrydate'];?></td>
        <td><?php echo $row['expensename']; ?></td>
        <td><?php echo $row['employeename']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['billable']; ?></td>
        <td><a href="ex_approve.php?userid=<?php echo $row['id'];?>" class="btn btn-info">Approve</a> <a href="" class="btn btn-danger">Return</a></td>
      </tr>
    </tbody>
    <?php } }else { echo "0 results"; } ?>
  </table>
</div>
  </div> 
  </div> 
       </div>
       </div>
     </div>
</body>
</html>
