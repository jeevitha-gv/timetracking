<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title>My Reports</title>
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
  <div>
    <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : My Reports</h4><br>
    <a href="report.php" class="btn btn-success">Add New Report</a>
  </div><br>
  <div class="container-fluid" style="border: 1px solid black;"><br>
    <div class="container-fluid" style="color: #4C8EBA;"><b>My Reports</b></div><hr>
    <table class="table table-bordered">
      <tr>
        <th>Report Name</th>
        <th>Customize</th>
        <th>Permission</th>
        <th>Delete</th>
        <th>Copy</th>
      </tr>
      <tr>
        <td>
          <a href="detail_timesheet.php" type="button" data-toggle="tooltip" title="Detail TimeSheet Report" >
          <img src="timesheet.png" class="btn btn-basic" style="width: 70px;height: 70px;">Detail TimeSheet Report</a><br>
          <p style="margin-left: 75px;margin-top:-20px; ">Generates a TimeSheet report for a given user for a given time period. The user can select the details to be included in the report.  </p>
        </td>
        <td>
          <a href="report.php" type="button" data-toggle="tooltip"  class="btn btn-basic">Customize</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip"  class="btn btn-basic">Permissions</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip" class="btn btn-basic">Delete</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip" class="btn btn-basic">Copy</a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="expense_report.php" type="button" data-toggle="tooltip" title="Detail TimeSheet Report" >
          <img src="expense.jpg" class="btn btn-basic" style="width: 70px;height: 70px;">Expense Sheet Report</a><br>
          <p style="margin-left: 70px;margin-top:-20px;">Expense Sheet Report</p>
        </td>
        <td>
          <a href="report.php" type="button" data-toggle="tooltip"  class="btn btn-basic">Customize</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip"  class="btn btn-basic">Permissions</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip" class="btn btn-basic">Delete</a>
        </td>
        <td>
          <a href="#" type="button" data-toggle="tooltip" class="btn btn-basic">Copy</a>
        </td>
      </tr>
    </table>
  </div>
</div><br>
</body>
</html>