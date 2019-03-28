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
    <title>Expense Approval</title>
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
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Expense Approval</b></h5>
</div>
</div>
<?php if(isset($_POST['submit']))
{
  ex_approve();
} ?>
<form action="" method="post">
<div class="container">
  <div class="row">
<?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id= $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="hidden" class="form-control" value="<?php echo $row['id'];?>" name="e_id">
      <?php } } else { echo "0 results"; } ?>

    <div class="col-md-4">
      <label>Client Name</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id= $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['clientname'];?>" name="ex_clientname">
      <?php } } else { echo "0 results"; } ?>
    </div>

    <div class="col-md-4">
      <label>Project Name</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['projectname'];?>" name="ex_projectname">
      <?php } } else { echo "0 results"; } ?>
    </div>

    <div class="col-md-4">
      <label>Employee Name</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['employeename'];?>" name="ex_employeename">
      <?php } } else { echo "0 results"; } ?>
    </div>

  </div><br><br>
  <div class="row">

    <div class="col-md-4">
      <label>Expense Name</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['expensename'];?>" name="ex_expensename">
      <?php } } else { echo "0 results"; } ?>
    </div>

    <div class="col-md-4">
      <label>Payment Method</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['paymentmethod'];?>" name="ex_paymentmethod">
      <?php } } else { echo "0 results"; } ?>
    </div>

    <div class="col-md-4">
      <label>Expense Date</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['expenseentrydate'];?>" name="ex_entrydate">
      <?php } } else { echo "0 results"; } ?>
    </div>

  </div><br><br>
  <div class="row">

    <div class="col-md-4">
      <label>Net Amount</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['netamount'];?>" name="ex_netamount">
      <?php } } else { echo "0 results"; } ?>
    </div>

    <div class="col-md-4">
      <label>Amount</label>
      <?php
        $var=$_GET['userid'];
        $sql = "SELECT * from expense where id = $var";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {  ?>
      <input type="text" class="form-control" value="<?php echo $row['amount'];?>" name="ex_amount">
      <?php } } else { echo "0 results"; } ?>
    </div>

  </div><br><br>
</div>
<div style="margin-left: 90%;">
  <input type="submit" name="submit" value="Approve" class="btn btn-info">
</div><br><br>
  </form>
  </div>
</div>
</body>
</html>
