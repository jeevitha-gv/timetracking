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
  <title>PROJECTS</title>
</head>
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
  border: 1px solid black;
  width: 1468px;
  margin-left: -1214px;
  
  opacity: 0.1;
}

</style>
<body>
<?php
if($_POST)
{
  task();
}
?>
<form action="" method="post">
  <div class="container" style="width:1500px;margin-left:-15px;">
  <h4 style="color: gray;">Dashboard : Projects</h4>
  <div class="panel panel-default" style="width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5 style="margin-top: 3px;"><strong>MY TASK LIST</strong></h5>
      <div style="margin-top: -40px;margin-left: 1200px;">


<button style="background-color: lightgray;" type="button" class="btn btn-default btn-sm">
          <span  data-toggle="modal" data-target="#Modal" class="glyphicon glyphicon-search">Search</span>
        </button>

          <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="width:90%">
  <div class="modal-dialog modal-lg" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Search Parameter</h4>
      </div>
      <div class="modal-body">
    
    <div class="container">
  
  <div class="tab-content">
    
      <div class="form-group row">
      
      <div class="col-xs-5">
        <label for="ex1" style="color: black;"><h6>Project Name</h6></label>
<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type">
   
      <option value=""></option>
            
        </select>      </div>
          <div class="col-xs-5">
        <label for="ex2" style="color: black;"><h6>Task Type</h6></label><br />
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-sm-3">
        <label for="ex1" style="color: black;"><h6>Completed Status</h6></label>
        <br>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
      <option value="1">Completed Projects</option>
      <option value="2">Incomplete Projects</option>
        </select>
      </div>
      <div class="col-sm-3">
        <label for="ex1" style="color: black;"><h6>Milestone</h6></label>
        <br>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
  </select>
</div>

      <div class="col-sm-3">
        <label for="ex2" style="color: black;"><h6>Project Status</h6></label>
        <br>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">All</option>
      <option value="1">Started</option>
      <option value="2">OnHold</option>
      <option value="3">Progress</option>
      <option value="4">Cancelled</option>
      <option value="5">Completed</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
  <div class="form-group col-sm-3">
      <label style="color: black;" for="comment">Description</label>
      <textarea class="form-control" rows="5" id="comment" style="width: 360%;"></textarea>
    </div>
</div>
<div class="form-group row">
	<div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Include Date Range</h6></label>
        <br>
        <label style="margin-top: -10px;" class="switch">
        <input type="checkbox" check>
        <span class="slider"></span>
        </label>
     </div>
     <div style="margin-left: -100px;" class='col-sm-2'>
          <label for="ex2" style="color: black;"><h6>Start Date</h6></label>
            <div class='input-group date' id='datetimepicker'>
                    <input type='date' class="form-control">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
          <div style="margin-left: 35px;" class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6>Due Date</h6></label>
            <div class='input-group date' id='duedate'>
                    <input type='text' class="form-control">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>

</div>

</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
        <button type="button" class="btn btn-success">Show</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
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
      <span class="required" style="color: red;"></span> <label for="usr" style="color: gray;">Task Name:</label>
      <input type="text" class="form-control" name="taskname">
    </div>
    <div class="form-group">
      <span style="width: 900px;"  class="required" style="color: red;"> <label  for="usr" style="color: gray;">Project Name:</label></span>
      <br>
        
      <select  class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="projectname">
        <option></option>
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
} ?>
    </select>

   
    
    </div>
    <div class="container">
  <ul style="width: 57%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#team">Team</a></li>
    <li><a data-toggle="tab" href="#dates">Dates</a></li>
    <li><a data-toggle="tab" href="#billing">Billing</a></li>
    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
    <li><a data-toggle="tab" href="#others">Others</a></li>
    <li><a data-toggle="tab" href="#attachment">Attachment</a></li>
</ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Task Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="tasktype">
      <option value="Task">Task</option>
      <option value="Bug">Bug</option>
      <option value="Issue">Issue</option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Task Code</h6></label>
        <input class="form-control" id="ex2" type="text" name="taskcode">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Priority</h6></label><br>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="priority">
      <option value="Urgent">Urgent</option>
      <option value="High">High</option>
      <option value="Medium">Medium</option>
      <option value="Low">Low</option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Task Status</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="taskstatus">
      <option value="Started">Started</option>
      <option value="OnHold">OnHold</option>
      <option value="In Progress">In Progress</option>
      <option value="Completed">Completed</option>
        </select>
      </div>
    </div>
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>All Project Developers Task</h6></label><br>
        <label style="margin-top: -10px;" class="switch">
  <input type="checkbox" check name="developerstask">
  <span class="slider"></span>
