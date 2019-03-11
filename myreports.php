<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title></title>
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
  
<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard:My Reports</h4>
  <a href="report.php" class="btn btn-success"   style="background-color:#00C084">
          Add New Report 
        </a><br><br>
        <div class="panel panel-default" style="width:100%;">
   <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>My Reports
    </b></h5></div>
     </div><br>
<br>
      <div style="margin-top: -40px;margin-left:15px;width: 98%">
    <hr>
        <table class="table table-bordered">
       <tr><div style="background-color:#dedee5;height:40px;border-bottom: 5px solid #bcbcbc;border-top: 5px solid #bcbcbc;"><b style="margin-left: 15px;">User</b></div>
       </tr>
        <tr>
          <th>Report Name</th>
          <th>Customize</th>
          <th>Permissions</th>
          <th>Delete</th>
          <th>Copy</th>
          </tr>
      <tr>
      <td> <a href="detail_timesheet.php" type="button" data-toggle="tooltip" title="Detail TimeSheet Report" ><img src="timesheet.png" class="btn btn-basic" style="width: 70px;height: 70px;"> Detail TimeSheet Report</a><br>
<p style="margin-left: 75px;margin-top:-20px; ">Generates a TimeSheet report for a given user for a given time period. The user can select the details to be included in the report.  </p>
      </td>
      <td><a href="report.php" type="button" data-toggle="tooltip"  class="btn btn-basic"> Customize</a></td>
      <td>
        <a href="invoicemanagement.php" type="button" data-toggle="tooltip"  class="btn btn-basic">Permissions</a>
      </td>
      <td></td>
      <td>
        <a href="invoicemanagement.php" type="button" data-toggle="tooltip" class="btn btn-basic"> Copy</a>
      </td>
</tr>

 <tr>
      <td> <a href="expense_report.php" type="button" data-toggle="tooltip" title="Detail TimeSheet Report" ><img src="expense.jpg" class="btn btn-basic" style="width: 70px;height: 70px;">Expense Sheet Report</a><br>
<p style="margin-left: 70px;margin-top:-20px; ">
  Expense Sheet Report
</p>
      </td>
      <td><a href="invoicemanagement.php" type="button" data-toggle="tooltip"  class="btn btn-basic"> Customize</a></td>
      <td>
        <a href="invoicemanagement.php" type="button" data-toggle="tooltip"  class="btn btn-basic">Permissions</a>
      </td>
      <td></td>
      <td>
        <a href="invoicemanagement.php" type="button" data-toggle="tooltip" class="btn btn-basic"> Copy</a>
      </td>
</tr>

          
        </table>




            </div>


 
 
    
     
          </div>
          

  </div>
</div>

</body>
</html>