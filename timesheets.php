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
  body {
  background-color: #ECF0F2;
}
.hr
{
  border: 0.5px solid black;
  width: 1465px;
  margin-left: 0px;
  opacity: 0.1;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css">
</head>
<body id="printableArea">

 <div >
<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
 
  <div class="panel panel-default" style="width:100%;">
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Search Parameter</h4>
      </div>
      <div class="modal-body">
    
    <div class="container">
  
  <div class="tab-content">

    <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Start Date</h6></label>
         <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
      </div>
    </div>
    
      <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Project</h6></label>
        <select class="selectpicker" disabled="" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">Select Project</option>
    </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Task</h6></label>
        <select class="selectpicker" disabled="" data-show-subtext="true" data-live-search="true" id="type">
      <option value="">Select Task</option>
        </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Start Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>End Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>End Time</h6></label>
         <input class="form-control" id="ex2" type="text">
      </div>
    </div>
</div>
      </div>

      <div class="modal-footer" style="margin-top: 25px;">
        <button type="button" class="btn btn-success">Start Timer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<hr class="hr">
<div class="container">
  <div class="form-group row">
      <div style="margin-left: -150px;" class="col-md-3">
        <i class="fa fa-user"></i><label for="ex1" style="color: black;"><h4>Employee</h4></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="employee">
              <?php

    $sql = "SELECT * from employee";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
      <option value="<?php echo $row['firstname']; ?>"><?php echo $row['firstname']; ?></option>
       <?php
}
  }else {
    echo "0 results";
}

?>
    </select>
      </div>
     <div class="col-md-3" style="margin-left: 50px;">
      <div class="form-group row">
        <label style="color: black;"><h4>Current Time Sheet Period</h4></label><button onclick="myFunction()" style="margin-left: 20px;"><i class="fa fa-calendar"></i></button>
        <div class="week-picker" id="cal" style="display: none;"></div>
        <br /> <label>Week :</label><span id="startDate" name="startdate"></span> - <span id="endDate" name="enddate"></span>
  </div>
</div>

      <div class="col-md-3" style="margin-left: 70px;">
        <i class="fa fa-plus-circle"></i><label for="ex1" style="color: black;"><h4>Timesheet Total</h4></label>
        <input name="timettl" id="timeSum" style="border:0px;">
                 
      </div>
      <div class="col-md-3" style="margin-left: 20px;">
        <i class="fa fa-th"></i><label for="ex1" style="color: black;"><h4>Timesheet Status</h4></label>
          <h4 style="background-color: #d8f435; width:130px;">Not Submitted</h4>

      </div>

<script>
  function myFunction()
  {
    var x=document.getElementById("cal");
    if(x.style.display=="none")
    {
      x.style.display="block";
    }
    else
    {
      x.style.display="none";
    }
  }
</script>

  </div>
</div>
</div>
</div>
</div>


  <div>
    <div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  <div class="panel panel-default" style="height:350px;width:100%;">
    <h5 style="color: #81AFE7;margin-left: 20px;"><b>TIME ENTRY WEEK VIEW</b></h5>
    <hr class="hr">
    <div style="margin-left: 10px;" class="container">
  <button data-toggle="modal" data-target="#Modal" type="button" class="btn"><i class="fa fa-plus">Add Time Item Row</i></button>
  <!-- <button data-toggle="modal" data-target="#Timeoff" type="button" class="btn"><i class="fa fa-plus">Add Time Off Row</i></button> -->
  </div>
 <?php
  if($_POST)
    {
      addtime();
    }
    ?>
  <form action="" method="POST">

          <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Timesheet</h4>
      </div>
      <div class="modal-body">
    
    <div class="container">
  
  <div class="tab-content">
    
      <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1" style="color: black;"><h6>Project Name</h6></label>
        <br>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="projectname">
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
        <label for="ex2" style="color: black;"><h6>Task Name</h6></label><br>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="taskname">
          <option></option>
              <?php

    $sql = "SELECT * from task";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>
      
      <option value="<?php echo $row['taskname']; ?>"><?php echo $row['taskname']; ?></option>
           <?php

}
  }else {
    echo "0 results";
}

?>
        </select>
      </div>
  </div>
</div>
      </div>

      <div class="modal-footer" style="margin-top: 25px;">
        <button type="submit" name="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
