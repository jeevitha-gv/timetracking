<?php 
require_once "header.php";
require_once "dbconnect.php";
require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>TimeSheet</title>
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
<body>

 <div >
  <h4 style="color: gray;"><a href="dashboard.php">Dashboard</a> : Timesheet</h4>
<div class="container-fluid" >
 <div class="panel panel-default">

    
    <div style="margin-top: 10px;margin-left: 10px;" class="container">
   <h4 style="color: #81AFE7;">Time Entry Period View </h4>
   <button style="background-color: #04176C;float: right;margin-right: -50px; " title="Print" type="button" class="btn"  onclick="printDiv('printableArea')" /><i class="fa fa-print" style="color: white;"></i></button>

  <button type="button" class="btn green-jungle" style="float: right;margin-right: -100px;background-color: #DF365F;" title="Export offline timesheet" onclick="exportTableToCSV('members.csv')"><i class="icon-pencil"></i> <span class="glyphicon glyphicon-save" ></span></button>

   <button type="button" class="btn green-jungle" title="Import offline timesheet" style="background-color: #3DBE99;float: right;margin-right: -150px;" type="button" onclick="window.open('import_time_entry_week.php','popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes');"><i class="fa fa-upload"></i></button>

</div>

<hr>
<div class="container">
  <div class="form-group">
    <div class="col-md-3">
      <div class="form-group row" style="margin-left: -150px;">
        <label style="color: black;"><h4>Current Time Sheet Period</h4></label><button onclick="mycal()"><i class="fa fa-calendar"></i></button>
        <div class="week-picker" id="cal" style="display: none;"></div>
        <br /> <label>Week :</label><span id="startDate" name="startdate"></span> - <span id="endDate" name="enddate"></span>
        </div>
        <!-- <div><?php
        $var=$_GET['task_id'];
    $sql = "SELECT * from task WHERE id=$var";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="text" class="form-control" name="employee" value="<?php echo $row['startdate'];?> - <?php echo $row['enddate'];?>" >
  <?php } } ?>
        </div> -->
</div>  

<?php
if (isset($_POST['save'])) {
    timesheet();
}?>

<form action="" method="POST">
      <div style="margin-left: 50px;" class="col-md-3">
        <i class="fa fa-user"></i><label style="color: black;"><h4>Employee</h4></label><br>
        <?php if($_SESSION['user_role']== "employee"){?>
        <input type="text" class="form-control" name="employee" value="<?php echo $_SESSION['fname'];?>">
      <?php } ?>
     <?php if($_SESSION['user_role'] == "project" || $_SESSION['user_role'] == "admin"){ ?>
 <?php
        $var=$_GET['task_id'];
    $sql = "SELECT * from task WHERE id=$var";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="text" class="form-control" name="employee" value="<?php echo $row['totalmembers'];?>" >
  <?php } } ?>
<?php } ?>
      </div>
     
<script>
  function mycal()
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

  <?php
     $var=$_GET['task_id'];
    $sql = "SELECT * from task WHERE id=$var";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{  ?>     
    <input type="hidden" name="task_id" class="form-control" value="<?php echo $row['id'];?>">
  <?php } } ?>  

      <div class="col-md-3" style="margin-left: 200px;">
        <i class="fa fa-plus-circle"></i><label style="color: black;"><h4>Timesheet Total</h4></label>
        <h3><input name="timesheettotal" id="timeSum" placeholder="--:--" style="border:0px;"></h3>  
      </div>

      <div style="margin-left: 80%;">
        <input type="button" value="Add Row" onclick="addRow('dataTable')"/>
        <input type="button" value="Delete Row" onclick="deleteRow('dataTable')">
      </div>

      <div class="container" style="margin-left: -190px;width: 132%;"><br>
        <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
         <th style="text-align: center;">Project</th>
         <th style="text-align: center;">Task</th>
        <th style="text-align: center;width: 150px;"><input type="text" id="textbox1" name="date1" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" id="textbox2" name="date2" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" id="textbox3" name="date3" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" id="textbox4" name="date4" /></th>
        <th style="text-align: center;width: 150px;"><input type="text" id="textbox5" name="date5" /></th>
      </tr>
    </thead>
    <tbody id="dataTable">
      <tr>
        <td><input type="checkbox"></td>
        <td style="text-align: center;">
          <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="project_name">
<?php
    $sql = "SELECT * from project";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
      <option value="<?php echo $row['projectname']; ?>"><?php echo $row['projectname']; ?></option>
<?php } } ?>
    </select></td>
    <td><select class="selectpicker" data-show-subtext="true" data-live-search="true" name="task_name">
<?php
    $sql = "SELECT * from task";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
{
  ?>
      <option value="<?php echo $row['taskname']; ?>"><?php echo $row['taskname']; ?></option>
<?php } } ?>
    </select></td>
        <td><input type="time" name="usr_time" id="time1" onclick="myFunction1()">
        <div id="id1">
          Description<br />
        <textarea></textarea></div></td>
        <td><input type="time" name="usr_time" id="time2" onclick="myFunction2()">
        <div id="id2">
          Description<br />
        <textarea></textarea></div></td>
        <td><input type="time" name="usr_time" id="time3" onclick="myFunction3()">
        <div id="id3">
          Description<br />
        <textarea></textarea></div></td>
        <td><input type="time" name="usr_time" id="time4" onclick="myFunction4()">
        <div id="id4">
          Description<br />
        <textarea></textarea></div></td>
        <td><input type="time" name="usr_time" id="time5" onclick="myFunction5()" onchange="document.getElementById('timeSum').value = timeSummation()">
        <div id="id5">
          Description<br />
        <textarea></textarea></div></td>
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
  </table>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
  <div class="panel panel-default">

    <div style="margin-left: 15px;margin-top: 10px;" class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="3" name="description"></textarea>
</div>

<div style="margin-top: 10px;margin-left: 10px;" class="container">
  <button type="submit" class="btn btn-info" name="save">Submit</button>
  <button type="reset" class="btn btn-success" name="cancel">cancel</button>
</div><br>
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
</div>
</div>
</div>
</div>
</form>
</div>
</body>
</html>

  <script>
          $("#id1").hide();
          function myFunction1() {
            var x = document.getElementById("id1");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
          }

          $("#id2").hide();
          function myFunction2() {
            var x = document.getElementById("id2");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
          }

          $("#id3").hide();
          function myFunction3() {
            var x = document.getElementById("id3");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
          }

          $("#id4").hide();
          function myFunction4() {
            var x = document.getElementById("id4");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
          }

          $("#id5").hide();
          function myFunction5() {
            var x = document.getElementById("id5");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
          }
        </script>

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
<script type="text/javascript">
      function addRow(tableID) {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);
      var colCount = table.rows[0].cells.length;
      for(var i=0; i<colCount; i++) {
        var newcell = row.insertCell(i);
        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
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
    </script>