<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";

?>
<html lang="en"> 
<head> 
<meta charset="utf-8">

    <title>Invoice History</title>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->

<meta name="description" content="Twitter Bootstrap Basic Tab Based Navigation Example">
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap2.2.css" rel="stylesheet"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   label {
    display: block;
    font: 1.3rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .40rem 0;
}

.note {
    font-size: .80em;
}

body {
    margin: 5px;
    background:#ECF0F1;
}



.modal-content
{
    width:100%;
}

</style>
</head>
<body>
  
    <div class="col-md-12">
    <div>
<div class="container-fluid">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashboard</a> :<a href="billing.php"> Billing</a> : Time & Expense Billing </h4>
  
  <div class="panel panel-default">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><B>TIME & EXPENSE INVOICE LIST</B></h5></div>
  
<?php if($_POST) { invoice(); } ?>

   <div style="float: right;margin-top: -50px;">
    <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add Invoice List</button>
 <form action="" method="post"> 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
   <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title">Invoice Information</h4>
        </div>
        <div class="modal-body">
        <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>PO Number</h6></label>
        <input class="form-control" type="text" name="ponumber">
      </div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billable</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billable">
          <option></option>
          <option value="Both">Both </option>
          <option value="Billable">Billable</option>
          <option value="NonBillable">NonBillable</option>
        </select>
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Client Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="clientname">
          <option></option>
            <?php
            $sql = "SELECT * from client";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result))
            { ?>
          <option value="<?php echo $row['clientname']; ?>"><?php echo $row['clientname']; ?></option>
            <?php } } ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Project Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projectname">
          <option></option>
               <?php
                $sql = "SELECT * from project";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))
                { ?>
          <option value="<?php echo $row['projectname']; ?>"><?php echo $row['projectname']; ?></option>
              <?php } } ?>
        </select>
      </div>
      <div class='col-sm-4'>
        <label for="ex2" style="color: black;"><h6>Invoice Date</h6></label>
          <input type='date' class="form-control" name="invoicedate">
      </div>
      <div class='col-sm-4'>
        <label for="ex2" style="color: black;"><h6>Billing Cycle Start Date</h6></label>
          <input type='date' class="form-control" name="billing_startdate" />
      </div>
    </div>
    <div class="form-group row">
        <div class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Billing Cycle End Date</h6></label>
              <input type='date' class="form-control" name="billing_enddate" />                    
        </div>
        <div class="col-xs-4">
          <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Currency</h6></label>
            <select class="selectpicker" data-show-subtext="true" name="currency" data-live-search="true" id="type">
              <option></option>
              <option value="AUD">AUD </option>
              <option value="CAD">CAD</option>
              <option value="CHF">CHF</option>
              <option value="EUR">EUR</option>
              <option value="INR">INR</option>
              <option value="GBP">GBP</option>
              <option value="JPY">JPY</option>
              <option value="US$">US$</option>
            </select>
        </div>
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Tax 1</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="tax1" data-live-search="true" id="type">
            <option></option>
            <option value="GST">GST</option>
            <option value="Hotel_tax">Hotel Tax</option>
            <option value="PST">PST</option>
            <option value="Sales_tax">State Sales Tax</option>
            <option value="VAT">VAT</option>
         </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Timesheet Billing List By</h6></label>
        <select class="selectpicker" data-show-subtext="true" name="group_timesheet" data-live-search="true" id="type">
          <option></option>
          <option value="Task">Task </option>
          <option value="Time Entry">Time Entry</option>
          <option value="Parent Task">Parent Task</option>
        </select>
      </div>
      <div class="col-xs-4">
      <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Expense Billing List By</h6></label>
      <select class="selectpicker" data-show-subtext="true" name="group_expense" data-live-search="true" id="type">
        <option></option>
        <option value="Expense Name">Expense Name </option>
        <option value="Expense Entry">Expense Entry</option>
      </select>
      </div>
      <div class="col-xs-4">
        <label style="color: black;margin-top: 5px;" for="ex2"><h6>Discount Calculation By</h6></label>
          <select class="selectpicker" data-show-subtext="true" name="discount_calculation" data-live-search="true" id="type">
            <option></option>
            <option value="Percentage">Percentage </option>
            <option value="Fixed Amount">Fixed Amount</option>
          </select>
      </div>
    </div>
        <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Populate Un-Billed Records</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
     </div>
     </div>
     </div>
     </div>
   </form>
    </div>
</div>
          <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Invoice No</th>
        <th>PO Number</th>
        <th>Client Name</th>
        <th>Project Name</th>
        <th>Invoice Date</th>
        <th>Action</th>
      </tr>
    </thead>
            <?php
$sql = "SELECT * FROM invoice";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
      <td><?php echo $row['invoiceno']; ?></td>
       <td><?php echo $row['ponumber']; ?></td>
        <td><?php echo $row['clientname']; ?></td>
         <td><?php echo $row['projectname']; ?></td>
          <td><?php echo $row['invoicedate']; ?></td>
          <td><a href='invoiceform.php?userid=<?php echo $row['projectname'];?>'><button type="submit" class="btn btn-info">Billing</button></a></td>
      </tr>
    </tbody>
       <?php } } ?>
   
  </table>
</div>
  </div>  
</div>

</body>
</html>
