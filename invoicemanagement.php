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
<meta charset="utf-8">

    <title>Rate History</title>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->

<meta name="description" content="Twitter Bootstrap Basic Tab Based Navigation Example">
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap2.2.css" rel="stylesheet"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    width:100%;
}

</style>
</head>
<body>
  
    <div class="col-md-12">
    <div>
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;">Dashboard : Billing : Time Expense Billing </h4>
  
  <div class="panel panel-default" style="width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><B>TIME EXPENSE INVOICE LIST</B></h5></div>
  <div style="margin-top: -50px; margin-left: 280px;">
        <a type="button" href="editinvoice.php"  data-toggle="tooltip" title="Edit" class="btn btn-info btn-lg"  >
         <i class="fa fa-edit"></i>
     </a>
      <a type="button" data-toggle="modal"  data-toggle="tooltip" title="Print" data-target="#EditModal" class="btn btn-default btn-lg"  >
         <i class="fa fa-print"></i>
     </a>
       <a type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-lg">
           <i  class='fa fa-trash'></i>
        </a>
        </div>
   <div style="float: right;margin-top: -50px;">
   <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal" disabled>Update</button>
    <a href="invoiceform.php" type="button" class="btn btn-success"  style="background-color:#00C084" ><span class="glyphicon glyphicon-plus"></span>Add Invoice List</a>
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
         <th><input type="checkbox" name="checkbox"></th>
        <th>Client Name </th>
        <th>Invoice No</th>
        <th>Invoice Date</th>
        <th>Description</th>
        <th>Amount</th>
        
      </tr>
    </thead>
            <?php

 $sql = "SELECT inv.clientname as client,exp.projectname as eproject,inv.projectname as inproject,exp.description as des,exp.amount as amt,inv.invoiceno as voice, inv.invoicedate as indate from expense as exp, invoice as inv WHERE exp.projectname = inv.projectname";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?> 
    
    <tbody>
      <tr>
        <td></td>
      <td><?php echo $row['client']; ?></td>
       <td><?php echo $row['voice']; ?></td>
        <td><?php echo $row['indate']; ?></td>
         <td><?php echo $row['des']; ?></td>
          <td><?php echo $row['amt']; ?></td>
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

</body>
</html>