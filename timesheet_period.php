<!DOCTYPE html>
<?php
require "header.php";
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
  margin-top: 10px;
  margin-left: 0px;
  opacity: 0.1;
}

</style>
</head>
<body>
<div class="panel-default" style="margin-left:-350px;"> 
<div class="container">
  <a style="color: #878787" href="">Dashboard:</a> <a style="color: #878787" href=""> My Timesheet: </a>Timesheet Period List 
  <div class="panel panel-default" style="height:250px;width:100%;margin-top: 15px;">
  	<h4 style="color: #4c8eba;margin-left: 10px;"><b>TIMESHEET PERIOD LIST</b></h4>
    <div style="margin-top: -35px;margin-left: 500px;" class="container">
    <button type="button" class="btn"><i class="fa fa-unlock">Un Submit Timesheet</i></button>
  <button type="button" class="btn btn-primary"><i class="fa fa-lock">Submit Timesheet</i></button>
  <button type="button" class="btn btn-success"><i class="fa fa-plus">Add Timesheet</i></button>
  <button type="button" class="btn btn-info"><i class="fa fa-filter">Filters</i></button>
</div>
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <label for="ex1" style="color: black;"><h6>Start Date</h6></label>
         <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
      </div>
    </div>
    
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Project</h6></label>
        <select class="selectpicker" disabled="" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">Select Project</option>
    </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Task</h6></label>
        <select class="selectpicker" disabled="" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">Select Task</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Start Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>End Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>End Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
    </div>
</div>
      </div>

      <div class="modal-footer" style="margin-top: 25px;">
        <button type="button" class="btn btn-success">Start Timer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<hr class="hr">

<div style="margin-top: 60px;color: #363636;margin-left: 15px;margin-right: 15px;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th></th>
        <th></th>
        <th>Employee Name</th>
        <th>Period</th>
        <th>Period Type</th>
        <th>Duration</th>
        <th>Hours</th>
        <th>Submitted On</th>
        <th>Approved On</th>
        <th>Rejected On</th>
        <th>Status</th>
        <th>Entered</th>
        <th>Open</th>
        <th>Attachment</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
           <label style="margin-bottom: 20px;margin-right: -10px;" class="checkbox-inline">
      <input type="checkbox" value="">
    </label>
    
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      
    </tbody>
  </table>
</div>



</div>
</div>
</div>

<div class="panel-default" style="margin-left:1150px;"> 
<div class="container">
  
  <div  class="panel panel-default" style="height:730px;margin-top: -345px;">

<div style="margin-left: 20px;">
	<h5 style="margin-top: 20px;"><b>Filter</b></h5>
	<hr width="50%">
<div class="form-group row">
  	<div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Date Range:</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true">
      <option value="1">Today</option>
        <option value="2">Yesterday</option>
        <option value="3">Last 7 days</option>
        <option value="4">Last 15 days</option>
        <option value="5">This Month</option>
        <option value="6">Last Month</option>
        <option value="7">This Year</option>
        <option value="8">Custom Range</option>
      </select>
      </div>
  </div>

<div  class="form-group row">
      <div style="margin-top: 20px;" class="col-xs-3">
        <label  for="ex2" style="color: black;"><h6>Employee Name</h6></label>
        <select  class="selectpicker" data-show-subtext="true"   data-live-search="true">
      
      </select>
      </div>
</div>

<div class="form-group row">
      <div style="margin-top: 20px;" class="col-xs-3">
        <label  for="ex2" style="color: black;"><h6>Approval Status</h6></label>
        <select  class="selectpicker" data-show-subtext="true"   data-live-search="true">
        	<option value=""></option>
      <option value="1">All Timesheet Periods</option>
      <option value="1">All Open Timesheet Periods</option>
      <option value="1">Not Submitted</option>
      <option value="1">Submitted</option>
      <option value="1">Approved</option>
      <option value="1">Rejected</option>
  
      </select>
      </div>
</div>

<div class="form-group row">
      <div style="margin-top: 20px;" class="col-xs-3">
        <label  for="ex2" style="color: black;"><h6>Timesheet Entered</h6></label>
        <select  class="selectpicker" data-show-subtext="true"   data-live-search="true">
        	<option value=""></option>
      <option value="1">Both</option>
      <option value="1">Entered</option>
      <option value="1">Not Entered</option>
      </select>
      </div>
</div>

<label style="margin-top: 20px;"  for="ex2" style="color: black;"><h6>Include Date Range</h6></label>
	<label style="margin-top: -10px;" class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
<hr>
<button type="button" class="btn btn-info"><i class="fa fa-filter"> Apply Filters</i></button>

  </div>	
 </div>
</div>
</div>

<!-- <script type="text/javascript">
	$(".btn-group-toggle").twbsToggleButtons();

</script> -->