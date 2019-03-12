<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<!DOCTYPE html>

<html lang="en"> 
<head> 

      <script>
        function mul() 
        {
            var x = document.getElementById('t1').value;
            var y = document.getElementById('t2').value;
            var result = parseFloat(x)* parseFloat(y);
            var gst = result * 0.05;
            var pst = result * 0.07;
            var hoteltax = result * 0.06;
            var state = result * 0.065;
            var vat = result * 0.15;
           
            if (!isNaN(result) && !isNaN(gst)) 
            {
                document.getElementById('t3').value = result;
                document.getElementById('1').value = gst;
                document.getElementById('2').value = pst;
                document.getElementById('3').value = hoteltax;
                document.getElementById('4').value = state;
                document.getElementById('5').value = vat;




            }

            var my=document.getElementById("tam");
            document.getElementById("gst").value = my.options[tam.selectedIndex].value;
            document.getElementById("pst").value = my.options[tam.selectedIndex].value;
            document.getElementById("hoteltax").value = my.options[tam.selectedIndex].value;
            document.getElementById("state").value = my.options[tam.selectedIndex].value;
            document.getElementById("vat").value = my.options[tam.selectedIndex].value;
        }

         function mu() 
        {
            var x = document.getElementById('t1').value;
            var y = document.getElementById('t2').value;
            var result = parseFloat(x)* parseFloat(y);
            var gs = result * 0.05;
            var ps = result * 0.07;
            var oteltax = result * 0.06;
            var stat = result * 0.065;
            var va = result * 0.15;
           
            if (!isNaN(result) && !isNaN(gs)) 
            {
                document.getElementById('t3').value = result;
                document.getElementById('a').value = gs;
                document.getElementById('b').value = ps;
                document.getElementById('c').value = oteltax;
                document.getElementById('d').value = stat;
                document.getElementById('e').value = va;
            }

            var ta=document.getElementById("tax");
            document.getElementById("gs").value = ta.options[tax.selectedIndex].value;
            document.getElementById("ps").value = ta.options[tax.selectedIndex].value;
            document.getElementById("oteltax").value = ta.options[tax.selectedIndex].value;
            document.getElementById("stat").value = ta.options[tax.selectedIndex].value;
            document.getElementById("va").value = ta.options[tax.selectedIndex].value;

        }





  </script>



<meta charset="utf-8">

    <title>Rate History</title>

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
  <?php if($_POST)
  {
    invoice();
  }
  ?>
  <form action="" method="post">
    <div class="col-md-12">
   
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;">Dashboard : Billing : Account Invoice Form</h4>
  <div class="panel panel-default" style="height:150px;width:100%;">
   <div style="float: right;margin-top:10px;">
   <button type="button" class="btn btn-basic"   >Back</button>
    <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal">Generate Invoice</button>
    </div>
   <div class="form-group row">
 <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4> <span class="glyphicon glyphicon-user"></span> Sub Total</h4>
         <p>0.00</p></label>
      </div>
    <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4><i class="fa fa-google-wallet"></i> Discount</h4>
       <div class="input-group"  style="width: 60%; margin: auto;">
                        <input id="txtDiscountPercentage" type="text" class="form-control" value="0">
                        <span id="spanDiscountPercentage" class="input-group-addon">%</span>
                    </div>
     </div>
      <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4> <i class="fa fa-money"></i> Discount Amount</h4>
         <p>-0.00</p></label>
      </div>
      <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4><i class="fa fa-calendar"></i> Tax 1</h4>
         <p>    <input type="text" id="gst">
</p></label>
      </div>
      <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4> <span class="glyphicon glyphicon-plus"></span> Tax2</h4>
         <p>     <input type="text" id="gs"></p></label>
      </div>
      <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 20px;margin-left: 40px;" ><h4> <i class="fa fa-th-large"></i> Grand Total</h4>
         <p>0.00</p></label>
         </div>
         </div>
      </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title">Invoice Information</h4>
        </div>
        <div class="modal-body">
        <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Invoice No</h6></label>
        <input class="form-control" type="text" name="invoiceno">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>PO Number</h6></label>
        <input class="form-control" type="text" name="ponumber">
      </div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billable</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billable">
        <option value="Both">Both </option>
       <option value="Billable">Billable</option>
        <option value="NonBillable">NonBillable</option>
       
                 </select></div></div>
     <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Client Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="clientname">
                        <?php
    $sql = "SELECT * from client";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
 ?>
        <option value="<?php echo $row['clientname']; ?>"><?php echo $row['clientname']; ?></option>
        <?php

}
  }else {
    echo "0 results";
}

