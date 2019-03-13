
<!DOCTYPE html>
<?php 
require "header.php";
?>
<html lang="en"> 
<head> 
<meta charset="utf-8">
    <title>Expense</title>
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
  <h4 style="color:#a3a19b;">Dashboard : Billing : Expense Billing Worksheet</h4>
  <div class="panel panel-default" style="width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>EXPENSE BILLING WORKSHEET
    </b></h5>
<div style="float: right;margin-top:-30px;">
       <a type="button" class="btn btn-success"  style="background-color:#00C084" >Update</a>
        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-search">Search</i></a>
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title">Search Parameters</h4>
        </div>
        <div class="modal-body">
       <div class="form-group row">
        <div class="col-xs-5">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Project </h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
       <option>Risk</option>
           </select>
           </div>
       <div class="col-xs-5">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Clent Name</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
       <option>Name</option>
       
                 </select></div>
                 </div>

                  <div class="form-group row">
       
      <div class="col-xs-5">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Expense Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All</option>
       <option>Air Travel</option>
       <option>Hotel</option>
       <option>Auto Rental</option>
       <option>Taxi</option>
       <option>Telephone</option>
       <option>Parking</option>
       <option>Tolls</option>
       <option>Car Mileage</option>
       <option>Gas</option>
       <option>Food</option>
       <option>Supplies</option>
       <option>Entertainment</option>
       <option>Others</option>
                 </select></div>
       <div class="col-xs-5">
    <label style="color: black;margin-top: 10px;" for="ex2"><h6>Expense Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">All </option>
       <option>Air Travel</option>
       <option>Hotel</option>
       <option>Auto Rental</option>
       <option>Taxi</option>
       <option>Telephone</option>
       <option>Parking</option>
       <option>Tolls</option>
       <option>Car Mileage</option>
       <option>Gas</option>
       <option>Food</option>
       <option>Supplies</option>
       <option>Entertainment</option>
       <option>Others</option>
                 </select></div></div>
                  <div class="form-group row">
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billed</h6></label>
        <select  class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Both </option>
       <option>Billed</option>
       <option>Non Billed</option>
       
                 </select></div>
     </div>
                  <div class="form-group row">
              
  <div class='col-sm-5'>
            <label for="ex2" style="color: black;"><h6> Start Date</h6></label>
            <div class='input-group date' id='datetime'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
          
        <div class='col-sm-5'>
            <label for="ex2" style="color: black;"><h6> End Date</h6></label>
            <div class='input-group date' id='date'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div></div>
     <script type="text/javascript">
            $(function () {
                $('#datetime').datepicker();
            });
            $(function () {
                $('#dudate').datepicker();
            });
            $(function () {
                $('#date').datepicker();
            });
 </script>

 <script type="text/javascript">
    $('.file_upload').file_upload();
 </script>
       
           <div class="modal-footer">
            <button type="button" class="btn btn-success" style="background-color:#00C084" data-toggle="modal" data-target="#myModal">Show</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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
        <th>Date</th>
        <th>Employee Name</th>
        <th>Project Name</th>
        <th>Expense Name (Expense Type)</th>
        <th>Description</th>
        <th>Invoice Details</th>
        <th>Amount</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        
      </tr>
       
    </tbody>
  </table>
</div>
  </div>  
       </div>
       </div>
     </div>
</body>
</html>
