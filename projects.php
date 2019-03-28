<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>
</head>
<style>
.hr
{
  border: 1px solid black;
  width: 1480px;
  margin-left: -1050px;
  
  opacity: 0.1;
}

</style>
<body>
<?php
if(isset($_POST['submit']))
{
  project();
}
elseif(isset($_POST['add'])) {
  projectteam();
}
?>

<form action="" method="POST">
  <div class="container-fluid">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : Projects</h4>
  <div class="panel panel-default">
    <div class="panel-body" style="color:#4C8EBA;"><h5 style="margin-top: 3px;"><strong>PROJECTS</strong></h5>
      <div style="margin-top: -40px;margin-left: 1039px;">


        <!-- <button style="background-color: lightgray;" type="button" class="btn btn-default btn-sm">
          <span  data-toggle="modal" data-target="#Modal" class="glyphicon glyphicon-search"></span> Search
        </button>
 -->
          <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Search Parameter</h4>
      </div>
      <div class="modal-body">
    
    <div class="container">
  
  <div class="tab-content">
    
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Project Code</h6></label>
        <input class="form-control" id="ex2" type="text" name="projectcode">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Client Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Completed Status</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="All">All</option>
      <option>Completed Projects</option>
      <option>Incomplete Projects</option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Status</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
      <option>Started</option>
      <option>OnHold</option>
      <option>Progress</option>
      <option>Cancelled</option>
      <option>Completed</option>
        </select>
      </div>
  </div>
</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
        <button type="button" class="btn btn-success">Show</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
           
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Project</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
      <span class="required" style="color: red;">*</span> <label for="usr" style="color: gray;">Project Name</label>
      <!-- <input type="hidden" name="c_id" class="form-control" value="<?php echo $row['c_id'];?>"> -->
      <input type="text" class="form-control" id="usr" name="projectname" required>
    </div>
    <div class="container">
  <ul style="width: 57%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>

    <li><a data-toggle="tab" href="#approval">Approval</a></li>
<!--     <li><a data-toggle="tab" href="#billing">Billing</a></li> -->
    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
    <li><a data-toggle="tab" href="#legal">Legal</a></li>
    <li><a data-toggle="tab" href="#team">Team</a></li>

<!--     <li><a data-toggle="tab" href="#attachment">Attachment</a></li> -->
</ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
      <div class="form-group row">
    
      <div class="col-xs-3">

        <label for="ex1" style="color: black;"><h6>Client Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="name" name="clientname" required>
          <option></option>
          <?php
$sql = "SELECT * from client";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
    {  ?> 
    <option value="<?php echo $row['clientname']; ?>"><?php echo $row['clientname']; ?></option>
<?php } } else { echo "0 results"; } ?>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Code</h6></label>
        <input class="form-control" id="ex2" type="text" name="projectcode">
      </div>
  </div>
  <div class="form-group row">
   <div class="col-xs-3">
        <label style="color: black;"><h6>Client Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="clientmanager" required>
          <option></option>
             <?php
    $sql = "SELECT clientname from client";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>      
      <option value="<?php echo $row1['clientname']?>"><?php echo $row1['clientname']; ?></option>
            <?php } } else { echo "0 results"; } ?>
        </select>
      </div>  
      <div class="col-xs-3">
        <label style="color: black;"><h6>Project Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projectmanager" required>
          <option></option>
                     <?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>
      <option value="<?php echo $row1['firstname']; ?>"><?php echo $row1['firstname']; ?></option>
                   <?php } } else { echo "0 results"; } ?>
        </select>
                    </div>
   </div>
   <div class="form-group row">
        <div class='col-xs-3'>
          <label for="ex2" style="color: black;"><h6>Start Date</h6></label>
                    <input type='date' class="form-control"  name="startdate">
          </div>
          <div class='col-xs-3'>
            <label for="ex2" style="color: black;"><h6>End Date</h6></label>
                    <input type='date' class="form-control" name="enddate">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-3">
            <label style="color: black;"><h6>Client Team</h6></label>
            <textarea type="text" class="form-control" style="width:200%;" placeholder="Enter client1,client2,client3....." name="clientteam"></textarea>
          </div>
        </div>

</div>

<div id="approval" class="tab-pane fade">

  <div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Timesheet Approval Type</h6>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="timesheet_approval" required>
      <option value="Approval Not Required">Approval Not Required</option>
       <option value="Client Manager">Client Manager</option>
        <option value="Project Manager">Project Manager</option>
        <option value="Employee Manager">Employee Manager</option>
      </select>
    </div>

    <div class="col-xs-4">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Expense Approval Type</h6></label><br />
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="expense_approval" required>
      <option value="Approval Not Required">Approval Not Required</option>
        <option value="Client Manager">Client Manager</option>
        <option value="Project Manager">Project Manager</option>
        <option value="Employee Manager">Employee Manager</option>
      </select>
    </div>
</div>
  
</div>
<!-- 
<div id="billing" class="tab-pane fade">
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Default Billing Rate</h6></label>
        <input class="form-control" id="ex1" type="text" name="billing_rate">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Billing Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billing_type">
      <option value=""></option>
      <option value="Use Employee Own Billing Rate">Use Employee Own Billing Rate</option>
        <option value="Use Project Roles Billing Rate">Use Project Roles Billing Rate</option>
        <option value="Use Project Employees Billing Rate">Use Project Employees Billing Rate</option>
        <option value="Use Project Task Billing Rate">Use Project Task Billing Rate</option>
      </select>
      </div>
  </div>
  

</div> -->

