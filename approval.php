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
  <h4 style="color:#a3a19b;">Dashboard :Manage Approval</h4>
  <div class="panel panel-default" style="height:300px;width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>MANAGE APPROVALS
    </b></h5></div>
     </div>
     <div style="margin-left:15px;color: #7F98AF;">
       <h5><b>Approvals</b></h5></div><br><br>
       <div style="text-align: center;margin-left: -1350px;"">
        
       <a href="timesheetapproval.php" data-toggle="tooltip" title="TimeSheet Approval" ><img src="man.png" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 45%;"> <br>Time Sheet<br>Approval</a></div>
       <div style="text-align: center;margin-left: -1100px;margin-top: -120px;">
         <a href="expanseapproval.php" type="button" type="button" data-toggle="tooltip" title="Expanse Approval" ><img src="dollar.jpeg" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 45%"><br>Expanse<br> Approval</a>
         </ul>
       </div>
       <div style="text-align: center;margin-left: -800px;margin-top: -120px;">
         <a href="timeoffapproval.php" type="button" type="button" data-toggle="tooltip" title="TimeOff Approval" ><img src="clock.png" class="btn btn-default" style="width: 70px;height: 70px;color: #7F98AF;border-radius: 45%"><br>TimeOff<br>Approval</a>
         </ul>
       </div>
       
       </div>
     </div>
</body>
</html>