?>
  
       
                 </select></div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Project Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="projectname">
               <?php
    $sql = "SELECT * from project";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
 ?>
    
        <option value="<?php echo $row['projectname']; ?>"><?php echo $row['projectname']; ?></option>
      
<?php

}
  }else {
    echo "0 results";
}

?>
   
       
                 </select>
 </div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Parent Task</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
                      <?php
    $sql = "SELECT * from task";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
 ?>
      
        <option value="<?php echo $row['parenttask']; ?>"><?php echo $row['parenttask']; ?></option>
       
       <?php

}
  }else {
    echo "0 results";
}

?>
   
                 </select></div></div>
                  <div class="form-group row">
               <div " class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Invoice Date</h6></label>
                    <input type='date' class="form-control" name="invoicedate">
                    
          </div>
  <div class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Billing Cycle Start Date</h6></label>
                    <input type='date' class="form-control" name="billing_startdate" />
                    
          </div>
          
        <div class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Billing Cycle End Date</h6></label>
                    <input type='date' class="form-control" name="billing_enddate" />
                    
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
        <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Currency</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="currency" data-live-search="true" id="type">
          <option>None Selected</option>
        <option value="AUD">AUD </option>
       <option value="CAD">CAD</option>
        <option value="CHF">CHF</option>
        <option value="EUR">EUR</option>
        <option value="INR">INR</option>
        <option value="GBP">GBP</option>
        <option value="JPY">JPY</option>
        <option value="US$">US$</option>
                 </select>
       
       
                 </div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Tax 1</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="tax1" data-live-search="true" id="type">
        <option>None Selected</option>
       <option value="Airport_tax">Airport Tax</option>
       <option value="GST">GST</option>
       <option value="Hotel_tax">Hotel Tax</option>
       <option value="PST">PST</option>
       <option value="Sales_tax">State Sales Tax</option>
       <option value="VAT">VAT</option>
                 </select></div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Tax 2</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="tax2" data-live-search="true" id="type">
        <option>None Selected</option>
       <option value="Airport_tax">Airport Tax</option>
       <option value="GST">GST</option>
       <option value="Hotel_tax">Hotel Tax</option>
       <option value="PST">PST</option>
       <option value="Sales_tax">State Sales Tax</option>
       <option value="VAT">VAT</option>
                 </select></div>
                 </div>
     
        
       
       <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Timesheet Billing List By</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="group_timesheet" data-live-search="true" id="type">
        <option value="">Task </option>
       <option>Time Entry</option>
       <option>Parent Task</option>
       
                 </select></div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Expense Billing List By</h6></label>
         <select class="selectpicker" data-show-subtext="true" name="group_expense" data-live-search="true" id="type">
        <option value="">Expense Name </option>
       <option>Expense Entry</option>
       
       
                 </select></div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Discount Calculation By</h6></label>
        <select class="selectpicker" data-show-subtext="true" name="discount_calculation" data-live-search="true" id="type">
        <option value="percentage">Percentage </option>
       <option value="fixed_amount">Fixed Amount</option>
       
                 </select></div></div>
     
        
       

       
       
                
           <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Populate Un-Billed Records</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
     </div>
     </div>
     </div>
     </div>

  <div class="panel panel-default" style="height:250px;width:100%;">
   
    <div class="panel-body" style="color:#4C8EBA "><h5><b>TIME SHEET BILLING LIST</b></h5>
     <div style="float: right;margin-top:-40px;">
   
   
    <INPUT type="button" class="btn btn-success" style="background-color:#00C084"value="Add Row" onclick="addRow('dataTable')" />

  <INPUT type="button" class="btn btn-danger" value="Delete Row" onclick="deleteRow('dataTable')" />
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
          </div></div>
                <SCRIPT language="javascript">
    function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

    function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1) {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }

  </SCRIPT>


  
   
  <table width="350px" border="1">
 <thead>
