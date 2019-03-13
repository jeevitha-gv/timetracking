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
  <style>
  body {
  background-color: #ECF0F2;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.hr
{
  border: 0.5px solid black;
  width: 1465px;
  margin-left: 0px;
  opacity: 0.1;
}

</style>
</head>
<body>
  <?php 
  if($_POST)
  {
    expense();
  }
  ?>
  <form action="" method="post">
<div class="panel-default"> 
    <h4><a href="dashboard.php">Dashboard:</a> <a href="myexpense.php"> My Expense Sheets: </a>My Expense Entries</h4>
<div class="container-fluid">
  <div class="panel panel-default" style="height:220px;width:100%;">
    <form method="get" action="timesheet_period.php">
    <div style="margin-top: 10px;margin-left: 10px;" class="container">

</div>
</form>
<div class="modal fade" id="entry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Update Client</h4>
      </div>
      <div class="modal-body">
        
    <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#Basic">Basic</a></li>
    <li><a data-toggle="tab" href="#Description">Description</a></li>
    <li><a data-toggle="tab" href="#Attachment">Attachment</a></li>
  </ul>
  <div class="tab-content">
    <div id="Basic" class="tab-pane fade in active">
      <div class="form-group" style="width: 556px;">
      <span class="required" style="color: red;"> <label  for="usr" style="color: gray;">Project Name:</label></span>
      <br>
      <select  class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type" name="projectname">
                           <?php
    $sql = "SELECT * from project";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
 ?>
      <option  value="<?php echo $row['projectname']; ?>"><?php echo $row['projectname']; ?></option>
             <?php

}
  }else {
    echo "0 results";
}

?>
    </select>
    </div>
      <div class="form-group row">
      <div class="col-xs-2">
         <label><h5>Expense Name</h5></label>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" data-size="5" name="expensename" multiple>
      <option value="Air Travel">Air Travel</option>
      <option value="Auto Rental">Auto Rental</option>
      <option value="Car Mileage">Car Mileage</option>
      <option value="Entertainment">Entertainment</option>
      <option value="Food">Food</option>
      <option value="Gas">Gas</option>
      <option value="Hotel">Hotel</option>
      <option value="Others">Others</option>
      <option value="Parking">Parking</option>
      <option value="Supplies">Supplies</option>
      <option value="Taxi">Taxi</option>
      <option value="Telephone">Telephone</option>
      <option value="Tolls">Tolls</option>
        </select>
      </div>
      <div class="col-xs-2">
         <label><h5>Patment Method</h5></label>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type" name="paymentmethod">
      <option value="American Express">American Express</option>
      <option value="Cash">Cash</option>
      <option value="Master Card">Master Card</option>
      <option value="Visa">Visa</option>
        </select>
      </div>
      <div class="col-xs-2">
         <label><h5>Currency</h5></label>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" data-size="5" name="currency" multiple>
          <option value="INR">INR</option>
      <option value="AUD">AUD</option>
      <option value="CAD">CAD</option>
      <option value="CHF">CHF</option>
      <option value="EUR">EUR</option>
      <option value="GBP">GBP</option>
      <option value="JPY">JPY</option>
      <option value="US$">US$</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-2">
       <label for="ex1" style="color: black;"><h6>Expense Entry Date</h6></label> 
                    <input type='date' class="form-control" name="expenseentrydate" >

      </div>
      <div class="col-xs-2">
        <label for="ex1" style="color: black;"><h6>Billable</h6></label><br>
        <label class="switch">
  <input type="checkbox" name="billable">
  <span class="slider"></span>
</label>
</div>
<div class="col-xs-2">
        <label for="ex1" style="color: black;"><h6>Reimburse</h6></label><br>
        <label class="switch">
  <input type="checkbox" name="reimburse">
  <span class="slider"></span>
</label>
</div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Net Amount</h6></label>
        <input class="form-control" id="ex1" type="text" name="netamount">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Tax Zone</h6></label>
         <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="taxzone">
          <option value="default">Default</option>
         </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Tax</h6></label>
        <input class="form-control" id="ex1" type="text" name="tax">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Amount</h6></label>
        <input class="form-control" id="ex1" type="text" name="amount">
    </div>
  </div>

</div>


<div id="Description" class="tab-pane fade">
     
<div style="margin-top: 5px;" class="form-group">
      <label style="color: gray;" for="comment">Description</label>
      <textarea style="width: 550px;" class="form-control" rows="5" name="description"></textarea>
    </div>

</div>
<div id="Attachment" class="tab-pane fade">
  <div style="margin-top: 30px;" class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment">
</div>
</div>

</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
        <button type="submit" name="submit" class="btn btn-success">Add Expense Entry</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<button style="margin-left: 10px;" type="button" class="btn btn-success">
          <span data-toggle="modal" data-target="#entry" class="glyphicon glyphicon-plus">Add Expense Entry
        </span></button>
<hr class="hr">
<div class="container">
  <div class="row">
      <div style="margin-left: -130px;" class="col-sm-2">
        <i class="fa fa-user"></i><label for="ex1" style="color: black;"><h4>Employee</h4></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option></option>
      <?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>

  <option value="<?php echo $row['firstname']; ?>"><?php echo $row['firstname']; ?></option>
       <?php
}
  }else {
    echo "0 results";
}

