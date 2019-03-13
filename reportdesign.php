<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title>Report Design</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

  <style>
.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -1170px;
  opacity: 0.1;
}
.collapsible {
  background-color: #4C8EBA;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 2px #4C8EBA;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color:#4C8EBA;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;

}
</style>
</head>
<body>
  
<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : <a href="myreports.php">My Reports</a> : Report Design</h4>
  
     <button class="collapsible">Report Information</button>
<div class="content">
 <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Report Name :</h6></label><br><br>
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Report Datasource :</h6></label>
        <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Absence</option>
        <option>Attendence</option>
        <option> Clients</option>
        <option>Departments</option>
        <option>Employee Time Off Audit Report</option>
        <option> Employee Tome Off Detail</option>
        <option> Employye Time Off Summary</option>
      </select>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
     <div class="panel panel-default" style="width:100%;margin-top:50px;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>REPORT COLUMN</b></h5></div>
    </div>
   <div class="container">
 <table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>Select</th>
      <th>Report Column</th>
      <th>Caption</th>
      <th>Group</th>
      <th>Show Summary</th>
      <th>Formula</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>Attendance Date</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="Date"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option></td>
        <td></td>
    </tr>
     <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>EmployeeName</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="EmployeeName"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option></td>
        <td></td>
    </tr>
     <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>AbsenceDescribtion</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="Absence Type"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option></td>
        <td></td>
    </tr>
    <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>EmployeeCode</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="EmployeeCode"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option></td>
        <td></td>
    </tr>
     <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>FormulaField1</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="FormulaField1"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option>
        <option>Sum</option></td>
        <td><input class="form-control" id="ex1" type="text"></td>
    </tr>
     <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>FormulaField2</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="FormulaField2"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option>
        <option>Sum</option></td>
        <td><input class="form-control" id="ex1" type="text"></td>
    </tr>     

    <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>FormulaField3</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="FormulaField3"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option>
        <option>Sum</option></td>
        <td><input class="form-control" id="ex1" type="text"></td>
    </tr>
    <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>FormulaField4</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="FormulaField4"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option>
        <option>Sum</option></td>
        <td><input class="form-control" id="ex1" type="text"></td>
    </tr>
    <tr>
      <th scope="row"><input type="Checkbox" name="cbox"></th>
      <td>FormulaField5</td>
      <td><input class="form-control" id="ex1" type="text" placeholder="FormulaField5"></td>
      <td> <input type="Checkbox" name="cbox"></td>
      <td> <select class="selectpicker " data-show-subtext="true" data-live-search="true" id="type">
        <option value="">None</option>
        <option>Count</option>
        <option>Sum</option></td>
        <td><input class="form-control" id="ex1" type="text"></td>
    </tr>
     
  </tbody>
</table>

</div>
</div>
</div>
</div>
</div>
 
<div>
<a  href="reportdesignnext.php" type="button" class="btn btn-success" style="background-color:#00C084;float:right;">Next</a>
 <a  href="report.php" type="button" class="btn btn-success" style="background-color:#00C084;float:right;">Previous</a>

 
 </div>
</body>
</html>




