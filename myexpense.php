<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<html>
<head>
  <title>My Expense</title>
</head>
<style>

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
  border: 1px solid black;
  width: 1468px;
  margin-left: -1055px;
  
  opacity: 0.1;
}

</style>
<body>
  

  <div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : MyExpense</h4>
  <div class="panel panel-default" style="width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5 style="margin-top: 3px;"><strong>EXPENSE SHEET LIST</strong></h5>
      <div style="margin-top: -40px;margin-left: 1039px;">
<?php
if (isset($_POST['submit'])) {
    expense();
}?>
<form method="POST" action="">
  <button style="margin-left: 10px;" type="button" class="btn btn-success">
          <span data-toggle="modal" data-target="#entry" class="glyphicon glyphicon-plus">Add Expense Entry
        </span></button>

<div class="modal fade" id="entry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Expense</h4>
      </div>
      <div class="modal-body">
        
    <div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Basic">Basic</a></li>
    <li><a data-toggle="tab" href="#Description">Description</a></li>
    <li><a data-toggle="tab" href="#Attachment">Attachment</a></li>
  </ul>
  <div class="tab-content">
    <div id="Basic" class="tab-pane fade in active">
      <div class="form-group" style="width: 556px;">
      <span class="required" style="color: red;"> <label  for="usr" style="color: gray;">Client Name:</label></span>
      <br>
      <select  class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type" name="clientname" required>
                           <?php
    $sql = "SELECT * from client";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
 ?>
      <option  value="<?php echo $row['clientname']; ?>"><?php echo $row['clientname']; ?></option>
<?php } } ?>
    </select>

        <?php
$var=$_GET['task_id'];
    $sql = "SELECT * from timesheet WHERE task_id=".$var;
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="hidden" name="task_id" value="<?php echo $row['task_id'];?>">
    <?php } } ?>

    <span class="required" style="color: red;"> <label  for="usr" style="color: gray;">Project Name:</label></span>
      <br>
     <?php
$var=$_GET['task_id'];
    $sql = "SELECT * from timesheet WHERE task_id=".$var;
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="text" class="form-control" name="projectname" value="<?php echo $row['project_name'];?>">
    <?php } } ?>

    <span class="required" style="color: red;"> <label  for="usr" style="color: gray;">Employee</label></span>
      <br>
    <?php
    $var=$_GET['task_id'];
    $sql = "SELECT * from timesheet WHERE task_id=".$var;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_array($result))
    {  ?>     
    <input type="text" class="form-control" name="employeename" value="<?php echo $row['employee'];?>">
    <?php } } ?>
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
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type" name="paymentmethod" required>
      <option value="American Express">American Express</option>
      <option value="Cash">Cash</option>
      <option value="Master Card">Master Card</option>
      <option value="Visa">Visa</option>
        </select>
      </div>
      <div class="col-xs-2">
         <label><h5>Currency</h5></label>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" data-size="5" name="currency" required>
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
                    <input type='date' class="form-control" name="expenseentrydate" required>

      </div>
      <div class="col-xs-2">
        <label for="ex1" style="color: black;"><h6>Billable</h6></label><br>
        <label class="switch">
  <input type="checkbox" name="billable" required>
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
         <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="taxzone" required>
          <option value="default">Default</option>
         </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Tax</h6></label>
        <input class="form-control" id="ex1" type="text" name="tax" required>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Amount</h6></label>
        <input class="form-control" id="ex1" type="text" name="amount" required>
    </div>
  </div>

</div>


<div id="Description" class="tab-pane fade">
     
<div style="margin-top: 5px;" class="form-group">
      <label style="color: gray;" for="comment">Description</label>
      <textarea style="width: 550px;" class="form-control" rows="5" name="description" required></textarea>
    </div>

</div>
<div id="Attachment" class="tab-pane fade">
  <div style="margin-top: 30px;" class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment" required>
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
</form>

<hr class="hr">
         <div style="margin-top: 60px;margin-left: -1040px;color: #363636;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Client Name</th>
        <th>Project Name</th>
        <th>Expense Name</th>
        <th>Description</th>
        <th>Amount</th>
         <?php if($_SESSION['user_role'] == "admin")
        {
          ?>
        <th>Action</th>
      <?php } ?>
      </tr>
    </thead>
      <?php
      $var = $_SESSION['fname'];
    $sql = "SELECT * from expense WHERE employeename = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result))
{ ?>    
    <tbody>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['projectname']; ?></td>
        <td><?php echo $row['expensename'];?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['amount']; ?></td> <?php if($_SESSION['user_role'] == "admin")
        {
          ?>
          <td>
            <a href="approval.php?task_id=<?php echo $row['task_id']; ?>" class="btn btn-info">Manage Approval</a>
          </td>
        <?php } ?>
      </tr>
    </tbody>
        <?php } } ?>
        <?php
        if($_SESSION['user_role'] == "admin")
        {
        ?>
        <?php
    $sql = "SELECT * from expense";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result))
{ ?>    
         <tbody>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['projectname']; ?></td>
        <td><?php echo $row['expensename'];?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['amount']; ?></td>
          <td>
            <a href="approval.php?task_id=<?php echo $row['task_id']; ?>" class="btn btn-info">Manage Approval</a>
          </td>
      </tr>
    </tbody>
    <?php } } ?>
  <?php } ?>
  </table>
</div>

    </div>
</div>
</div>
</div>


</body>
</html>