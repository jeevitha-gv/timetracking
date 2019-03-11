
<!DOCTYPE html>
<?php 
include "header.php";
include "dbconnect.php";
include "functions.php";
session_start();
ob_start();
?>
<html>
<head>
  <title></title>
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
  mytimeoff();
}
?>
<form action="" method="post">

<div class="panel-default"> 
<div class="container" style="width:100%;margin-left:10px;">
  <h4 style="color: gray;">Dashboard:My Time Off</h4>
  <div class="panel panel-default" style="overflow: auto;width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5><b>TIME OFF REQUEST LIST</b> </h5>
      <div style="margin-top: -40px;margin-left: 1155px;">


<a href="#" class="btn btn-success" id="mymodal" data-toggle="modal" data-target="#myModal"  style="background-color:#00C084">
          <i class="fa fa-plus"></i>
          Add Time Off Request 
        </a>
        <hr class="hr">

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;"> Add Time Off Request </h4>
      </div>
      <div class="modal-body">
       
    <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <!-- <li><a data-toggle="tab" href="#attach">Attachments</a></li> -->
    
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Time Off Type</h6></label>
       <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type" name="timeofftype" 
       >
        <option value="Other">Other</option>
        <option value="Personal_Leave">Personal Leave</option>
        <option value="Training">Training</option>
        <option value="Vacation">Vacation</option>
      </select>
      </div>
      </div>
      <div class="form-group row">
      <div  class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6>Begin Date</h6></label>
                    <input type='date' class="form-control" name="begindate">
          </div>
  <div class='col-sm-2'>
            <label for="ex2" style="color: black;"><h6> End Date</h6></label>
                    <input type='date' class="form-control" name="enddate">
          </div>
          <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datepicker();
            });
            $(function () {
                $('#duedate').datepicker();
            });
 </script>
      
  </div>
  <div class="form-group row">
      <div class="col-xs-2">
        <label style="color: black;"><h6>Days Off</h6></label>
        <input class="form-control" type="text" name="daysoff">
      </div>
      <div class="col-xs-2">
        <label style="color: black;"><h6>Hours Off</h6></label>
        <input class="form-control" type="text" name="hoursoff">
      </div>
  </div>
 <div class="form-group row">
  <div class="col-xs-2">
   <label style="color: black;"><h6>Description</h6></label>
   <textarea rows="4" name="description"></textarea>
  </div>
 </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script> -->
<div id="attach" class="tab-pane fade">
      <div class="form-group row">
     <input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
<img src="choosefile.png" id="upfile1" style="cursor:pointer;width:40%;height:50%;" />
</div>
  </div>
  
  
  
 
</div>




</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
        <button type="submit" class="btn btn-success" name="submit" style="background-color:#00C084"> Add Time Off Request </button>
        <button type="button" class="btn btn-basic" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
    </div>


 
  <p style="margin-left: 5px;">Show</p>
  <select style="width: 85px;margin-left: 50px;margin-top: -40px;" class="form-control" id="sel1">
        <option value="1">10</option>
        <option value="2">20</option>
        <option value="3">30</option>
        <option value="4">40</option>
        <option value="5">50</option>
      </select>
      <p style="margin-left: 135px;margin-top: -30px;">entries</p>
      <div style="margin-left: 1150px;margin-top: -40px;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" id="pwd" name="pwd">
      </div>
          </div>
          
          <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Time Off Type</th>
        <th>Description</th>
        <th>Hours Off</th>
        <th>Date Off</th>
        <th>Begin Date</th>
        <th>End Date</th>
        <!-- <th>Status</th>
        <th style="width: 150px;"></th> -->
      </tr>
    </thead>
    <?php
    $sql = "SELECT * from timeoff";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
    <tbody>
      <tr>
        <td><?php echo $row['timeofftype']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['hoursoff']; ?></td>
        <td><?php echo $row['daysoff']; ?></td>
        <td><?php echo $row['begindate']; ?></td>
        <td><?php echo $row['enddate']; ?></td>
      </tr>
    </tbody>
    <?php }  }else { echo "0 results"; } ?>
  </table>
</div>



<!-- <ul id="pagination" style="margin-top: -5px;margin-left: 1250px;" class="pagination">
    <li class="page-item"><a class="page-link" href="#"> < </a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="projects.php">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#"> > </a></li>
  </ul> -->
  </div>
</div>
</div>

<!-- <div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  
  <div class="panel panel-default" style="height:130px;width:40%;">
    <div class="panel-body" style="color:#4C8EBA "><h5><b>TIME OFF STATUS</b> </h5>
     </div>
    
 
         
          <div style="width: 90%;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
         <th>
          Time Off Type
         </th>
        <th>Earned</th>
        <th>Consumed</th>
        <th>Available</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      

        
      </tr>
      
    </tbody>
  </table>
</div></div>
<!-- <ul id="pagination" style="margin-top: -5px;margin-left: 1250px;" class="pagination">
    <li class="page-item"><a class="page-link" href="#"> < </a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="projects.php">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#"> > </a></li>
  </ul> -->


  </div>
</div> -->
</div>
</div>
</div>

</form>

</body>
</html>


<script type="text/javascript">
  $(function() {
    $('#row_dim').hide(); 
    $('#fixedbidbillingmode').change(function(){
        if($('#fixedbidbillingmode').val() == 'Fixed Bid Client') {
            $('#row_dim').show(); 
        } else {
            $('#row_dim').hide(); 
        } 
    });
});
</script>

<script type="text/javascript">
  $(function() {
    $(selector).pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'light-theme'
    });
});
</script>
<script >
  $(document).ready(function(e) {
        $(".showonhover").click(function(){
      $("#selectfile").trigger('click');
    });
    });


var input = document.querySelector('input[type=file]'); // see Example 4

input.onchange = function () {
  var file = input.files[0];

  drawOnCanvas(file);   // see Example 6
  displayAsImage(file); // see Example 7
};

function drawOnCanvas(file) {
  var reader = new FileReader();

  reader.onload = function (e) {
    var dataURL = e.target.result,
        c = document.querySelector('canvas'), // see Example 4
        ctx = c.getContext('2d'),
        img = new Image();

    img.onload = function() {
      c.width = img.width;
      c.height = img.height;
      ctx.drawImage(img, 0, 0);
    };

    img.src = dataURL;
  };

  reader.readAsDataURL(file);
}

function displayAsImage(file) {
  var imgURL = URL.createObjectURL(file),
      img = document.createElement('img');

  img.onload = function() {
    URL.revokeObjectURL(imgURL);
  };

  img.src = imgURL;
  document.body.appendChild(img);
}

$("#upfile1").click(function () {
    $("#file1").trigger('click');
});
$("#upfile2").click(function () {
    $("#file2").trigger('click');
});
$("#upfile3").click(function () {
    $("#file3").trigger('click');
});
</script>




