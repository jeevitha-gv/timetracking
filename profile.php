<?php
require_once "header.php";
require_once "dbconnect.php";
require_once "functions.php"
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="utf-8">
    <title>Employee</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

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

/* Tab Navigation */
.nav-tabs {
    margin: 0;
    padding: 0;
    border: 0;

}
.tab-pane {
    background: #ffff;
    box-shadow: 0 0 4px rgba(0,0,0,.4);
    border-radius: 0;
    text-align:left;
    padding: 10px;
    height:5% ;
     width:65%;
     
}
.modal-content
{
    width:130%;
}

</style>
</head>
<body>
    
     <form action="" method="POST">
    <div class="col-md-12">
    <div>
<div class="container-fluid">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashboard</a></h4>
  
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h4>USER MANAGEMENT</h4></div>
    <div class="container-fluid">
  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" id="myTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>User Role</th>
        <th>Action</th>   
    </tr>
    </thead>

    <?php
    $sql = "SELECT id, fname, lname, email, user_role from signup order by id desc";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>  
   <tbody>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['user_role'];?></td>
     <td>   
    <?php echo "<a class='btn btn-danger' onclick=\"return confirm('Delete this record?')\" href=\"profile.php?id=".$row['id']."\"><span class='glyphicon glyphicon-trash'></span></a>" ?>
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
</form>
</body>
</html>
<?php
     $id=$_GET['id'];
     $sql = "DELETE FROM signup WHERE id=".$id;   
    if (mysqli_query($con, $sql)) {
       header("Location: profile.php");
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
