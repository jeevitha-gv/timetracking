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
/*.nav-tabs > li > a {
    background: #DADADA;
    border-radius: 0;
    box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover {
    background: #F5F5F5;
    box-shadow: inset 0 0 0 0 rgba(0,0,0,.4),-2px -3px 5px -2px rgba(0,0,0,.4);
}*/

/* Tab Content */
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
  <h4 style="color:#a3a19b;">Dashboard:Employees</h4>
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
        <option value="DefaultDepartment">DefaultDepartment</option>
        
      </select>
    </div>
    <div class="col-xs-2">
    <label style="color: black;margin-top: 5px;" for="ex2"><h6>Location</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="location">
        <option value="DefaultLocation">DefaultLocation</option>
        
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
      </select>
    </div>

  
  
  </div>
  </div>
  <div id="others" class="tab-pane fade">
<!-- <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;margin-top: 20px;"><h6>Job Title</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
        <div class="col-xs-4">
       <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Hired Date</h6></label>
       <input type="date" name="hireddate">
    </div>
    <div class="col-xs-4">
       <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Termination Date</h6></label>
       <input type="date" name="terminationdate">
    </div>
</div>

 -->






    <div class="form-group row">
        <div class="col-xs-4">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
   <!--  <div class="checkbox">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Show Employee Profile Picture</h6></label>
    <input type="checkbox" data-toggle="toggle">
    </div></div> -->
 <!-- <div class="col-xs-4">
 <div class="checkbox">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Enable Time In/Out Option</h6></label>
    <input type="checkbox" data-toggle="toggle">
</div>
    </div> -->
 <!-- <div class="col-xs-4">
 <div class="checkbox">
  <label style="color: black;margin-top: 5px;" for="ex2"><h6>Force Password Change</h6></label>
    <input type="checkbox" data-toggle="toggle">
    </div></div> -->
    <div class="form-group row">
      <!-- <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Profile Picture</h6></label>
        <input  id="ex1" type="file">
      </div> -->
<!--  <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Profile Picture Color</h6></label>
        <input type="color" id="myColor">
        <script>
function myFunction() {
  var x = document.getElementById("myColor").value;
  document.getElementById("demo").innerHTML = x;
}
</script>
      </div> -->
      <!--  <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Electronic Singnature</h6></label>
        <input  id="ex1" type="file">
      </div> -->
  </div>
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
      <p style="margin-left: 135px;margin-top: -30px;">entries</p>
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

    
// $var=$_GET['userid'];
    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
// $eno = $row['eno']; 
  
  ?>  
   <tbody>
      <tr>
        <td><input type="checkbox" name="cbox"></td>
        <td> <button type="button" class="btn btn-success" data-toggle="modal" style="background-color:#00C084">Active</button></td>
        <td><?php echo $row['employeecode'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['location'];?></td>
        <td><?php echo $row['department'];?>
        <td> <a href="employee.php?eno=<?php echo $row['eno']; ?>" title="delete"><span class="glyphicon glyphicon-trash"></a></td>    <td> <a href="projects.php?eno=<?php echo $row['eno']; ?>"><insert type="submit" class="btn btn-default">view</button></a></td>
          
        </td>

        
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


            <?php
          $var = $_GET['eno'];
    $sql = "SELECT * from employee WHERE eno=".$var;
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>  
<?php

}
  }else {
     // echo "Error:".$sql."<br>" . mysqli_error($con);
}

?>
</form>
</body>
</html>

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