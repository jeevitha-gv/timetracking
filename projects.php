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
  <title>Projects</title>
</head>
<style>
.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -1068px;
  
  opacity: 0.1;
}

</style>
<body>
<?php
if($_POST)
{
  project();
}
?>

<form action="" method="post">
  <div class="container-fluid">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : Projects</h4>
  <div class="panel panel-default" style="width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5 style="margin-top: 3px;"><strong>PROJECTS</strong></h5>
      <div style="margin-top: -40px;margin-left: 1039px;">


        <button style="background-color: lightgray;" type="button" class="btn btn-default btn-sm">
          <span  data-toggle="modal" data-target="#Modal" class="glyphicon glyphicon-search"></span> Search
        </button>

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
      <option value="">All</option>
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
      <span class="required" style="color: red;">*</span> <label for="usr" style="color: gray;">Project Name:</label>
      <input type="hidden" name="c_id" class="form-control" value="<?php echo $row['c_id'];?>">
      <input type="text" class="form-control" id="usr" name="projectname">
    </div>
    <div class="container">
  <ul style="width: 57%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#team">Team</a></li>
    <li><a data-toggle="tab" href="#approval">Approval</a></li>
    <li><a data-toggle="tab" href="#billing">Billing</a></li>
    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
    <li><a data-toggle="tab" href="#others">Others</a></li>
    <li><a data-toggle="tab" href="#attachment">Attachment</a></li>
</ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
      <div class="form-group row">
    
      <div class="col-xs-3">

        <label for="ex1" style="color: black;"><h6>Client Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="name" name="clientname">
          <option></option>
          <?php

    

    $sql = "SELECT * from client";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?> 
      <option value="<?php echo $row['clientname']; ?>"><?php echo $row['clientname']; ?></option>
          <?php
}
  }else {
    echo "0 results";
}
?>
  

        </select>
      </div>
                 
             

      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Code</h6></label>
        <input class="form-control" id="ex2" type="text" name="projectcode">
      </div>
  </div>
  <div class="form-group row">
   <div class="col-xs-3">
        <label style="color: black;"><h6>Team Lead</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="teamlead">
          <option></option>
             <?php
    $sql = "SELECT eno,firstname from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>
      
      <option value="<?php echo $row1['firstname']; ?>"><?php echo $row1['firstname']; ?></option>
            <?php
}
  }else {
    echo "0 results";
}
?>
        </select>
      </div>    <div class="col-xs-3">
        <label style="color: black;"><h6>Project Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projectmanager">
          <option></option>
                     <?php
    $sql = "SELECT eno,firstname from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>
  
      <option value="<?php echo $row1['eno']; ?>"><?php echo $row1['firstname']; ?></option>
                   <?php
}
  }else {
    echo "0 results";
}
?>
        </select>
                    </div>
 
  </div>

</div>


<div id="team" class="tab-pane fade">
  <div style="margin-top: 10px;" class="container" class="col-xs-2">
        <label for="ex2" style="color: black;"><h6><b>Total Members :</b></h6></label>
        <div style="margin-left: 500px;margin-top: -35px;" class="checkbox">
      <label style="color: black;">
      <input type="checkbox" value="">Select All</label>
    </div>

         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projectmanager">
          <option></option>
                     <?php
    $sql = "SELECT eno,firstname from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row1 = mysqli_fetch_array($result))
{
  ?>
  
      <option value="<?php echo $row1['firstname']; ?>"><?php echo $row1['firstname']; ?></option>
                   <?php
}
  }else {
    echo "0 results";
}
?>
        </select>
      
    </div>
 </div>
<div id="approval" class="tab-pane fade">

  <div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Timesheet Approval Type</h6>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="timesheet_approval">
      <option value="Approval Not Required">Approval Not Required</option>
      <!-- <option value="Team Lead-->Project Manager">Team Lead-->Project Manager</option> -->
       <option value="Team Lead">Team Lead</option>
        <option value="Project Manager">Project Manager</option>
        <option value="Employee Manager">Employee Manager</option>
      </select>
    </div>

    <div class="col-xs-4">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Expense Approval Type</h6></label><br />
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="expense_approval">
      <option value="Approval Not Required">Approval Not Required</option>
      <!-- <option value="Team Lead-->Project Manager">Team Lead-->Project Manager</option> -->
        <option value="Team Lead">Team Lead</option>
        <option value="Project Manager">Project Manager</option>
        <option value="Employee Manager">Employee Manager</option>
      </select>
    </div>