</div>
</form>

       <div>
      <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
         <th style="text-align: center;">Project Task</th>
        <th style="text-align: center;width: 150px;"><input type="text" name="textbox1" id="textbox1" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" name="textbox1" id="textbox2" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" name="textbox1" id="textbox3" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" name="textbox1" id="textbox4" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" name="textbox1" id="textbox5" /></th>
      </tr>
    </thead>

    <?php
      $sql = "SELECT * from addtimesheet order by id desc limit 4";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{

  
  ?>
    <tbody>
      <tr>
        <td style="text-align: center;"><a href="timesheets.php?id=<?php echo $row['id']; ?>" title="delete"><span class="glyphicon glyphicon-trash"></a></td>
        <td><?php echo $row['projectname']; ?> : <?php echo $row['taskname'];?></td>
        <td><input type="time" name="usr_time" id="time1"></td>
        <td><input type="time" name="usr_time" id="time2"></td>
        <td><input type="time" name="usr_time" id="time3"></td>
        <td><input type="time" name="usr_time" id="time4"></td>
        <td><input type="time" name="usr_time" id="time5" onchange="document.getElementById('timeSum').value = timeSummation()"></td>
      </tr>  
    </tbody>
<script type="text/javascript">
function timeSummation() {
  var t1 = document.getElementById('time1').value.split(':');
  var t2 = document.getElementById('time2').value.split(':');
  var t3 = document.getElementById('time3').value.split(':');
  var t4 = document.getElementById('time4').value.split(':');
  var t5 = document.getElementById('time5').value.split(':');
  var mins = Number(t1[1])+Number(t2[1])+Number(t3[1])+Number(t4[1])+Number(t5[1]);
  var hrs = Math.floor(parseInt(mins / 60));
  hrs = Number(t1[0])+Number(t2[0])+Number(t3[0])+Number(t4[0])+Number(t5[0])+hrs;
  mins = mins % 60;
  return hrs+':'+mins;
}
</script>
    <?php } } else { echo "0 results"; } ?>

  </table>
  
</div>

<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:-21px;margin-top: 180px;">
  <div class="panel panel-default" style="width:100%;">

    <div style="margin-left: 15px;margin-top: 10px; ;width: 98%" class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="3" name="comment"></textarea>
</div>

<div style="margin-top: 10px;margin-left: 10px;" class="container">
<button type="button" class="btn btn-success"><i class="fa fa-pencil">Save</i></button>
  <button type="button" class="btn btn-info" name="submit" onclick="timesheet();">Submit</button>
</div>
<div style="margin-top: -35px;margin-left: 840px;" class="container">
<button style="width: 90px;height: 40px;" type="button" class="btn"  onclick="printDiv('printableArea')" /><i class="fa fa-print">Print</i></button>
  <button type="button" class="btn green-jungle" onclick="exportTableToCSV('members.csv')"><i class="icon-pencil"></i> <span class="glyphicon glyphicon-save" > Export Offline Timesheet</span></button>



    <script type="text/javascript">
    function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        csv.push(row.join(","));        
    }
    downloadCSV(csv.join("\n"), filename);
}
</script>
<script type="text/javascript">
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;
    csvFile = new Blob([csv], {type: "text/csv"});
    downloadLink = document.createElement("a");
    downloadLink.download = filename;
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
}
</script>
  <!--<button style="width: 250px;height: 40px;" type="button" class="btn"><i class="fa fa-upload">Import Offline Timesheet</i></button>

   <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="attachment">
</div>

</div>
</div>

<div style="margin-top: -150px;margin-left: 40px;" class="container">
  <div class='col-sm-2'>
          <label  for="ex2" style="color: black;margin-left: -50px;"><h6>Copy from</h6></label>
            <div style="margin-top:-40px;margin-left: 50px;width: 150px;" >
                    <input type='date' class="form-control" />
                    
                </div>
          </div>

  <button style="width: 150px;height: 40px;margin-left: 90px;" type="button" class="btn"><i class="fa fa-copy">Cpoy Timesheet</i></button>
  <button style="width: 150px;height: 40px;margin-left: 10px;" type="button" class="btn"><i class="fa fa-newspaper-o">Copy Activities</i></button>
</div>

 <div class="container" style="margin-top: 20px;margin-left: 10px;">
  <button type="button" class="btn">Status Legend</button>
  <button type="button" class="btn btn-warning">Not Submitted</button>
  <button type="button" class="btn btn-primary">Submitted</button>
  <button type="button" class="btn btn-success">Approved</button>
  <button type="button" class="btn btn-danger">Rejected</button>
  
</div> -->


</div>
</div>
    </div>



  </div>
  </div>
</div>

</div>
</form>
</div>
</body>
<?php
$id=$_GET['id'];
$sql = "DELETE FROM addtimesheet WHERE id=$id";
if(mysqli_query($con,$sql))
{
  header("Location:timesheets.php");
}
else
{
  // echo "Error deleting record:" .mysqli_error($con);s
}
?>
</html>