</label>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>All Project Task</h6></label>
        <br>
        <label style="margin-top: -10px;" class="switch">
        <input type="checkbox" check name="allprojecttask">
        <span class="slider"></span>
        </label>
     </div>
    </div>
</div>


<div id="team" class="tab-pane fade">
  <div style="margin-top: 10px;" class="container" class="col-xs-3">
        <label for="ex2" style="color: black;"><h6><b>Total Members :</b></h6></label>
        <div style="margin-left: 500px;margin-top: -35px;" class="checkbox">
      <label style="color: black;">
      <input type="checkbox" value="">Select All</label>
    </div>
      <div class="col-xs-5">
      
      <select  class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="totalmembers">
        <option></option>
                <?php

    

    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>
     
      <option  value="<?php echo $row['firstname']; ?>"><?php echo $row['firstname']; ?></option>
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
<div id="dates" class="tab-pane fade">

  <div class="container">
      <div class="form-group row">
        <div class='col-sm-2'>
          <label for="ex2" style="color: black;"><h6>Start Date</h6></label>
           
                    <input type='date' class="form-control" name="startdate">
                  
                       
               
          </div>
          <div style="margin-left: 150px;" class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6>Due Date</h6></label>
            
                    <input type='date' class="form-control" name="duedate">
                   
              
          </div>
        </div>
   </div>
  
</div>

<div id="billing" class="tab-pane fade">
  <div class="form-group row">
      <div class="col-xs-3">
       <label for="ex2" style="color: black;"><h6>Work Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="worktype">
      <option value="Standaerd">Standaerd</option>
       <option value="Overtime">Overtime</option>
        <option value="Travel">Travel</option>
      </select>
      </div>
      <div class="col-xs-3">
        
<label for="ex2" style="color: black;"><h6>Billable</h6></label>
<br>
  <label style="margin-top: 0px;" class="switch">
  <input type="checkbox" check name="billable">
  <span class="slider"></span>
</label>
      </div>
  </div>
  
  <div class="form-group row">
      <div class="col-sm-3">
        <label for="ex2" style="color: black;"><h6>Billing start Date</h6></label>
           
                    <input type='date' class="form-control" name="billingdate">
                    
               
            </div>
      <div class="col-sm-3">
        <label for="ex2" style="color: black;"><h6>Billing end Date</h6></label>
            <input type='date' class="form-control" name="billingenddate">
        
      </div>
  </div>

  <div class="form-group row">
      <div class="col-sm-3">
        <label style="color: black;margin-top: 5px;" for="ex2"><h6>Developers Rate Currency</h6></label>
     <select class="selectpicker" data-show-subtext="true" name="developerscurrency">
           <option value="AUD">AUD</option>
      <option value="CAD">CAD</option>
      <option value="CHF">CHF</option>
      <option value="EUR">EUR</option>
      <option value="GBP">GBP</option>
      <option value="INR">INR</option>
      <option value="JPY">JPY</option>
      <option value="US$">US$</option>
    
    </select>
      </div>
      <div class="col-sm-3">
        
        <label for="ex1" style="color: black;"><h6>Developers Rate</h6></label>
        <input class="form-control" id="ex1" type="text" name="developersrate">

      </div>
  </div>
  <div class="form-group row">
      <div class="col-sm-3">
        
        <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billing Rate Currency</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="fixedbidbillingmode" name="billingratecurrency">
       <option value="AUD">AUD</option>
      <option value="CAD">CAD</option>
      <option value="CHF">CHF</option>
      <option value="EUR">EUR</option>
      <option value="GBP">GBP</option>
      <option value="INR">INR</option>
      <option value="JPY">JPY</option>
      <option value="US$">US$</option>
    
    </select>

      </div>
      <div class="col-sm-3">
         <label for="ex1" style="color: black;"><h6>Billing Rate</h6></label>
        <input class="form-control" id="ex1" type="text" name="billingrate">
      </div>
  </div>

</div>

<div id="advanced" class="tab-pane fade">
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Parent Task</h6></label>
         <input class="form-control" id="ex1" type="text" name="parenttask">
         
      </div>
     <!--  <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Milestone</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="fixedbidbillingmode">
       <option value=""></option>
     </select>
      </div> -->
  </div>

  <div class="form-group row">
    <div class="col-xs-3">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Estimated Cost Currency</h6></label>
      <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="fixedbidbillingmode" name="estimatedcurrency">
       <option value="AUD">AUD</option>
      <option value="CAD">CAD</option>
      <option value="CHF">CHF</option>
      <option value="EUR">EUR</option>
      <option value="GBP">GBP</option>
      <option value="INR">INR</option>
      <option value="JPY">JPY</option>
      <option value="US$">US$</option>
    
    </select>
    </div>

    <div class="col-xs-3">
     <label for="ex1" style="color: black;"><h6>Estimated Cost</h6></label>
        <input class="form-control" id="ex1" type="text" name="estimatedcost">
    </div>