</div>
  
</div>

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
  <div class="form-group row">
      <div class="col-sm-3">
        <label for="ex1" style="color: black;"><h6>Billing Rate Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billing_ratetype">
        <option value=""></option>
      <option value="Per Hour">Per Hour</option>
      <option value="Fixrd Bid">Fixrd Bid</option>
      </select>
      </div>
      <div class="col-sm-3">
        <label for="ex2" style="color: black;"><h6>Fixed Cost</h6></label>
        <input class="form-control" id="ex2" type="text" name="fixedcost">
      </div>
  </div>

</div>

<div id="advanced" class="tab-pane fade">
  <div class="form-group">
      <label style="color: gray;margin-top: 20px;" for="comment">Project Description</label>
      <textarea style="width: 630px;" class="form-control" rows="3" id="comment" name="project_description"></textarea>
    </div>
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Duration (Hours) </h6></label>
        <input class="form-control" id="ex1" type="text" name="duration">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Estimated Cost</h6></label>
        <input class="form-control" id="ex2" type="text" name="project_estimatecost">
      </div>
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Status</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="project_status">
      <option value=""></option>
      <option value="Onhold">Onhold</option>
        <option value="In progress">In Progress</option>
        <option value="cancelled">Cancelled</option>
        <option value="completed">Completed</option>
      </select>
    </div>

    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Type</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projecttype">
      <option value=""></option>
      <option value="Marketing">Marketing</option>
        <option value="Technology">Technology</option>
        <option value="Training">Training</option>
      </select>
    </div>
</div>
</div>

<div id="others" class="tab-pane fade">
 <div class="container">
      <div class="form-group row">
        <div class='col-sm-2'>
          <label for="ex2" style="color: black;"><h6>Start Date</h6></label>
            
                    <input type='date' class="form-control"  name="startdate">
               
          </div>
          <div style="margin-left: 150px;" class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6>Due Date</h6></label>
           
                    <input type='date' class="form-control" name="enddate">
                  
          </div>
        </div>
   </div>

<div class="form-group row">
  <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Template</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="project_template">
      <option value="">Select</option>
   
      </select>
    </div>
</div>

</div>

<div id="attachment" class="tab-pane fade">

<div style="margin-top: 30px;" class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment">
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


<a href="#" class="btn btn-success">
  <span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Project 
        </span></a>
<hr class="hr">

