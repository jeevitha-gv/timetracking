<!DOCTYPE html>
<?php
include "header.php";
include "dbconnect.php";
include "functions.php";
?>
<html>
<head>
  <title>DashBoard</title>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body> 

<div class="container" style="margin-left:-15px;margin-top:-37px;width:110%;">
  <div class="well"><a href="dashboard.php"><h4>Dashboard</h4></a></div>
</div>
<div class="container">

  <div class="panel panel-default" style="width: 50%; margin-left: -50px;"> 
   
    <div class="panel-body"> 
        <div id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>

  </div>  
  <div class="panel panel-default" style="width: 50%; float: right;margin-top: -40%; "> 
    <div class="panel-body">
        <div id="chart2" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
    </div>

  </div>

</div>

<div class="container">
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-12" style="border: 1px solid grey;margin-left: -50px;">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase" style="color: grey;"><h2>My Open TimeSheet Periods</h2></span><hr>   
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Timesheet Period</th>
                          <th>Project Name</th>
                          <th>Task Name</th>
                          <th>Hours</th>
                        </tr>
                      </thead>
                      <?php
                        $sql = "SELECT * from timesheet order by t_id desc limit 5";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result))
                          { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['date1'];?> - <?php echo $row['date5'];?></td>
                          <td><?php echo $row['project_name'];?></td>
                          <td><?php echo $row['task_name'];?></td>
                          <td><?php echo $row['timesheettotal'];?></td>
                        </tr>
                      </tbody>
                      <?php } } else { echo "0 results"; } ?>
                    </table>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12" style="border: 0.2px solid grey; margin-left: 50px;">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase" style="color: grey;"><h2>My Completed TimeSheet</h2></span><hr>         
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Project Name</th>
                          <th>StartDate - EndDate</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php
                        $sql = "SELECT * from timesheetapproved order by ta_id desc limit 5";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result))
                          {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['projectname'];?></td>
                          <td><?php echo $row['timesheetdate'];?></td>
                          <td><?php echo $row['status'];?></td>
                        </tr>
                      </tbody>
                      <?php } } else { echo "0 results"; } ?>
                    </table>                  
                  </div>
                </div>                
              </div>
            </div>
          </div><br>





          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-12" style="border: 1px solid grey; margin-left: -50px;">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase" style="color: grey;"><h2>My Task List</h2></span><hr>   
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Priority</th>  
                        </tr>
                      </thead>
                      <?php
                        $sql = "SELECT * from task order by id desc limit 5";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          while($row = mysqli_fetch_array($result))
                        {
                      ?>
                      <tbody>
                        <tr>
                           <td><?php echo $row['taskname'];?></td>
                          <td><?php echo $row['taskstatus'];?></td>
                          <td><?php echo $row['priority'];?></td>
                        </tr>
                      </tbody>
                      <?php } } else { echo "0 results"; } ?>
                    </table>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12" style="border: 1px solid grey;margin-left: 50px;">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase" style="color: grey;"><h2>My Project List</h2></span><hr>         
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php
                        $sql = "SELECT * from project order by p_id desc limit 5";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result))
                          {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['projectname'];?></td>
                          <td><?php echo $row['project_status'];?></td>
                        </tr>
                      </tbody>
                      <?php } } else { echo "0 results"; } ?>
                    </table>                  
                  </div>
                </div>                
              </div>
            </div>
          </div><br>


</body>


 <script>
  $(document).ready(function() {
            $.ajax({
            dataType: "json",
            url: "dashboardmanager1.php",
            data: "",
            success: project
          });
        });
  
function project(data){
  var chartData=new Array();
  var seriesData=new Array();
  console.log(chartData);
  for(i=0;i<data.length;i++)
  {
chartData.push({"name":data[i].startdate,"y":parseInt(data[i].count)});
  }
 console.log(chartData);
Highcharts.chart('chart1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Timesheet Hours'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: ''
    },
    yAxis: {
        title: {
            text: 'Projects'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: ''
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span><br/>'
    },

    "series": [
        {
            name: "name",
            colorByPoint: true,
            data: chartData,
        }
    ]
});
}

 </script>

<script>
  $(document).ready(function() {
            $.ajax({
            dataType: "json",
            url: "dashboardmanager.php",
            data: "",
            success: expense
          });
        });
function expense(data)
{
  var chartData=new Array();
  console.log(chartData);
  for(i=0;i<data.length;i++)
  {
chartData.push({"name":data[i].expensename,"y":parseInt(data[i].amount)});
  }
  // console.log(chartData);
Highcharts.chart('chart2', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Expense Summary'
    },
    subtitle: {
        text: 'Total expense Amount'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: false,
                format: '{point.name}: {point.y}'
            }
        }
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">Expense Name: {point.name}</span><br/><span>Amount:{point.y:.2f}</span>'
    },
    "series": [
        {
            name: 'name',
            colorByPoint: true,
            data: chartData,
        }
    ]
          
});
}
 </script>

</html>