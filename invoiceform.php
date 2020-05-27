<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
      <script>
        function mul() 
        {
            var x = document.getElementById('hours').value;
            var y = document.getElementById('t2').value;
            var result = parseFloat(x) * parseFloat(y);
            document.getElementById('t3').value = result;
            var expense = document.getElementById('t5').value;
            var subtotal = parseFloat(result)+parseFloat(expense);
            var gst = expense * 0.05;
            var pst = expense * 0.07;
            var hoteltax = expense * 0.06;
            var state = expense * 0.065;
            var vat = expense * 0.15;
            
            if (!isNaN(result) && !isNaN(gst)) 
            {
                document.getElementById('t5').value = expense;
                document.getElementById('1').value = gst;
                document.getElementById('2').value = pst;
                document.getElementById('3').value = hoteltax;
                document.getElementById('4').value = state;
                document.getElementById('5').value = vat;
                document.getElementById('t4').value = subtotal;
                

            }

            var my=document.getElementById("tam");
            document.getElementById("gst").value = my.options[tam.selectedIndex].value;
            document.getElementById("pst").value = my.options[tam.selectedIndex].value;
            document.getElementById("hoteltax").value = my.options[tam.selectedIndex].value;
            document.getElementById("state").value = my.options[tam.selectedIndex].value;
            document.getElementById("vat").value = my.options[tam.selectedIndex].value;
        }

function getPrice() {
var numVal1 = document.getElementById('t4').value;
var numVal2 = document.getElementById('discount').value / 100;
var totalValue =numVal1 - (numVal1 * numVal2);
document.getElementById('total').value = totalValue;
  var total1  = document.getElementById('gst').value;
  var grandtotal = parseFloat(totalValue) + parseFloat(total1);
  document.getElementById('grand').value = grandtotal;

}

  </script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
    <title>Invoice</title>
<style>
   label {
    display: block;
    font: 1.3rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .40rem 0;
}

.note {
    font-size: .80em;
}

body {
    margin: 5px;
    background:#ECF0F1;
}



.modal-content
{
    width:130%;
}
td 
{
  padding:5px ;
}
th
{
  padding:5px ;
}
</style>
</head>
<body style="">
  
  <?php
  if($_POST)
  {
    final_invoice();
  }
  ?>
  
  <form action="" method="post">
    <div class="col-md-12">
    <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="hidden" name="userid" value="<?php echo $row['invoiceno'];?>">
    <input type="hidden" name="projectname" value="<?php echo $row['projectname'];?>">
    <input type="hidden" name="clientname" value="<?php echo $row['clientname'];?>">
    <input type="hidden" name="invoicedate" value="<?php echo $row['invoicedate'];?>">
    <?php } }else { echo "0 results"; } ?>
<div class="container-fluid">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashboard</a> : <a href="billing.php">Billing</a> : <a href="invoicemanagement.php">Time & Expense Billing</a> : Account Invoice Form</h4>
  <div class="container-fluid">
  <div class="panel panel-default">
   <div class="form-group row">
 <div class="col-xs-2">
        <label style="color:black;margin-top: 65px;margin-left: 40px;" >
          <h4><span class="glyphicon glyphicon-user"></span>Sub Total</h4>
         <input type="float" id="t4" class="form-control" value="0.00" name="sub_total"></label>
      </div>
    <div class="col-xs-2">
        <label style="color:black;margin-top: 65px;margin-left: 40px;" ><h4><i class="fa fa-google-wallet"></i> Discount</h4>
      <div class="input-group" style="width: 60%; margin: auto;">
          <input id="discount" onkeyup="getPrice();" type="text" class="form-control" value="0" name="discount">              
      </div>
     </div>
      <div class="col-xs-2">
        <label style="color:black;margin-top: 65px;margin-left: 40px;" ><h4> <i class="fa fa-money"></i> Discount Amount</h4>
         <input type="float" class="form-control" id="total" name="total" onkeyup="getPrice();"></label>
      </div>
      <div class="col-xs-2">
        <label style="color:black;margin-top: 65px;margin-left: 40px;"><h4><i class="fa fa-calendar"></i> Tax</h4>
          <input type="float" class="form-control" id="gst" name="tax"></label>
      </div>
      <div class="col-xs-3">
        <label style="color:black;margin-top: 20px;margin-left: 60px;margin-top: 60px;" ><h4> <i class="fa fa-th-large"></i> Grand Total</h4>
        <input type="float" class="form-control" id="grand" name="grand_total"></label>
         </div>
         </div>
      </div>
      </div>

  <div class="container-fluid">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Time Sheet Billing List</b></h5>
     <div style="float: right;margin-top:-40px;">
    </div>
    </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 150px;">Description</th>
        <th style="width: 100px;">Actual Rate</th>
        <th>Bill Rate</th>
        <th style="width: 100px;">Actual Hours</th>
        <th>Bill Hours</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody id="dataTable">
    <tr>
      <td>
        <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>
    <input type="text" name="t_description" value="<?php echo $row['description'];?>" class="form-control"></textarea>
        <?php } }else { echo "0 results"; } ?>
      </td>
        <td>0.00</td>
        <td><input name="t_bill_rate" class="form-control" value="0.00" type="float" id="t2"  onkeyup="mul();"></td>
        <td><center>0:00</center></td>
        <td>
          <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>
          <input class="form-control" value="<?php echo $row['timesheettotal'];?>" name="t_bill_hours" id="hours" onkeyup="mul();">
        <?php } }else { echo "0 results"; } ?>
        </td>
        <td><input name="t_total" class="form-control" value="0.00" type="float" id="t3"></td>
    </tr>
</tbody>
</table>
</div>

 <div class="container-fluid" style="width:102%;margin-left: -13px;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Expense Billing List</b></h5>
     </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Employee Name</th>
        <th>Expense Name</th>
        <th>Actual Amount</th>
        <th>Tax</th>
        <th>Billed Amount</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <tr>
        <td>
          <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>
          <input type="text" class="form-control" value="<?php echo $row['employeename'];?>" name="e_employeename">
        <?php } }else { echo "0 results"; } ?>
        </td>
        <td>
          <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>
          <input type="text" class="form-control" value="<?php echo $row['expensename'];?>" name="e_expensename">
        <?php } }else { echo "0 results"; } ?>
      </td>
        <td><p>0.00</p></td>
        <td> <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="tam" onchange="mul();">
        <option value="">Select </option>
       <option id="1">GST</option>
       <option id="2">PST</option>
       <option id="3">Hotel Tax</option>
       <option id="4"> State Sales Tax</option>
       <option id="5">VAT</option>
                 </select></td>
        <td>
          <?php
$var=$_GET['userid'];
    $sql = "SELECT * FROM invoice as i,timesheetapproved as t,expenseapproved as e WHERE t.projectname = e.projectname AND i.projectname = t.projectname AND i.projectname = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>
          <input type="float" id="t5" class="form-control" value="<?php echo $row['amount'];?>" name="e_billed_amount">
        <?php } }else { echo "0 results"; } ?>
        </td>
    </tr>
</tbody>
</table>
</div>
</div>
 <div class="container-fluid" style="margin-left: -11px; width: 102%;">
  <div class="panel panel-default"> 
    <div style="margin-left: 20px;">
    <h4 style="color:#4C8EBA;">Description</h4><br>
<textarea name="description" class="form-control input-sm" rows="4" style="width: 100%;"></textarea><br>
<input type="submit" value="Submit" class="btn btn-info" name="submit" style="margin-left: 93%;">
  </div><br>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>