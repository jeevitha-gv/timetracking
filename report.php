<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title>Report Design</title>
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
  <h4 style="color: gray;">Dashboard:My Reports : Report Design</h4>
   <div class="panel panel-default" style="width:100%;height: 900px;">
    <div class="panel-body" style="color:#4C8EBA "><h5><b>REPORT DEFINITION INFORMATION</b> </h5></div>
<div style="background-color:#d3d3d3;height:40px;width: 100%;">Report Definition</div>
    <div class="col-xs-3" style=" margin-left: 400px;"">
      Report Name<input class="form-control" id="ex1" type="text">
      </div><br>
       <div class="col-xs-3" style=" margin-left: 400px;"">
      Report Description<input class="form-control" id="ex1" type="text">
      </div><br><br><br><br><br>
       
       <div class="col-xs-4" style=" margin-left: 400px;"">
         Report Category   <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Administor</option>
        <option>Approval</option>
        <option>Attendance</option>
        <option>Audit Trail</option>
        <option>Billing</option>
        <option>Costing</option>
        <option>Expense Tracking</option>
      </select>
      </div><br><br><br>
      <div class="col-xs-3" style=" margin-left: 400px;">
      Upload Report Icon <input id="ex1" type="file">
      </div><br><br><br>
      <div class="col-xs-3" style=" margin-left: 400px;">
       <input id="ex1" type="radio">Detailed
        <input id="ex1" type="radio">Consolidated
      
      </div><br><br>
       <div class="col-xs-3" style=" margin-left: 400px;">
     Show Company Logo
 <input id="ex1" type="checkbox">
      </div><br><br>
  <div class="col-xs-3" style=" margin-left: 400px;"">
      Report Title<input class="form-control" id="ex1" type="text">
      </div><br><br><br><br>
    <div class="col-xs-3" style=" margin-left: 400px;">
      Report Header<textarea rows="4" cols="50"></textarea>
      </div><br><br><br><br>
      <div class="col-xs-3" style=" margin-left: 400px;">
      Report Footer<textarea rows="4" cols="50"></textarea>
      </div>
     
          </div>
   </div>       
</div>
  </div>
</div>
 <a  href="reportdesign.php" type="button"class="btn btn-success"   style="background-color:#00C084;float:right;">Next</a>
</body>
</html>




