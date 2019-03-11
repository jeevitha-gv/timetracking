<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
    <title></title>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <style>
body 
  {
  background-color: #ECF0F2;
}
#content {
    display: none;
    width: 300px;
    color: #333;
}
</style>
</head>
<body>
	
	<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
	<a style="color: #878787" href="">Dashboard:</a> <a style="color: #878787" href=""> My Reports: </a>Show Report
  <div class="panel panel-default" style="width:100%;background-color: #e9e9e9;border: 1px solid #d2d2d2;">
    <div>
    <h4 style="margin-left: 10px;margin-top: 15px;"><b>Expense Sheet Report</b></h4>
    </div>
    <div style="margin-top: -30px;margin-left: 1110px;" class="container">
  <button id="button" data-toggle="modal" data-target="#save" type="button" class="btn" style="background-color: #bfc9d6"><i class="fa fa-filter">Advanced Search</i></button>
  <button onClick="location.href='expense_generate_report.php'" data-toggle="modal" data-target="#save" type="button" class="btn btn-info"><i class="fa fa-edit">Generate Report</i></button>
 </div>

<hr>
     <div style="margin-top: -30px;" class="form-group row">
     	<div style="width: 1400px;margin-left: 30px;">
      <div class="col-xs-2" style="height: -20px;">
         <label for="ex1" style="color: black;"><h6>Date Range:</h6></label>
       
         <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width:100%">
                   
    <i class="fa fa-calendar"></i>&nbsp;
    <span></span> <i class="fa fa-caret-down"></i>
</div>

      </div>
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Employees:</h6></label>
        <select  class="selectpicker"  multiple data-live-search="true" class="checkbox" data-size="5">
      <option value="">SATHISH  </option>
      
        </select>
      </div>
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Department:</h6></label>
        <select  class="selectpicker"  multiple data-live-search="true" class="checkbox" data-size="5">
      <option value="">Default Department</option>
      
      
        </select>
      </div>
       <div class="form-group row">
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Location:</h6></label>
        <select  class="selectpicker"  multiple data-live-search="true" class="checkbox" data-size="5">
      <option value="">Default Location</option>
      
        </select>
      </div>
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Role:</h6></label>
       <select class="selectpicker" multiple data-live-search="true" class="checkbox" data-size="5">
      <option value="1">Administrator</option>
      <option value="2">Expense Entry Approvar</option>
      <option value="3">External User</option>
      <option value="4">Project Manager</option>
      <option value="5">Team Lead</option>
      <option value="6">Time Entry Approvar</option>
      <option value="7">User</option>
      </select>
      </div>
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Base Currency:</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-size="5">
      <option value="0">AUD</option>
      <option value="1">CAD</option>
      <option value="2">CHF</option>
      <option value="3">EUR</option>
      <option value="4">GBP</option>
      <option value="5">JPY</option>
      <option value="6">US$</option>

      </select>
      </div>
  </div>
</div>
</div>


<div id='content'>
<div class="form-group row">
     	<div style="width: 1400px;margin-left: 30px;">
      <div class="col-xs-2" style="height: -20px;">
         <label for="ex1" style="color: black;"><h6>Approved Status:</h6></label>
       <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="active">Both</option>
       <option value="1">Approved</option>
             <option value="active">Not Approved</option>

      </select>

      </div>
      
      <div class="col-xs-2">
         <label for="ex1" style="color: black;"><h6>Submission Status:</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="active">Both</option>
       <option value="1">Submitted</option>
             <option value="active">Not Submitted</option>

      </select>
      </div>
    
      <div class="col-xs-2" style="height: -20px;">
  <label for="ex1" style="color: black;"><h6>Report Type:</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="active">Detailed</option>
       <option value="1">Consolidated</option>
      </select>

      </div>
  
</div>
</div>
</div>

</div>
</div>
</div>

<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
<div class="panel panel-default" style="height:	50px;width:100%;">
<h4 style="text-align: center; margin-top: 15px;"><b>No Data Match Your Criteria. Try Different Filters.
</b></h4>

</div>

</div>
</div>

</body>
</html>
<script type="text/javascript">
	$('.demo').fSelect();

</script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>

<script type="text/javascript">
	$("#button").click(function () {
     $("#content").stop().slideToggle();
     return false;
 });
</script>