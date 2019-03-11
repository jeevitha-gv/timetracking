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
  margin-left: -1055px;
  
  opacity: 0.1;
}

</style>
<body>
  

  <div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard : Projects</h4>
  <div class="panel panel-default" style="width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5 style="margin-top: 3px;"><strong>EXPENSE SHEET LIST</strong></h5>
      <div style="margin-top: -40px;margin-left: 1039px;">

<form method="POST" action="addexpense.php">
<button style="background-color: lightgray;" type="button" class="btn btn-default btn-sm">
          <span  data-toggle="modal" data-target="#Modal" class="glyphicon glyphicon-search">Search</span>
        </button>

        <button type="submit" class="btn btn-success">
          <span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Expense Sheet</span>
        </button>
        </form>

          <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <label for="ex1" style="color: black;"><h6>Employee Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
          <option value=""></option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Approval Status</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option value="1">All Expenses</option>
      <option value="2">All Open Expenses</option>
      <option value="3">Not Submitted</option>
      <option value="4">Submitted</option>
      <option value="5">Approved</option>
      <option value="5">Status</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label style="margin-top: 20px;color: black;"  for="ex2" style="color: black;"><h6>Include Date Range</h6></label><br>
  <label style="margin-top: -10px;margin-left: 5px;" class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
      </div>
  </div>

<div class="form-group row">
        <div class='col-sm-2'>
          <label for="ex2" style="color: black;"><h6>Start Date</h6></label>
            <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
          <div style="margin-left: 150px;" class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6>Due Date</h6></label>
            <div class='input-group date' id='duedate'>
                    <input type='text' class="form-control" />
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

<hr class="hr">

<p style="margin-left: -1050px;color: black;">Show</p>
  <select style="width: 85px;margin-left: -1005px;margin-top: -40px;" class="form-control" id="sel1">
        <option value="1">10</option>
        <option value="2">20</option>
        <option value="3">30</option>
        <option value="4">40</option>
        <option value="5">50</option>
      </select>
      <p style="margin-left: -915px;margin-top: -30px;color: black;">entries</p>
      <div class="form-group">
        <div style="margin-top: -29px;">
        </div>
        
      </div>
         <div style="margin-top: 60px;margin-left: -1040px;color: #363636;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>Project Name</th>
        <th>Description</th>
        <th>Amount</th>
      </tr>
    </thead>
      <?php

    $sql = "SELECT * from expense";
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
        <td><?php echo $row['projectname']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['amount']; ?></td>
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


</body>
</html>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datepicker();
            });
            $(function () {
                $('#duedate').datepicker();
            });
 </script>
 