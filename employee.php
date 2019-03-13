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
    <?php
  if($_POST)
  {
    employee();
  }
  ?>  
      
    <form action="" method="POST">
    <div class="col-md-12">
    <div>
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color:#a3a19b;"><a href="dashboard.php">Dashboard</a> : Employees</h4>
  <div class="panel panel-default" style="height:250px;width:100%;">
  <div class="panel panel-default"> 
    <div class="panel-body" style="color:#4C8EBA "><h5>Employees</h5></div>
     <div style="margin-top: -50px; margin-left: 200px;">
        <!-- <button  data-toggle="tooltip" title="Edit Employee" class="btn btn-info btn-lg" >
         <i class="fa fa-edit"></i>
     </button>
<button data-toggle="tooltip" title="View Employee" class="btn btn-default btn-lg">
     <i class="fa fa-user"></i>
 </button>
 <a href="#" data-toggle="tooltip" title="Projects" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-folder-close"></span>
        </a>
        <button data-toggle="tooltip" title="Tasks" class="btn btn-info btn-lg">
            <i class='fa fa-copy'></i>
        </button>
         <button data-toggle="tooltip" title="Email Preferences" class="btn btn-success btn-lg">
            <i class='fa fa-envelope-open'></i>
        </button>
         <button  data-toggle="tooltip" title="Time Off" class="btn btn-primary btn-lg">
           <i style='font-size:24px' class='fa fa-calendar-alt'>&#xf073;</i>
        </button>
         <button data-toggle="tooltip" title="Rate History" class="btn btn-basic btn-lg">
           <i style='font-size:24px' class='fa fa-calculator'></i>
        </button>
          <button  data-toggle="tooltip" title="Delete" class="btn btn-danger btn-lg">
           <i style='font-size:24px' class='fa fa-trash'></i>
        </button> -->
 </div>
   <div style="float: right;margin-top: -50px;">
    <button type="button" class="btn btn-danger" style="background-color:#F79DA5">Delete Selected</button>
    <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add Employee</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Employee</h4>
        </div>

        <div class="modal-body">
       <div class="form-group" style="width: 85%">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
        <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <!-- <li><a data-toggle="tab" href="#details">Details</a></li> -->
       <li><a data-toggle="tab" href="#billing">Billing</a></li>
        <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
         <!-- <li><a data-toggle="tab" href="#others">Others</a></li> -->
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
        <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Employeecode</h6></label>
        <input class="form-control" id="ex1" type="text" name="employeecode">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Firstname</h6></label>
        <input class="form-control" id="ex2" type="text" name="firstname">
      </div>
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Middlename</h6></label>
        <input class="form-control" id="ex3" type="text" name="middlename">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Lastname</h6></label>
        <input class="form-control" id="lname" type="text" name="lastname">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>Password</h6></label>
        <input class="form-control" id="pwd" type="password" name="password">
      </div>
      <div class="col-xs-4">
        <label for="ex2" style="color: black;"><h6>VerifyPassword</h6></label>
        <input class="form-control" id="vpwd" type="password" name="vpassword">
      </div>
  </div>

 <div class="form-group row">
        <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Role</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="role">
        <option value="1">Administor</option>
        <option>User</option>
      </select>
    </div>
    <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Department</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="department">
        <option>Default Department</option>
        <option value="Engineer">Engineer</option>
        <option value="Sales">Sales</option>
        <option value="Front-end">Front-End Developer</option>
        <option value="Back-end">Back-End Developer</option>
        <option value="Full-Stack">Full-Stack Developer</option>
        <option value="Admin">Admin</option>
        
      </select>
    </div>
    <div class="col-xs-2">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Location</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="location">
        <option>Default Location</option>
        <option value="Delhi">Delhi</option>
        <option value="Chennai">Chennai</option>
        <option value="Banglore">Banglore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Manali">Manali</option>
        <option value="Assam">Assam</option>
        <option value="Jammu">Jammu</option>
        
      </select>
    </div>
   
</div>
  </div>


<div id="billing" class="tab-pane fade">
    <div class="form-group row">
        <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>WorkType</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="worktype">
        <option value="Standard">Standard </option>
        <option value="Premium">Premium</option>
      </select>
    </div>
      <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>BillingType</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billingtype">
        <option value="Hourly">Hourly </option>
        <option value="Premium">Premium </option>
             </select>
    </div>
 <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>EmployeeRate</h6></label>
        <input class="form-control" id="ex2" type="text" name="employeerate">
      </div>
     <!--  <div class="form-group row"> -->
        <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>  Employee rate Currency</h6></label>
        <select style="margin-left: 20px;" class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="employee_currency">
        <option style="margin-left: 20px;" value="AUD">AUD </option>
       <option value="CAD">CAD</option>
        <option value="CHF">CHF</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="JPY">JPY</option>
        <option value="US$">US$</option>
      </select>
    </div>
      <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>BillingRate Currency</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="billing_currency">
        <option value="AUD">AUD </option>
       <option value="CAD">CAD</option>
        <option value="CHF">CHF</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="JPY">JPY</option>
        <option value="US$">US$</option>
                 </select>
    </div>
 <div class="col-xs-4">
        <label for="ex2" style="color:black;margin-top: 5px;" ><h6>BillingRate</h6></label>
        <input class="form-control" id="ex2" type="text" name="billingrate">
      </div>
      <div class="col-xs-4">
       <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Billing Rate Start Date</h6></label>
       <input type="date" name="startdate">
    </div>
    <div class="col-xs-4">
       <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Billing Rate End Date</h6></label>
       <input type="date" name="enddate">
    </div>

