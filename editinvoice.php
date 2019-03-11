
<!DOCTYPE html>
<?php
require "header.php";
?>
<html lang="en"> 
<head> 
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
<body>
    <div class="col-md-12">
   
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;">Dashboard : Billing : Account Invoice Form</h4>
  <div class="panel panel-default" style="height:150px;width:100%;">
   <div style="float: right;margin-top:10px;">
   <button type="button" class="btn btn-basic"   >Back</button>
    <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal"> Re-Generate Invoice</button>
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
         <p>0.00</p></label>
      </div>
      <div class="col-xs-2">
        <label for="ex2" style="color:black;margin-top: 65px;margin-left: 40px;" ><h4> <span class="glyphicon glyphicon-plus"></span> Tax2</h4>
         <p>0.00</p></label>
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
        <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>PO Number</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Billable</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Both </option>
       <option>Billable</option>
        <option>NonBillable</option>
       
                 </select></div></div>
     <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Client Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Name</option>
       
       
                 </select></div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Project Name</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Risk</option>
       
       
                 </select></div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Parent Task</h6></label>
        <select  disabled class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       
       
                 </select></div></div>
                  <div class="form-group row">
               <div " class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Invoice Date</h6></label>
            <div class='input-group date' id='dudate'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
  <div class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Billing Cycle Start Date</h6></label>
            <div class='input-group date' id='datetime'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
          
        <div class='col-sm-4'>
            <label for="ex2" style="color: black;"><h6>Billing Cycle End Date</h6></label>
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
        <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Currency</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">AUD </option>
       <option>CAD</option>
        <option>CHF</option>
        <option>EUR</option>
        <option>GBP</option>
        <option>JPY</option>
        <option>US$</option>
                 </select>
       
       
                 </div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Tax 1</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option>GST</option>
       <option>Hotel Tax</option>
       <option>PST</option>
       <option> State Sales Tax</option>
       <option>VAT</option>
                 </select></div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Tax 2</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Select </option>
       <option>Airport Tax</option>
       <option>GST</option>
       <option>Hotel Tax</option>
       <option>PST</option>
       <option> State Sales Tax</option>
       <option>VAT</option>
                 </select></div>
                 </div>
     
        
       
       <div class="form-group row">
        <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Timesheet Billing List By</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Task </option>
       <option>Time Entry</option>
       <option>Parent Task</option>
       
                 </select></div>
      <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Group Expense Billing List By</h6></label>
         <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Expense Name </option>
       <option>Expense Entry</option>
       
       
                 </select></div>
       <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Discount Calculation By</h6></label>
        <select   class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value="">Percentage </option>
       <option>Fixed Amount</option>
       
                 </select></div></div>
     
        
       

       
       
                
           <div class="modal-footer">
            <button type="button"class="btn btn-info" data-toggle="modal" data-target="#myModal">Populate Un-Billed Records</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
     </div>
     </div>
     </div>
     </div>

  <div class="panel panel-default" style="height:250px;width:100%;">
  <div class="panel panel-default"> 
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


  
   
  <TABLE  width="350px" border="1">
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
        <td><input name="txtBillinghours" class="form-control input-sm" value="0.00" style="width: 70px;"></td>
        <td>0</td>
        <td><input name="txtBillingRate" class="form-control input-sm" value="0.00" style="width: 70px;"></td>
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

 <div class="panel panel-default" style="height:250px;width:100%;">
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
        <td><textarea name="txtDescription" class="form-control input-sm" rows="1" style="width: 100%;"></textarea></td>
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

 <div class="panel panel-default" style="height:250px;width:100%;">
  <div class="panel panel-default"> 
  <div style="float: right;margin-top:20px;">
  <a href="invoicemanagement.php" type="button" class="btn btn-default"> <i class="fa fa-print"> Print</i></a>
  <a href="invoicemanagement.php" type="button" class="btn btn-success"  style="  background-color:#00C084" > Update</a>
  <a href="invoicemanagement.php" disabled type="button" class="btn btn-success"  style=" background-color:#00C084" > Update Time Entry and Expense Entry Records As Billed</a>
  </div>
  <div style="margin-top: 100px;margin-left: 20px;width: 95%">
    <h4>Description</h4>
<textarea name="txtDescription" class="form-control input-sm" rows="4" style="width: 100%;"></textarea>
  </div>
  
  </div>
</div>


</div>
</div>



</body>
</html>


