<!DOCTYPE html>
<?php 
require "header.php";
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
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashbord</a> : <a href="approval.php">Manage Approvals</a> : TimeSheet Approval</h4>
  <div class="panel panel-default" style="height:200px;width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>TIMESHEET APPROVALS
    </b></h5>
<div style="float: right;margin-top:-30px;">
       <a type="button"  disabled class="btn btn-success"  style="background-color:#00C084" ><i class="fa fa-edit">Update Approvals</i></a>
        <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-filter">Filters</i></a>
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 80%;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title" >Filters</h4>
        </div>
        <div class="modal-body">
         <div class="form-group row">
                               <div class="col-xs-12">
                   <label style="color: black;margin-top: 5px;" for="ex2"><h6>Date Range</h6></label>
                  <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width:50%">
                   
    <i class="fa fa-calendar"></i>&nbsp;
    <span></span> <i class="fa fa-caret-down"></i>
</div>

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
   </div>
           </div>
            <div class="form-group row">
       <div class="col-xs-5">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Employee Name</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
      <option>Name</option>
                 </select></div>
                 </div>
           <div class="form-group row">
       <div class="col-xs-5">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
      <option>Risk</option>
                 </select></div>
                 </div>

                 
                 
      
     </div>


 <script type="text/javascript">
    $('.file_upload').file_upload();
 </script>
       
           <div class="modal-footer">
             <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-filter">Apply Filters</i></a>
         
        </div>
     </div>
     </div>
     </div>
     </div>

</div>
</div>
   
     <div style="margin-top: 40px;">
     <div class="panel panel-body" style="text-align: center;font-size:20px;">
      <p><b>No Timesheet Approval(s) Found</b> </p>
     </div>
 
</div>
  </div>
  
  </div> 
       </div>
       </div>
     </div>
</body>
</html>
