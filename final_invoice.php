<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<html lang="en"> 
<head> 
    <title>Final Invoice</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css">
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
  <div class="container" style="width:1500px;margin-left:10px;">
  <div class="panel panel-default">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>Final Invoice</b></h5>
</div>
</div>
     <div style="margin-top: 40px;">
     <div class="container-fluid" style="text-align: center;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Invoice Number</th>
            <th>TimeSheet Description</th>
            <th>TimeSheet Bill Rate</th>
            <th>TimeSheet Bill Hours</th>
            <th>TimeSheet Total</th>
            <th>Expense Name</th>
            <th>Expense Amount</th>
            <th>TimeSheet & Expense Total</th>
            <th>Discount</th>
            <th>Tax</th>
            <th>Grand Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
    $sql = "SELECT id, CONCAT('I',LPAD(userid,5,'0')) as userid ,projectname ,clientname ,t_description ,t_bill_rate ,t_bill_hours ,t_total ,e_expensename ,e_billed_amount ,sub_total ,discount ,tax ,grand_total from final_invoice LIMIT 10";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
        <tbody>
          <tr>
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['t_description'];?></td>
            <td><?php echo $row['t_bill_rate']; ?></td>
            <td><?php echo $row['t_bill_hours']; ?></td>
            <td><?php echo $row['t_total']; ?></td>
            <td><?php echo $row['e_expensename'];?></td>
            <td><?php echo $row['e_billed_amount'];?></td>
            <td><?php echo $row['sub_total'];?></td>
            <td><?php echo $row['discount'];?>%</td>
            <td><?php echo $row['tax'];?></td>
            <td><?php echo $row['grand_total'];?></td>
            <td><a href="final.php?userid=<?php echo $row['id']; ?>" class="btn btn-success">Print Invoice</a></td>
          </tr>
            <input type="hidden" value="<?php echo $row['projectname'];?>">
            <input type="hidden" value="<?php echo $row['clientname'];?>">
            <input type="hidden" value="<?php echo $row['invoicedate'];?>">

        </tbody>
        <?php } }else { echo "0 results"; } ?>
      </table>

     </div>
  </div>
 </div>
</div>
</body>
</html>
