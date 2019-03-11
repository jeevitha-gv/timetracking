
<!DOCTYPE html>
<?php 
require "header.php";
?>
<html lang="en"> 
<head> 
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
    <div>
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;">Dashboard : Billing</h4>
  <div class="panel panel-default" style="height:300px;width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>ACCOUNT TIME EXPENSE BILLING
    </b></h5></div>
     </div>
     <div style="margin-left:15px;color: #7F98AF;">
       <h5><b>Time Expense Billing</b></h5></div><br><br>
       <div style="text-align: center;margin-left: -1350px;"">
        
       <a href="invoicemanagement.php" type="button" data-toggle="tooltip" title="Invoice Management" ><img src="man.png" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 50%"> <br>Invoice<br> Management</a></div>
       <div style="text-align: center;margin-left: -1100px;margin-top: -110px;">
         <a href="tbw.php" type="button" type="button" data-toggle="tooltip" title="Time Billing Worksheet" ><img src="gears.jpg" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 50%"><br>Time Billing<br> Worksheet</a>
         </ul>
       </div>
       <div style="text-align: center;margin-left: -800px;margin-top: -110px;">
         <a href="ebw.php" type="button" type="button" data-toggle="tooltip" title="Expense Billing Worksheet" ><img src="key.png" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 50%"><br>Expense Billing<br> Worksheet</a>
         </ul>
       </div>
       
       </div>
     </div>
</body>
</html>