</div>

<div class="form-group row">
<div class="col-sm-3">
         <label for="ex1" style="color: black;"><h6>Estimated Time(Hours)</h6></label>
        <input class="form-control" id="ex1" type="text" name="estimatedtime">
      </div>
      <div class="col-sm-3">
         <label for="ex1" style="color: black;"><h6>Duration Hours</h6></label>
        <input class="form-control" id="ex1" type="text" name="durationhour">
      </div>

</div>
<!-- <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Is Parent</h6></label>
        <br>
        <label style="margin-top: -10px;" class="switch">
        <input type="checkbox" check >
        <span class="slider"></span>
        </label>
     </div> -->
</div>

<div id="others" class="tab-pane fade">
 

<div class="form-group row">
  <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="3" id="comment" style="width: 650px;" name="comment"></textarea>
    </div>
</div>
<div class="form-group row">
	<div class="col-sm-3">
         <label for="ex1" style="color: black;"><h6>Completed(%)</h6></label>
         <input class="form-control" id="ex1" type="text" name="completed">
    </div>
    <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Completed</h6></label>
        <br>
        <label style="margin-top: -10px;" class="switch">
        <input type="checkbox" check>
        <span class="slider"></span>
        </label>
    </div>
</div>
<div class="form-group row">
	<div class="col-sm-3">
<label for="ex2" style="color: black;"><h6>Disabled</h6></label>
        <br>
        <label style="margin-top: -10px;" class="switch">
        <input type="checkbox" check>
        <span class="slider"></span>
        </label>
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
        <button type="submit"  name="submit" class="btn btn-success">Add Task</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="trash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 80%;" class="modal-content">
      
      <div class="modal-body">
    <h5 style="color: black;">Are you sure you want to delete this entry?</h5>
    
      <div class="modal-footer" style="margin-top: 25px;">
        <button style="color: black;" type="button" data-dismiss="modal" class="btn">Cancel</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>
</div>


<a href="#" class="btn btn-success">
  <span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Task 
        </span></a>
<hr class="hr">

<p style="margin-left: -1150px;color: black;">Show</p>
  <select style="width: 85px;margin-left: -1105px;margin-top: -40px;" class="form-control" id="sel1">
        <option value="1">10</option>
        <option value="2">20</option>
        <option value="3">30</option>
        <option value="4">40</option>
        <option value="5">50</option>
      </select>
      <p style="margin-left: -1018px;margin-top: -30px;color: black;">entries</p>
      <div class="form-group">
        <div style="margin-top: -29px;">
        </div>
        
      </div>
         <div style="margin-top: 60px;margin-left: -1180px;color: #363636;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>
           <label style="margin-bottom: 20px;margin-right: -20px;" class="checkbox-inline">
      <input type="checkbox" value="">
    </label>
         </th>
        
        <th>Code</th>
        <th>Name</th>
        <th>Task Status</th>
        <th>Priority</th>
        <th>Team</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <?php

    $sql = "SELECT * from task ORDER BY id DESC";
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
        <td><?php echo $row['taskcode']; ?></td>
        <td><?php echo $row['taskname']; ?></td>
      
        <td><?php echo $row['taskstatus']; ?></td>
        <td><?php echo $row['priority']; ?></td>
        <td><?php echo $row['totalmembers']; ?></td>
        <td style="width: 130px;">
          <i data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Edit Client" data-toggle="modal" data-target="#Modal" style="color: #00436f;margin-left: 15px;" class="fa fa-edit fa-2x"></i>
          <!-- <i data-toggle="modal" data-target="#trash" data-toggle="tooltip" data-placement="bottom" title="Delete" data-toggle="trash" data-target="#trash" style="color: red;margin-left: 15px;" class="fa fa-trash fa-2x"></i> -->
          <a href="mytasks.php?id=<?php echo $row['id']; ?>" title="delete"><span class="glyphicon glyphicon-trash"></a>
        </td>
        
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
</div>
</form>

</body>
</html>
<?php
$id=$_GET['id'];
$sql = "DELETE FROM task WHERE id=".$id;
if(mysqli_query($con,$sql))
{
  header("Location:mytasks.php");
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
            $(function () {
                $('#start').datepicker();
            });
            $(function () {
                $('#end').datepicker();
            });
 </script>

 <script type="text/javascript">
  $('.file_upload').file_upload();
 </script>