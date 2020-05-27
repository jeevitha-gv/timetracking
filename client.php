<?php
require_once "header.php";
require_once "dbconnect.php";
require_once "functions.php";
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
<div class="container-fluid">
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : Clients</h4>
  <div class="panel panel-default">
    <div class="panel-body" style="color:#4C8EBA "><h5>CLIENTS</h5>
      <div style="margin-top: -40px;margin-left: 1155px;">


<a href="#" class="btn btn-success"><span id="mymodal" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add-Client</span></a>

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
      <input type="text" class="form-control" id="usr" name="clientname" required>
    </div>
    <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
        <li><a data-toggle="tab" href="#notes">Notes</a></li>
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Nick</h6></label>
        <input class="form-control" id="ex1" type="text" name="clientnick" required>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Email Address</h6></label>
        <input class="form-control" id="ex2" type="email" name="email" required>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Website</h6></label>
        <input class="form-control" id="ex1" type="text" name="website" required>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Client Manager</h6></label>

        <input class="form-control" id="ex2" type="text" name="clientmanager" required>

      </div>
  </div>
</div>

<div id="notes" class="tab-pane fade">
  <div class="form-group">
      <label style="color: gray;" for="comment">Notes</label>
      <textarea style="width: 550px;" class="form-control" rows="5" id="comment" name="notes" required></textarea>
    </div>
</div>

<div id="advanced" class="tab-pane fade">
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Manager Name</h6></label>

        <input class="form-control" type="text" name="clientmanagername" required>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Client Manager Email</h6></label>
        <input class="form-control" type="email" name="clientmanageremail" required>

      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Manger Phone</h6></label>
        <input class="form-control" type="text" name="clientmanagerphone">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Client Manager Department</h6></label>

        <input class="form-control" type="text" name="clientmanagerdept" required>

      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Manger Role</h6></label>

        <input class="form-control" type="text" name="clientmanagerrole" required>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Comments</h6></label>
        <input class="form-control" type="text" name="comments" required>

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

          <div class="container-fluid">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Client_Nick</th>
        <th>Client_Name</th>
        <th>Email_Address</th>
        <th>Website</th>
        <th>Action</th>
      </tr>
    </thead>
<?php

    $sql = "SELECT c_id,clientname,clientnick,email,website,clientmanager FROM `client` ORDER BY c_id desc";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
        <td><?php echo $row['c_id'];?></td>
        <td><?php echo $row['clientnick'];?></td>
        <td><?php echo $row['clientname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['website'];?></td>

       <td>   
    <?php echo "<a class='btn btn-danger' onclick=\"return confirm('Delete this record?')\" href=\"client.php?c_id=".$row['c_id']."\"><span class='glyphicon glyphicon-trash'></span></a>" ?>
     </td>

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

     $c_id=$_GET['c_id'];
     $sql = "DELETE FROM client WHERE c_id=".$c_id;   
    if (mysqli_query($con, $sql)) {
       header("Location: client.php");
    } else {
       // echo "Error deleting record: " . mysqli_error($con);
    } 


?>

<script>
    $('a.delete').on('click', function() {
    var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
        return true;
    }
    return false;
});

</script>