?>
    </select>
      </div>
      <div class="col-sm-2" style="margin-left: 80px;">
       
        <!-- <div class='col-sm-2'> -->
        <i class="fa fa-calendar"></i><label for="ex1" style="color: black;"><h4>Date</h4></label>
        <div class='input-group date' id='datetime'>
                    <input placeholder="Enter date" type='text' class="form-control"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              <!-- </div> -->
            
      </div>
      <div class="col-sm-2" style="margin-left: 62px;margin-top: 5px;">
        <i class="fa fa-plus-circle"></i><label for="ex1" style="color: black;"><h4>Timesheet Total</h4></label>
                  <h3 style="margin-left: 38px;margin-top: 5px;"><b>00:00</b></h3>
      </div>
      <div class="col-sm-2" style="margin-left: 20px;margin-top: 5px;">
        <i class="fa fa-th"></i><label for="ex1" style="color: black;"><h4>Timesheet Status</h4></label>
          <button style="margin-left: 10px;" type="button" class="btn btn-warning">Not Submitted</button>

      </div>
      <div class="col-sm-2" style="margin-left: 110px;">
          <i style="margin-left: -20px;"  class="fa fa-check" aria-hidden="true"></i><label style="margin-right: 50px;margin-top: -70px;" for="ex1" style="color: black;"><h4>Reimbursement Currency</h4></label>
          <select style="margin-top: -20px;" class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
            
            <option value="1">AUD</option>
            <option value="2">CAD</option>
            <option value="3">CHF</option>
            <option value="4">EUR</option>
            <option value="5">GBP</option>
            <option value="6">JPY</option>
            <option value="7" selected="">US$</option>
            <option value="8">INR</option>
          </select>

       </div> 


  </div>
</div>
</div>
</div>
</div>


  <div>
    <div class="panel-default"> 
<div class="container-fluid" >
  <div class="panel panel-default" style="height:260px;width:100%;">
    <h5 style="color: #81AFE7;margin-left: 20px;"><strong>EXPENSE ENTRY LIST</strong></h5>
    <hr class="hr">
    <p style="margin-left: 5px;">Show</p>
    <select style="width: 85px;margin-left: 50px;margin-top: -40px;" class="form-control" id="sel1">
        <option value="1">10</option>
        <option value="2">20</option>
        <option value="3">30</option>
        <option value="4">40</option>
        <option value="5">50</option>
      </select>
<p style="margin-left: 135px;margin-top: -28px;">Entries</p>
<div style="margin-left: 1145px;margin-top: -40px;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" id="pwd" name="pwd">
      </div>
          </div>
           <div style="margin-top: 60px;color: #363636;margin-left: 15px;width: 98%">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>
           <label style="margin-bottom: 20px;margin-right: -20px;" class="checkbox-inline">
      <input type="checkbox" value="">
    </label>
         </th>
        
        <th>Date</th>
        <th>Project Name</th>
        <th>Expense Name</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Status</th>
        <!-- <th></th> -->
      </tr>
    </thead>
    <?php
    $sql = "SELECT * from project,expense Orders LIMIT 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
        <td>
           <label style="margin-bottom: 20px;margin-right: -20px;" class="checkbox-inline">
      <input type="checkbox" value="">
    </label>
        </td>
        <td><?php echo $row['expenseentrydate'];?></td>
        <td><?php echo $row['projectname'];?></td>
        <td><?php echo $row['expensename'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['amount'];?></td>
        <td><?php echo $row['project_status'];?></td>
        <!-- <td style="width: 130px;">
          <i data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Edit Client" data-toggle="modal" data-target="#Modal" style="color: #00436f;margin-left: 15px;" class="fa fa-edit fa-2x"></i>
          <i data-toggle="modal" data-target="#trash" data-toggle="tooltip" data-placement="bottom" title="Delete" data-toggle="trash" data-target="#trash" style="color: red;margin-left: 15px;" class="fa fa-trash fa-2x"></i>
        </td> -->
        
      </tr>
      
    </tbody>
           <?php
}
  }else {
    echo "0 results";
}

?>
  </table>
</div>
</div>
</div>
</div>
<div class="container-fluid">
  <div class="panel panel-default" style="width:100%;">

    <div style="margin-left: 15px;margin-top: 10px; ;width: 98%" class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea><br>
  <button type="submit" class="btn btn-success">Save</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<!-- <div class="container" style="margin-top: 45px;margin-left: 0px;">
  <button type="button" class="btn">Status Legend</button>
  <button type="button" class="btn btn-warning">Not Submitted</button>
  <button type="button" class="btn btn-primary">Submitted</button>
  <button type="button" class="btn btn-success">Approved</button>
  <button type="button" class="btn btn-danger">Rejected</button>
  
</div>
 -->

</div>
</div>
    </div>



  </div>
  </div>
</div>

</div>
</form>
</body>
</html>


<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datepicker();
            });
            
 </script>


 <script type="text/javascript">
            $(function () {
                $('#datetime').datepicker();
            });

 </script>


 <script type="text/javascript">
            $(function () {
                $('#date').datepicker();
            });
            
 </script>

 <script type="text/javascript">
  $('.file_upload').file_upload();
 </script>