
<!DOCTYPE html>
<?php 
require "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
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
  <h4 style="color:#a3a19b;">Dashboard : Billing : Time Billing Worksheet</h4>
  <div class="panel panel-default" style="width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>TIME BILLING WORKSHEET
    </b></h5>
<div style="float: right;margin-top:-30px;">
       <a type="button"  disabled class="btn btn-success"  style="background-color:#00C084" >Update</a>
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
        <div class="col-xs-5">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Client Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
       <option>Name</option>
           </select>
           </div>
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
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
      
                 </select></div>
                 </div>

                  <div class="form-group row">
       
      <div class="col-xs-5">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Project Tsk</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All</option>
            <option>Create UI</option>
                 </select></div>
     </div>
                  <div class="form-group row">
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billed</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Both </option>
       <option>Billed</option>
       <option>Non Billed</option>
       
                 </select></div>
     </div>
                 
      
     </div>


 <script type="text/javascript">
    $('.file_upload').file_upload();
 </script>
       
           <div class="modal-footer">
             <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-filter">Apply Filters</i></a>
          <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-remove">Clear Filters</i></button>
        </div>
     </div>
     </div>
     </div>
     </div>

</div>
</div>
   
     <div style="margin-top: 40px;">
 <p style="margin-left: 5px;">Show</p>
  <select style="width: 85px;margin-left: 50px;margin-top: -40px;" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <p style="margin-left: 135px;margin-top: -30px;">entries</p>
      <div style="margin-left: 1150px;margin-top: -40px;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" data-live-search="true" id="pwd" name="pwd">
      </div>
          </div>
          </div>
          <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>Billed</th>
        <th>Employee Name</th>
        <th>Task/Project</th>
        <th>Invoice Detail</th>
        <th>Billing Rate</th>
        <th>Total Time</th>
        </tr>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $row['eno'];?></td>
      <td><?php echo $row['firstname'];?></td>
      <td><?php echo $row['projectname'];?></td>
      <td><?php echo $row['invoiceno'];?></td>
      <td><?php echo $row['billingrate'];?></td>
      <td><?php echo $row['duration'];?></td>        
      </tr>
       
    </tbody>
  </table>
</div>
  </div> 
  </div> 
       </div>
       </div>
     </div>

</body>
</html>