<tr>
         <th> </th>
          
            <th></th>
          <th>Project Name </th>
        <th>Task Name</th>
        <th>Description</th>
        <th>Actual<br>Rate</th>
        <th>Bill Rate</th>
        <th>Actual<br> Hours</th>
        <th>Bill Hours</th>
        <th>Tax1</th>
        <th>Tax2</th>
        <th>Total</th>
      </tr>
      </thead>
  <tbody id="dataTable">
  
    <TR>
      <td><INPUT type="checkbox" name="chk"/></td>
       <td><i class="fa fa-trash" style="color:#4C8EBA "></i></td>
        <td> <select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Risk</option>
       
                 </select></td>
        <td><select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Create UI</option>
       
                 </select></td>
        <td><textarea name="txtDescription" class="form-control input-sm" rows="1" style="width: 100%;"></textarea></td>
        <td>0.00</td>
        <td><input name="txtBillinghours" class="form-control input-sm" value="0.00" type="float" id="t2"  onkeyup="mul();"  style="width: 70px;"></td>
        <td>0</td>
        <td><input name="txtBillingRate" class="form-control input-sm" value="0.00" type="float" id="t1" onkeyup="mul();" style="width: 70px;"></td>
        <td> <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="tam"  onchange="mul();">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option id="1">GST</option>
       <option id="2">Hotel Tax</option>
       <option id="3">PST</option>
       <option id="4"> State Sales Tax</option>
       <option id="5">VAT</option>
                 </select></td>
                 <td> <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="tax"  onchange="mu();">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option id="a">GST</option>
       <option id="b">Hotel Tax</option>
       <option id="c">PST</option>
       <option id="d"> State Sales Tax</option>
       <option id="e">VAT</option>
                 </select></td>
<td><input name="txtBillingRate" class="form-control input-sm" value="0.00" type="float" id="t3" style="width: 70px;"></td>
    </TR>
    

</tbody>
</TABLE>
</div>

 
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5><b>EXPENSE BILLING LIST</b></h5>
     <div style="float: right;margin-top:-40px;">
   
   
    <INPUT type="button" class="btn btn-success" style="background-color:#00C084" value="Add Row" onclick="addRow('myTable')" />

  <INPUT type="button" class="btn btn-danger" value="Delete Row" onclick="deleteRow('myTable')" />
    </div></div>


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
         
         
   
    <SCRIPT language="javascript">
    function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

    function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1) {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }

  </SCRIPT>


  
   <div class="panel-body">
  <TABLE  width="350px" border="1">
 <thead>
<tr>
         <th> </th>
                     <th> </th>
          <th>Project Name </th>
        
        <th>Expense Name</th>
        <th>Expense Type</th>
        <th>Description</th>
        <th>Actual Amount</th>
        <th>Tax1</th>
        <th>Tax2</th>
        <th>Billed Amount</th>
      </tr>
      </thead>
  <tbody id="myTable">
  
    <TR>
      <td><INPUT type="checkbox" name="chk"/></td>
       <td><i class="fa fa-trash" style="color:#4C8EBA "></i></td>
        <td> <select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Risk</option>
       
                 </select></td>
        <td><select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Air Travel</option>
       <option>Auto Rental</option>
       <option>Car Mileage</option>
       <option>Entertainment</option>
       <option>Food</option>
       <option>Gas</option>
                 </select></td>
                 <td><select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Air Travel</option>
       <option>Auto Rental</option>
       <option>Car Mileage</option>
       <option>Entertainment</option>
       <option>Food</option>
       <option>Gas</option>
                 </select></td>
        <td><textarea name="txtDescription" class="form-control input-sm" rows="1"></textarea></td>
        <td>0</td>
        <td> <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option>GST</option>
       <option>Hotel Tax</option>
       <option>PST</option>
       <option> State Sales Tax</option>
       <option>VAT</option>
                 </select></td>
                 <td> <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option>GST</option>
       <option>Hotel Tax</option>
       <option>PST</option>
       <option> State Sales Tax</option>
       <option>VAT</option>
                 </select></td>
<td><input name="txtBillingRate" class="form-control input-sm" value="0.00" style="width: 70px;"></td>
    </TR>
   

</tbody>
</TABLE>
</div>
</div>

 
  <div class="panel panel-default"> 
  <div style="float: right;margin-top:20px;">
  <a href="invoicemanagement.php" type="button" class="btn btn-success"  style="  background-color:#00C084" > Update</a>
  <a href="invoicemanagement.php" disabled type="button" class="btn btn-success"  style=" background-color:#00C084" > Update Time Entry and Expense Entry Records As Billed</a>
  </div>
  <div style="margin-top: 100px;margin-left: 20px;width: 97%">
    <h4>Description</h4>
<textarea name="txtDescription" class="form-control input-sm" rows="4" style="width: 100%;"></textarea><br>
  </div>
  
  </div>
</div>


</div>
</div>

</form>

</body>
</html>
