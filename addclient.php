<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title></title>
  <style>

  

.topnav {
  /*overflow: hidden;*/
  background-color: #f1f1f1;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid #00C4D0;
}

.topnav a.active {
  border-bottom: 3px  solid #00C4D0;
}

.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -15px;margin-top: 25px;
  opacity: 0.1;
}

</style>
</head>
<body>
<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard:Clients</h4>
  <div class="panel panel-default" style="height:250px;width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5>CLIENTS</h5>
      <div class="topnav">
  <a class="active" href="#projects" style="text-decoration:none;color:grey;">Projects</a>
  <a href="#contacts" style="text-decoration:none;color:grey;">Contacts</a>
  <a href="#department" style="text-decoration:none;color: grey;">Department</a>
</div>
      <div style="margin-top: -40px;margin-left: 1200px;">
      <div style="" class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-success glyphicon glyphicon-plus dropdown-toggle">Add
        <i class="fa fa-angle-down"></i></button>
        <ul style="margin-top: 10px;" class="dropdown-menu dropdown-menu-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Add Contacts</a></li>
            <li><a href="#"><i class="fa fa-book"></i>Add Department</a></li>
        </ul>
      </div>
      <div style="margin-right: -25px;" class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-default glyphicon glyphicon-cog dropdown-toggle">Options
        <i class="fa fa-angle-down"></i></button>
        <ul style="margin-top: 10px;" class="dropdown-menu dropdown-menu-right">
            <li><a href="#"><i class="fa fa-edit"></i> Edit Client</a></li>
            <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
            
        </ul>
      </div>
    </div>
<hr class="hr">
  <p style="margin-left: 5px;color: black;">Show</p>
  <select style="width: 85px;margin-left: 50px;margin-top: -40px;" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <p style="margin-left: 135px;margin-top: -30px;color: black;">entries</p>
      <div style="margin-left: 1120px;margin-top: -40px;color: black;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" id="pwd" name="pwd">
      </div>
          </div>

          

<div class="topnav-content">
          <div id="department" style="margin-top: 60px;width: 98%;margin-left: 20px;color: black;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th></th>
        <th></th>
        <th>Client_Nick</th>
        <th>Client_Name</th>
        <th>Email_Address</th>
        <th>Country</th>
        <th>Telephone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
  </div>
</body>
</html>


<script type="text/javascript">
  $(function() {
    $('#row_dim').hide(); 
    $('#type').change(function(){
        if($('#type').val() == 'Fixed Bid Client') {
            $('#row_dim').show(); 
        } else {
            $('#row_dim').hide(); 
        } 
    });
});
</script>