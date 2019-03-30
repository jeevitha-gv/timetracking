<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title>Add Report</title>
  <style>
.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -1170px;
  opacity: 0.1;
}

</style>
</head>
<body>
 <div class="container-fluid">
   <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : <a href="myreports.php">My Reports</a> : Report Design</h4><br>
   <div class="container-fluid" style="border-style: ridge;"><br>
     <b style="color: #4C8EBA;">Report Definition Information</b><br><br>
     <div style="background-color: #d3d3d3;">
      <b>Report Definition</b><br>
     </div><br><br>
     <div class="row">
     <div class="col-xs-3">
       <label>Report Name</label>
       <input type="text" name="report_name" class="form-control">
     </div>
     <div class="col-xs-3">
       <label>Report Description</label>
       <input type="text" name="report_desc" class="form-control">
     </div>
     <div class="col-xs-3">
       <label>Report Category</label><br>
       <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="category">
         <option></option>
         <option value="Administrator">Administrator</option>
         <option value="Approval">Approval</option>
         <option value="Attendance">Attendance</option>
         <option value="Audit Trail">Audit Trail</option>
         <option value="Billing">Billing</option>
         <option value="Costing">Costing</option>
         <option value="Expense Tracking">Expense Tracking</option>
       </select>
     </div>
     <div class="col-xs-3">
       <label>Upload Report Icon</label><br>
       <input type="file" name="upload" class="form-control">
     </div>
     </div><br><br>
     <div class="row">
       <div class="col-xs-4">
         <input type="radio" name="report" value="Detailed" checked><label>Detailed</label>
         <input type="radio" name="report" value="Consolidated"><label>Consolidated</label><br>
       </div>
       <div class="col-xs-4">
         <label>Show Company Logo</label>
         <input type="checkbox" class="form-check-input" name="logo">
       </div>
       <div class="col-xs-4">
        <label>Report Title</label>
        <input type="text" name="title" class="form-control">
      </div>
     </div><br><br>
     <div class="row">
       <div class="col-xs-6">
         <label>Report Header</label>
         <textarea class="form-control" name="header"></textarea>
       </div>
       <div class="col-xs-6">
         <label>Report Footer</label>
         <textarea class="form-control" name="footer"></textarea>
       </div>
     </div><br><br>
     <div class="row" style="float: right;">
       <div class="col-xs-3">
          <a href="reportdesign.php"><input type="submit" class="btn btn-success" name="next" value="Next"></a>
        </div><br><br>
     </div>
   </div>
 </div>
</body>
</html>




