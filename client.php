<?php
require_once "header.php";
require_once "dbconnect.php";
require_once "functions.php";
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client</title>
	<style>
.hr
{
	border: 1px solid black;
	width: 1468px;
	margin-left: -1170px;
	opacity: 0.1;
}

</style>
</head>
<body>
  <?php
  if($_POST)
  {
    client();
  }
  ?>


  <form action="" method="POST">
<div class="panel-default">	
<div class="container-fluid" style="margin-left:10px;">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : Clients</h4>
  <div class="panel panel-default">
    <div class="panel-body" style="color:#4C8EBA "><h5>CLIENTS</h5>
    	<div style="margin-top: -40px;margin-left: 1155px;">

<button type="button" class="btn btn-danger" disabled="">Delete Selected</button>
<a href="#" class="btn btn-success"><span id="mymodal" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Client</a></span>
        <hr class="hr">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Client</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
      <span class="required" style="color: red;">*</span> <label for="usr" style="color: gray;">Client Name:</label>
      <input type="text" class="form-control" id="usr" name="clientname">
    </div>
    <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>

    <li><a data-toggle="tab" href="#billing">Billing</a></li>
        <li><a data-toggle="tab" href="#notes">Notes</a></li>
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
    	<div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Nick</h6></label>
        <input class="form-control" id="ex1" type="text" name="clientnick">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Email Address</h6></label>
        <input class="form-control" id="ex2" type="email" name="email">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Website</h6></label>
        <input class="form-control" id="ex1" type="text" name="website">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Default Billing Rate</h6></label>
        <input class="form-control" id="ex2" type="text" name="billingrate">
      </div>
  </div>
</div>

<div id="notes" class="tab-pane fade">
	<div class="form-group">
      <label style="color: gray;" for="comment">Notes</label>
      <textarea style="width: 550px;" class="form-control" rows="5" id="comment" name="notes"></textarea>
    </div>
</div>

<div id="billing" class="tab-pane fade">
	<div class="form-group row">
		<div class="col-xs-3">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Fixed Bid Billing Mode</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billingmode">
    	<option value="none">None</option>
       <option value = "Fixed Bid Client">Fixed Bid Client</option>
        <option value="Fixed Bid Project">Fixed Bid Project</option>
        <option value="Fixed Bid Task">Fixed Bid Task</option>
      </select>
    </div>
    <div class="col-xs-3" id="row_dim">
      <div style="margin-top:0px;">
    <label style="margin-top:5px;color: black;" for="bill"><h6>Fixed Bid Cost</h6></label></div>
 	<input type="text" class="dimension" style="margin-left:2px;margin-top:-1px;height: 38px" name="fixedbillcost">
     </div>

  </div>
</div>

</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
      	<button type="submit" name="submit" class="btn btn-success">Add client</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
    </div>


  </div>
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
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" id="pwd" name="pwd">
      </div>
          </div>
          <div style="margin-top: 60px;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
      	<th><input type="checkbox" name="cbox"></th>
        <th></th>
        <th>Client_Nick</th>
        <th>Client_Name</th>
        <th>Email_Address</th>
        <th>Website</th>
        <th>Action</th>
      </tr>
    </thead>
                           <?php

    $sql = "SELECT * from client";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>
    <tbody>
      <tr>
      	<td><input type="checkbox" name="cbox"></td>
        <td> <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084">Active</button></td>
        <td><?php echo $row['clientnick'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['website'];?></td>
        <td> <div class="btn-group" role="group" area-label="...">
        <a href="#view<?php echo $row['c_id'];?>" data-toggle="modal"><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open" area-hidden="true"></span></button></a>
        <a href="#edit<?php echo $row['c_id'];?>" data-toggle="modal"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit" area-hidden="true"></span></button></a>
        <a href="#delete<?php echo $row['c_id'];?>" data-toggle="modal"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" area-hidden="true"></span></button></a>
      </div></td>

<!-- View -->

      <div id="view<?php echo $row['c_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">
             ID : <input type="text" value="<?php echo $row['c_id'];?>" class="form-control" disabled>
              Name : <input type="text" value="<?php echo $row['clientname'];?>" class="form-control" disabled>
              Client NickName : <input type="text" value="<?php echo $row['clientnick'];?>" class="form-control" disabled>
              Email : <input type="text" value="<?php echo $row['email'];?>" class="form-control" disabled>
              Website : <input type="text" value="<?php echo $row['website'];?>" class="form-control" disabled>
              Billing Rate : <input type="text" value="<?php echo $row['billingrate'];?>" class="form-control" disabled>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Edit -->
<?php
if($_POST['edit']){
  $id  = $_POST['id'];
  $name = $_POST['name'];
  $clientnick = $_POST['clientnick'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $billingrate = $_POST['billingrate'];

$sql = "UPDATE client SET clientname = '$name',clientnick = '$clientnick',email='$email',website = '$website',billingrate = '$billingrate' WHERE c_id = ".$id;
   
   if (mysqli_query($con, $sql)) {
      header("Location: client.php");
   } else {
      // echo "Error deleting record: " . mysqli_error($con);
   }
}
?>
      <div id="edit<?php echo $row['c_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                Name : <input type="text" name="name" class="form-control" value="<?php echo $row['clientname'];?>" placeholder="Name" required>
                Client NickName : <input type="text" name="clientnick" class="form-control" value="<?php echo $row['clientnick'];?>" placeholder="Client NickName" required>
                Email : <input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="Email" required>
                Website : <input type="text" name="website" class="form-control" value="<?php echo $row['website'];?>" placeholder="Email" required>
                Billing Rate : <input type="text" name="billingrate" class="form-control" value="<?php echo $row['billingrate'];?>" placeholder="Billing Rate" required>
                <input type="submit" name="edit" class="btn btn-primary" value="Edit">
              </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Delete -->

      <div id="delete<?php echo $row['c_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                Are You Sure You Want to Delete this Client <b><?php echo $row['clientname'];?></b><br><br>
                <input type="submit" name="delete" class="btn btn-primary" value="Delete">
              </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </tr>  
<?php } } else { echo "0 results"; } ?>
</tbody>
  </table>
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

<script>
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

<?php
 if($_POST['delete']){
     $id=$_POST['id'];
     $sql = "DELETE FROM client WHERE c_id=".$id;   
    if (mysqli_query($con, $sql)) {
       header("Location: client.php");
    } else {
       // echo "Error deleting record: " . mysqli_error($con);
    } 
  }
?>