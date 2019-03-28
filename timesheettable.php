<?php
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Task</title>
</head>
<style>

body {
  background-color: #ECF0F2;
}


.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -1214px;
  
  opacity: 0.1;
}

</style>
<body>

<form action="" method="post">
 
      <table class="table table-bordered" style="width:90%;margin-left: 100px;">
    <thead>
      <tr>
         
        <th>Employee Name</th>
        <th>Project Name</th>
        <th>Task Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
          <?php
          $var = $_SESSION['fname'];
    $sql = "SELECT * from timesheet WHERE employee = '$var'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
       <td style="width: 130px;"><?php echo $row['employee']; ?></td>
       <td style="width: 130px;"><?php echo $row['project_name']; ?></td>
       <td style="width: 130px;"><?php echo $row['task_name']; ?></td>
       <td style="width: 130px;"><?php echo $row['description']; ?></td>        
        <td style="width: 130px;">
          <a href="myexpense.php?task_id=<?php echo $row['task_id']; ?>" class="btn btn-success">Expense</a>
        </td>
      </tr>
    </tbody>
  <?php } } ?>

  <?php
        if($_SESSION['user_role'] == "admin")
        {
        ?>
        <?php
    $sql = "SELECT * from timesheet";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result))
{ ?>    
         <tbody>
      <tr>
        <td><?php echo $row['employee'];?></td>
        <td><?php echo $row['project_name'];?></td>
        <td><?php echo $row['task_name']; ?></td>
        <td><?php echo $row['description'];?></td>
        <td style="width: 130px;">
          <a href="myexpense.php?task_id=<?php echo $row['task_id']; ?>" class="btn btn-success">Expense</a>
        </td>
      </tr>
    </tbody>
    <?php } } else { echo "0 result";} ?>
  <?php } ?>
  </table>
</div>
    </div>
</div>
</div>
</div>
</form>
</body>
</html>