<script type="text/javascript">
$(function() {
    var startDate;
    var endDate;
    
    var selectCurrentWeek = function() {
        window.setTimeout(function () {
            $('.week-picker').find('.ui-datepicker-current-day a').addClass('ui-state-active')
        }, 1);
    }
    
    $('.week-picker').datepicker( {
        showOtherMonths: true,
        selectOtherMonths: true,
        onSelect: function(dateText, inst) { 
            var date = $(this).datepicker('getDate');
            startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
            endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);
            var dd = startDate.getDate();
            var mm = startDate.getMonth();
            var mm= mm + 1;
            var yyyy = startDate.getFullYear();
            if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

startDate = mm + '/' + dd + '/' + yyyy;
var dd6 = endDate.getDate();
            var mm6 = endDate.getMonth();
            var mm6= mm6 + 1;
            var yyyy6 = endDate.getFullYear();
            if (dd6 < 10) {
  dd6 = '0' + dd6;
}

if (mm6 < 10) {
  mm6 = '0' + mm6;
}

endDate = mm6 + '/' + dd6 + '/' + yyyy6;




var nwdate1 =  new Date(startDate);
nwdate1.setDate(nwdate1.getDate()+1);
var dd1 = nwdate1.getDate();
            var mm1 = nwdate1.getMonth();
            var mm1= mm1 + 1;
            var yyyy1 = nwdate1.getFullYear();
            if (dd1 < 10) {
  dd1 = '0' + dd1;
}

if (mm1 < 10) {
  mm1 = '0' + mm1;
}

nwdate1 = mm1 + '/' + dd1 + '/' + yyyy1;
var nwdate2 =  new Date(nwdate1);
nwdate2.setDate(nwdate2.getDate()+1);
var dd2 = nwdate2.getDate();
            var mm2 = nwdate2.getMonth();
            var mm2= mm2 + 1;
            var yyyy2 = nwdate2.getFullYear();
            if (dd2 < 10) {
  dd2 = '0' + dd2;
}

if (mm2 < 10) {
  mm2 = '0' + mm2;
}

nwdate2 = mm2 + '/' + dd2 + '/' + yyyy2;
var nwdate3 =  new Date(nwdate2);
nwdate3.setDate(nwdate3.getDate()+1);
var dd3 = nwdate3.getDate();
            var mm3 = nwdate3.getMonth();
            var mm3= mm3 + 1;
            var yyyy3 = nwdate3.getFullYear();
            if (dd3 < 10) {
  dd3 = '0' + dd3;
}

if (mm3 < 10) {
  mm3 = '0' + mm3;
}
nwdate3 = mm3 + '/' + dd3 + '/' + yyyy3;
var nwdate4 =  new Date(nwdate3);
nwdate4.setDate(nwdate4.getDate()+1);
var dd4 = nwdate4.getDate();
            var mm4 = nwdate4.getMonth();
            var mm4= mm4 + 1;
            var yyyy4 = nwdate4.getFullYear();
            if (dd4 < 10) {
  dd4 = '0' + dd4;
}

if (mm4 < 10) {
  mm4 = '0' + mm4;
}
nwdate4 = mm4 + '/' + dd4 + '/' + yyyy4;
var nwdate5 =  new Date(nwdate4);
nwdate5.setDate(nwdate5.getDate()+1);
var dd5 = nwdate5.getDate();
            var mm5 = nwdate5.getMonth();
            var mm5= mm5 + 1;
            var yyyy5 = nwdate5.getFullYear();
            if (dd5 < 10) {
  dd5 = '0' + dd5;
}

if (mm5 < 10) {
  mm5 = '0' + mm5;
}
nwdate5 = mm5 + '/' + dd5 + '/' + yyyy5;

document.getElementById("startDate").innerHTML =startDate;
document.getElementById("endDate").innerHTML =endDate;

textbox1.value = nwdate1;
textbox2.value = nwdate2;
textbox3.value = nwdate3;
textbox4.value = nwdate4;
textbox5.value = nwdate5;


            
            console.log(nwdate1);
            console.log(nwdate2);
            var dateFormat = inst.settings.dateFormat || $.datepicker._defaults.dateFormat;
            $('#startDate').text($.datepicker.formatDate( dateFormat, startDate, inst.settings ));
            $('#endDate').text($.datepicker.formatDate( dateFormat, endDate, inst.settings ));
            
            selectCurrentWeek();
        },
        beforeShowDay: function(date) {
            var cssClass = '';
            if(date >= startDate && date <= endDate)
                cssClass = 'ui-datepicker-current-day';
            return [true, cssClass];
        },
        onChangeMonthYear: function(year, month, inst) {
            selectCurrentWeek();
        }
    });
    
    $('.week-picker .ui-datepicker-calendar tr').live('mousemove', function() { $(this).find('td a').addClass('ui-state-hover'); });
    $('.week-picker .ui-datepicker-calendar tr').live('mouseleave', function() { $(this).find('td a').removeClass('ui-state-hover'); });
});
</script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

