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
  width: 1465px;
  margin-left: 0px;
  opacity: 0.1;
}

</style>
</head>
<body>

  <form action="" method="post">
<div class="panel-default"> 
    <h4><a href="dashboard.php">Dashboard:</a> <a href="myexpense.php"> My Expense Sheets: </a>My Expense Entries</h4>
<div class="container-fluid">
  <div class="panel panel-default">
<hr>
<div class="container">
  <div class="row">
      <div style="margin-left: -130px;" class="col-sm-2">
        <i class="fa fa-user"></i><label for="ex1" style="color: black;"><h4>Employee</h4></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
      <option></option>
      <?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>

  <option value="<?php echo $row['firstname']; ?>"><?php echo $row['firstname']; ?></option>
       <?php
}
  }else {
    echo "0 results";
}

?>
    </select>
      </div>
      <div class="col-sm-2" style="margin-left: 30%;">
       
        <!-- <div class='col-sm-2'> -->
        <i class="fa fa-calendar"></i><label for="ex1" style="color: black;"><h4>Date</h4></label>
        <div class='input-group date' id='datetime'>
                    <input placeholder="Enter date" type='text' class="form-control"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              <!-- </div> -->
            
      </div>

      <div class="col-sm-2" style="margin-left: 30%;">
          <i style="margin-left: -20px;"  class="fa fa-check" aria-hidden="true"></i><label style="margin-right: 50px;margin-top: -70px;" for="ex1" style="color: black;"><h4>Reimbursement Currency</h4></label>
          <select style="margin-top: -20px;" class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
            <option></option>
            <option value="AUD">AUD</option>
            <option value="CAD">CAD</option>
            <option value="CHF">CHF</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
            <option value="US">US</option>
            <option value="INR">INR</option>
          </select>

       </div> 


  </div>
</div>
</div>
</div>
</div>


  <div>
    <div class="panel-default"> 
<div class="container-fluid" >
  <div class="panel panel-default">
    <h5 style="color: #81AFE7;margin-left: 20px;"><strong>EXPENSE ENTRY LIST</strong></h5>
    <hr>

           <div style="margin-top: 60px;color: #363636;margin-left: 15px;width: 98%">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>
           <label style="margin-bottom: 20px;margin-right: -20px;" class="checkbox-inline">
      <input type="checkbox" value="">
    </label>
         </th>
        
        <th>Date</th>
        <th>Project Name</th>
        <th>Expense Name</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Status</th>
        <!-- <th></th> -->
      </tr>
    </thead>
    <?php
    $sql = "SELECT * from project,expense Order By id DESC LIMIT 1";
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
        <td><?php echo $row['expenseentrydate'];?></td>
        <td><?php echo $row['projectname'];?></td>
        <td><?php echo $row['expensename'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['amount'];?></td>
        <td><?php echo $row['project_status'];?></td>        
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
<div class="container-fluid">
  <div class="panel panel-default" style="width:100%;">

    <div style="margin-left: 15px;margin-top: 10px; ;width: 98%" class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea><br>
  <button type="submit" class="btn btn-success">Save</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
    </div>
  </div>
  </div>
</div>

</div>
</form>
</body>
</html>


<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datepicker();
            });
            
 </script>


 <script type="text/javascript">
            $(function () {
                $('#datetime').datepicker();
            });

 </script>


 <script type="text/javascript">
            $(function () {
                $('#date').datepicker();
            });
            
 </script>

 <script type="text/javascript">
  $('.file_upload').file_upload();
 </script>