</div>
  </div>
  <div id="advanced" class="tab-pane fade">
      <div class="form-group row">
 

    <div class="col-xs-4">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Employee Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="manager">
          <option></option>
          <option value="Manager">Manager</option>
          <option value="User">User</option>
      </select>
    </div>
    <div class="col-xs-4" style="margin-left: 150px;">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="manager">
          <option></option>
          <?php
    $sql = "SELECT * from project";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{ ?>
          <option value="<?php echo $row['projectname'];?>"><?php echo $row['projectname'];?></option>
<?php } } else { echo "0 results"; } ?>
      </select>
    </div>
  
  
  </div>
  </div>
</div></div>

      <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Employee</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
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
      <p style="margin-left: 135px;margin-top: -30px;">Entries</p>
      <div style="margin-left: 1150px;margin-top: -40px;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" id="myInput" onkeyup="myFunction()"  class="form-control" data-live-search="true" id="pwd" name="pwd">
        <!-- <input type="text" placeholder="Search for names.." title="Type in a name"> -->
      </div>
          </div>
          </div>
             <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      
    
      <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" id="myTable">
    <thead>
      <tr>
         <th><input type="checkbox" name="cbox"></th>
         <th></th>
        <th>Code</th>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Department</th>
        <th>Action</th>
        
      </tr>
    </thead>
<?php
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>  
   <tbody>
      <tr>
        <td><input type="checkbox" name="cbox"></td>
        <td> <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084">Active</button></td>
        <td><?php echo $row['employeecode'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['location'];?></td>
        <td><?php echo $row['department'];?></td>
        <td><div class="btn-group" role="group" area-label="...">
        <a href="#view<?php echo $row['eno'];?>" data-toggle="modal"><button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open" area-hidden="true"></span></button></a>
        <a href="#edit<?php echo $row['eno'];?>" data-toggle="modal"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit" area-hidden="true"></span></button></a>
        <a href="#delete<?php echo $row['eno'];?>" data-toggle="modal"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" area-hidden="true"></span></button></a>
      </div></td>
       
<!-- View -->

      <div id="view<?php echo $row['eno'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">
              Employee Code : <input type="text" value="<?php echo $row['employeecode'];?>" class="form-control" disabled>
              Name : <input type="text" value="<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>" class="form-control" disabled>
              Email : <input type="text" value="<?php echo $row['email'];?>" class="form-control" disabled>
              Role : <input type="text" value="<?php echo $row['role'];?>" class="form-control" disabled>
              Department : <input type="text" value="<?php echo $row['department'];?>" class="form-control" disabled>
              location : <input type="text" value="<?php echo $row['location'];?>" class="form-control" disabled>
              Work Type : <input type="text" value="<?php echo $row['worktype'];?>" class="form-control" disabled>
              Employee Rating : <input type="text" value="<?php echo $row['employeerate'];?>" class="form-control" disabled>
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
  $id = $_POST['eno'];
  $employeecode  = $_POST['employeecode'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $department = $_POST['department'];
  $location = $_POST['location'];

$sql = "UPDATE employee SET employeecode = '$employeecode',email = '$email',role = '$role',department='$department',location = '$location' WHERE eno = ".$id;
   
   if (mysqli_query($con, $sql)) {
      header("Location: project.php");
   } else {
      // echo "Error deleting record: " . mysqli_error($con);
   }
}
?>
      <div id="edit<?php echo $row['eno'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <input type="hidden" name="eno" class="form-control" value="<?php echo $row['eno'];?>">
                Employee Code : <input type="text" name="employeecode" class="form-control" value="<?php echo $row['employeecode'];?>" placeholder="Employee Code" required>
                Email : <input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="Email" required>
                Role : <input type="text" name="role" class="form-control" value="<?php echo $row['role'];?>" placeholder="Role" required>
                Department : <input type="text" name="department" class="form-control" value="<?php echo $row['department'];?>" placeholder="Department" required>
                Location : <input type="text" name="location" class="form-control" value="<?php echo $row['location'];?>" placeholder="Location" required>
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

      <div id="delete<?php echo $row['eno'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <input type="hidden" name="eno" value="<?php echo $row['eno'];?>">
               Are You Sure You Want to Delete this Employee <b><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></b><br><br>
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
</form>
</body>
</html>

<?php
$eno=$_POST['eno'];
$sql = "DELETE FROM employee WHERE eno=". $eno;
if(mysqli_query($con,$sql))
{
  header("Location:employee.php");
}
else
{
  // echo "Error deleting record:" .mysqli_error($con);
}
?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>