<div id="advanced" class="tab-pane fade">
  <div class="form-group">
      <label style="color: gray;margin-top: 20px;" for="comment">Project Description</label>
      <textarea style="width: 630px;" class="form-control" rows="3" id="comment" name="project_description" required></textarea>
    </div>
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Duration (Hours) </h6></label>
        <input class="form-control" id="ex1" type="text" name="duration" required>
      </div>
       <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Status</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="project_status" required>
      <option value=""></option>
      <option value="Onhold">Onhold</option>
        <option value="In progress">In Progress</option>
        <option value="cancelled">Cancelled</option>
        <option value="completed">Completed</option>
      </select>
    </div>
      </div>

  <div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Type</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projecttype" required>
      <option value=""></option>
      <option value="Marketing">Marketing</option>
        <option value="Technology">Technology</option>
        <option value="Training">Training</option>
      </select>
    </div>
    <div class="col-xs-3">
      <label style="color: black;margin-top: 5px;"><h6>Purchase Order</h6></label>
      <input type="text" class="form-control" name="purchase_order" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;"><h6>Account Info</h6></label>
     <input type="text" class="form-control" name="account_info" required>
    </div>
    <div class="col-xs-3">
        <label style="color: black;"><h6>Billing Rate Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billingratetype" required>
          <option value=""></option>
          <option value="Fixed Bid">Fixed Bid</option>
          <option value="Time Only">Time Only</option>
          <option value="Time & Expense">Time & Expense</option>
        </select>
    </div>
</div>
</div>

<div id="legal" class="tab-pane fade">
<div class="form-group row">
  <div class="col-xs-3">
  <label style="color: black;"><h6>NDA</h6></label><br>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="nda" required>
        <option value=""></option>
      <option value="Not Started">Not Started</option>
      <option value="In Progress">In Progress</option>
      <option value="Fully Executed">Fully Executed</option>
      </select>
    </div>
     <div class="file-upload-wrapper col-xs-3">
      <label style="color: black;"><h6>Attachment</h6></label>
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment" required>
</div>
</div>

<div class="form-group row">
  <div class="col-xs-3">
  <label style="color: black;"><h6>MSA</h6></label><br>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="msa" required>
        <option value=""></option>
      <option value="Not Started">Not Started</option>
      <option value="In Progress">In Progress</option>
      <option value="Fully Executed">Fully Executed</option>
      </select>
    </div>
    <div class="file-upload-wrapper col-xs-3">
      <label style="color: black;"><h6>Attachment</h6></label>
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment" required> 
</div>
</div>
<div class="form-group row">
  <div class="col-xs-3">
  <label style="color: black;"><h6>SOW</h6></label><br>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="sow" required>
        <option value=""></option>
      <option value="Not Started">Not Started</option>
      <option value="In Progress">In Progress</option>
      <option value="Fully Executed">Fully Executed</option>
      </select>
    </div>
    <div class="file-upload-wrapper col-xs-3">
      <label style="color: black;"><h6>Attachment</h6></label>
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment" required>
</div>
</div>

</div>
<div id="team" class="tab-pane fade">
<div class="form-group row">
  <div class="col-xs-3">
  <label style="color: black;"><h6>Team Members</h6></label><br>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="teammembers" required>
          <option></option>
                     <?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>
      <option value="<?php echo $row1['firstname']; ?>"><?php echo $row1['firstname']; ?></option>
                   <?php } } else { echo "0 results"; } ?>
        </select>
    </div>
     <div class="col-xs-3">
      <label style="color: black;"><h6>User Role</h6></label>
       <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="userrole" required>
          <option></option>
          <option value="employees">Employees</option>
          <option value="clientmanager">Client Manager</option>
          <option value="projectmanager">Project Manager</option>
          <option value="superadmin">Super Admin</option>
        </select>
  
</div>

</div>

<div class="form-group row">
    <div class="col-xs-3">
      <label style="color: black;"><h6>Billing Rate</h6></label>
  <input type="text" class="form-control" name="billingrate" required>
</div>
<div class="col-xs-3">
  <label style="color: black;"><h6>Billing Currency</h6></label><br>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billingcurrency" required>
        <option value=""></option>
      <option value="AUD">AUD</option>
      <option value="CAD">CAD</option>
      <option value="CHF">CHF</option>
      <option value="EUR">EUR</option>
      <option value="INR">INR</option>
      <option valUE="GBP">GBP</option>
      <option value="JPY">JPY</option>
  <option value="US$">US$</option>
      </select>
    </div>
</div>
</div>
</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
        <button type="submit" name="submit" class="btn btn-success">Add Project</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>


<a href="#" class="btn btn-success" style="margin-left: 110px;">
  <span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus" style="">Add-Project 
        </span></a>
<hr class="hr">
        </div>
         <div class="container-fluid" style="color: #363636;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Client Name</th>
        <th>Project Status</th>
        <th>Project Manager</th>
        <th>Client Manager</th>
      </tr>
    </thead>
<?php
$sql = "SELECT p_id,projectname , clientname , project_status , clientmanager , projectmanager , projecttype , startdate , enddate FROM `project` order by p_id desc";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{ ?>
    <tbody>
      <tr>
        <td><?php echo $row['p_id'];?></td>
        <td><?php echo $row['projectname'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['project_status'];?></td>
        <td><?php echo $row['projectmanager'];?></td>
        <td><?php echo $row['clientmanager'];?></td>
    </tr>  
<?php } } else { echo "0 results"; } ?>
    </tbody>
  </table>
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
            $(function () {
                $('#duedate').datepicker();
            });
 </script>

 <script type="text/javascript">
  $('.file_upload').file_upload();
</script>

<?php
 if($_POST['delete']){
     $id=$_POST['p_id'];
     $sql = "DELETE FROM project WHERE p_id=".$id;   
    if (mysqli_query($con, $sql)) {
       header("Location: projects.php");
    } else {
       // echo "Error deleting record: " . mysqli_error($con);
    } 
  }
?>