<p style="margin-left: -1050px;color: black;">Show</p>
  <select style="width: 85px;margin-left: -1005px;margin-top: -40px;" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <p style="margin-left: -915px;margin-top: -30px;color: black;">entries</p>
      <div class="form-group">
        <div style="margin-top: -29px;">
        <label style="margin-left: 60px;color: black;" for="search">Search</label>
      </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="search" style="margin-left: 104px;width: 200px;margin-top: -30px;">
        </div>
      </div>
         <div style="margin-top: 60px;margin-left: -1050px;color: #363636;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th><input type="checkbox" name="cbox"></th>
        <th></th>
        <th>Code</th>
        <th>Project Name</th>
        <th>Client Name</th>
        <th>Status</th>
        <th>Team</th>
        <th>Action</th>
      </tr>
    </thead>
                               <?php

    $sql = "SELECT * from project";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>
    <tbody>
      <tr>
        <td><input type="checkbox" name="cbox"></td>
        <td> <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084">Active</button></td>
        <td><?php echo $row['projectcode'];?></td>
        <td><?php echo $row['projectname'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['project_status'];?></td>
        <td><?php echo $row['teamlead'];?></td>
        <td><div class="btn-group" role="group" area-label="...">
        <a href="#view<?php echo $row['p_id'];?>" data-toggle="modal"><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open" area-hidden="true"></span></button></a>
        <a href="#edit<?php echo $row['p_id'];?>" data-toggle="modal"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit" area-hidden="true"></span></button></a>
        <a href="#delete<?php echo $row['p_id'];?>" data-toggle="modal"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" area-hidden="true"></span></button></a>
      </div></td>
       
<!-- View -->

      <div id="view<?php echo $row['p_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">
             Project Code : <input type="text" value="<?php echo $row['projectcode'];?>" class="form-control" disabled>
              Project Name : <input type="text" value="<?php echo $row['projectname'];?>" class="form-control" disabled>
              Client Name : <input type="text" value="<?php echo $row['clientname'];?>" class="form-control" disabled>
              Project Status : <input type="text" value="<?php echo $row['project_status'];?>" class="form-control" disabled>
              Team Leader : <input type="text" value="<?php echo $row['teamlead'];?>" class="form-control" disabled>
              Project Manager : <input type="text" value="<?php echo $row['projectmanager'];?>" class="form-control" disabled>
              Project Type : <input type="text" value="<?php echo $row['projecttype'];?>" class="form-control" disabled>
              Start-End Date : <input type="text" value="<?php echo $row['startdate'];?>  -  <?php echo $row['enddate'];?>" class="form-control" disabled>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Edit -->
<?php
if($_POST['edit']){
  $id = $_POST['p_id'];
  $code  = $_POST['code'];
  $projectname = $_POST['projectname'];
  $clientname = $_POST['clientname'];
  $projectstatus = $_POST['projectstatus'];
  $teamlead = $_POST['teamlead'];
  $projectmanager = $_POST['projectmanager'];
  $projecttype = $_POST['projecttype'];
  $startdate = $_POST['startdate'];
  $enddate = $_POST['enddate'];

$sql = "UPDATE project SET projectcode = '$code',projectname = '$projectname',clientname='$clientname',project_status = '$projectstatus',teamlead = '$teamlead',projectmanager = '$projectmanager',projecttype = '$projecttype', startdate = '$startdate', enddate ='$enddate' WHERE p_id = ".$id;
   
   if (mysqli_query($con, $sql)) {
      header("Location: project.php");
   } else {
      // echo "Error deleting record: " . mysqli_error($con);
   }
}
?>
      <div id="edit<?php echo $row['p_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <input type="hidden" name="p_id" class="form-control" value="<?php echo $row['p_id'];?>">
                Project Code : <input type="text" name="code" class="form-control" value="<?php echo $row['projectcode'];?>" placeholder="Project Code" required>
                Project Name : <input type="text" name="projectname" class="form-control" value="<?php echo $row['projectname'];?>" placeholder="Project Name" required>
                Client Name : <input type="text" name="clientname" class="form-control" value="<?php echo $row['clientname'];?>" placeholder="Client Name" required>
                Project Status : <input type="text" name="projectstatus" class="form-control" value="<?php echo $row['project_status'];?>" placeholder="Project Status" required>
                Team Leader : <input type="text" name="teamlead" class="form-control" value="<?php echo $row['teamlead'];?>" placeholder="Team Leader" required>
                Project Manager : <input type="text" name="projectmanager" class="form-control" value="<?php echo $row['projectmanager'];?>" placeholder="Project Manager" required>
                Project Type : <input type="text" name="projecttype" class="form-control" value="<?php echo $row['projecttype'];?>" placeholder="Project Type" required>
                Start Date : <input type="text" name="startdate" class="form-control" value="<?php echo $row['startdate'];?>" placeholder="Start Date" required>
                End Date : <input type="text" name="enddate" class="form-control" value="<?php echo $row['enddate'];?>" placeholder="End Date" required>
                <input type="submit" name="edit" class="btn btn-primary" value="Edit">
              </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Delete -->

      <div id="delete<?php echo $row['p_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <input type="hidden" name="p_id" value="<?php echo $row['p_id'];?>">
               Are You Sure You Want to Delete this Project <b><?php echo $row['projectname'];?></b><br><br>
                <input type="submit" name="delete" class="btn btn-primary" value="Delete">
              </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
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

<?php
$p_id=$_POST['p_id'];
$sql = "DELETE FROM project WHERE p_id=". $p_id;
if(mysqli_query($con,$sql))
{
  header("Location:projects.php");
}
else
{
  // echo "Error deleting record:" .mysqli_error($con);
}
?>

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