<?php

function signup(){
GLOBAL $con;
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$C_name=$_POST['C_name'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnfpass=$_POST['cnfpass'];


if ($_POST["password"]==$_POST["cnfpass"])
{
    $mdpassword=md5($password);

$sql="INSERT INTO `signup`(`fname`,`lname`,`C_name`,`number`,`email`,`password`) VALUES ('$fname','$lname','$C_name',$number,'$email','$mdpassword')";
if(mysqli_query($con,$sql)){

        header("Location: index.php");
    
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }


}
else
{
    echo "<script>alert('password and confirm password not matching');location.href='signup.php'</script>";
}
}
}


function employee(){
GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $email = $_POST['email'];
    $employeecode = $_POST['employeecode'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $vpassword = $_POST['vpassword'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $location = $_POST['location'];
    $worktype = $_POST['worktype'];
    $billingtype = $_POST['billingtype'];
    $employeerate = $_POST['employeerate'];
    $employee_currency = $_POST['employee_currency'];
    $billing_currency = $_POST['billing_currency'];
     $billingrate = $_POST['billingrate'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `employee`(`email`,`employeecode`,`firstname`,`lastname`,`password`,`role`,`department`,`location`,`worktype`,`billingtype`,`employeerate`,`employee_currency`,`billing_currency`,`billingrate`,`startdate`,`enddate`) VALUES ('$email','$employeecode','$firstname','$lastname','$password','$role','$department','$location','$worktype','$billingtype','$employeerate','$employee_currency','$billing_currency','$billingrate','$startdate','$enddate')";
    if(mysqli_query($con,$sql)){
        header("Location: employee.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}

function client(){
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $clientname = $_POST['clientname'];
    $clientnick = $_POST['clientnick'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $billingrate = $_POST['billingrate'];
    $notes = $_POST['notes'];
    $billingmode = $_POST['billingmode'];
    $fixedbillcost = $_POST['fixedbillcost'];
    
    

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `client`(`clientname`,`clientnick`,`email`,`website`,`billingrate`,`notes`,`billingmode`,`fixedbillcost`) VALUES ('$clientname','$clientnick','$email','$website','$billingrate','$notes','$billingmode','$fixedbillcost')";
    if(mysqli_query($con,$sql)){
        header("Location: client.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}

function project(){
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
       
    $projectname = $_POST['projectname'];
    $clientname = $_POST['clientname'];
    $projectcode = $_POST['projectcode'];
    $teamlead = $_POST['teamlead'];
    $projectmanager = $_POST['projectmanager'];
    $timesheet_approval = $_POST['timesheet_approval'];
    $expense_approval = $_POST['expense_approval'];
    $billing_rate = $_POST['billing_rate'];
    $billing_type = $_POST['billing_type'];
    $billing_ratetype = $_POST['billing_ratetype'];
    $fixedcost = $_POST['fixedcost'];
    $project_description = $_POST['project_description'];
    $duration = $_POST['duration'];
    $project_estimatecost = $_POST['project_estimatecost'];
    $project_status = $_POST['project_status'];
    $projecttype = $_POST['projecttype'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $project_template = $_POST['project_template'];
    $attachment = $_POST['attachment'];
    
    

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `project`(`projectname`,`clientname`,`projectcode`,`teamlead`,`projectmanager`,`timesheet_approval`,`expense_approval`,`billing_rate`,`billing_type`,`billing_ratetype`,`fixedcost`,`project_description`,`duration`,`project_estimatecost`,`project_status`,`projecttype`,`startdate`,`enddate`,`attachment`) VALUES ('$projectname','$clientname','$projectcode','$teamlead','$projectmanager','$timesheet_approval','$expense_approval','$billing_rate','$billing_type','$billing_ratetype','$fixedcost','$project_description','$duration','$project_estimatecost','$project_status','$projecttype','$startdate','$enddate','$attachment')";
    if(mysqli_query($con,$sql)){
        header("Location: projects.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}

function task(){
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $taskname = $_POST['taskname'];
    $projectname = $_POST['projectname'];
    $tasktype = $_POST['tasktype'];
    $priority = $_POST['priority'];
    $taskcode = $_POST['taskcode'];
    $taskstatus = $_POST['taskstatus'];
    $developerstask = $_POST['developerstask'];
    $allprojecttask = $_POST['allprojecttask'];
    $totalmembers = $_POST['totalmembers'];
    $startdate = $_POST['startdate'];
    $duedate = $_POST['duedate'];
    $worktype = $_POST['worktype'];
    $billingdate = $_POST['billingdate'];
    $developerscurrency = $_POST['developerscurrency'];
    $billingratecurrency = $_POST['billingratecurrency'];
    $billable = $_POST['billable'];
    $billingenddate = $_POST['billingenddate'];
    $developersrate = $_POST['developersrate'];
    $billingrate = $_POST['billingrate'];

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `task`(`taskname`, `projectname`, `tasktype`, `priority`, `taskcode`, `taskstatus`, `developerstask`, `allprojecttask`, `totalmembers`, `startdate`, `duedate`, `worktype`, `billingdate`, `developerscurrency`, `billingratecurrency`, `billable`, `billingenddate`, `developersrate`, `billingrate`) VALUES ('$taskname', '$projectname', '$tasktype', '$priority', '$taskcode', '$taskstatus', '$developerstask', '$allprojecttask', '$totalmembers', '$startdate', '$duedate', '$worktype', '$billingdate', '$developerscurrency', '$billingratecurrency', '$billable', '$billingenddate', '$developersrate', '$billingrate')";
    if(mysqli_query($con,$sql)){
        header("Location: mytasks.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}


function invoice(){
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $invoiceno = $_POST['invoiceno'];
    $ponumber = $_POST['ponumber'];
    $billable = $_POST['billable'];
    $clientname = $_POST['clientname'];
    $projectname = $_POST['projectname'];
    $parenttask = $_POST['parenttask'];
    $invoicedate = $_POST['invoicedate'];
    $billing_startdate = $_POST['billing_startdate'];
    $billing_enddate = $_POST['billing_enddate'];
    $currency = $_POST['currency'];
    $tax1 = $_POST['tax1'];
    $tax2 = $_POST['tax2'];
    $group_timesheet = $_POST['group_timesheet'];
    $group_expense = $_POST['group_expense'];
    $discount_calculation = $_POST['discount_calculation'];

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `invoice`(`invoiceno`,`ponumber`, `billable`, `clientname`, `projectname`,`parenttask`, `invoicedate`, `billing_startdate`, `billing_enddate`, `currency`, `tax1`, `tax2`, `group_timesheet`, `group_expense`, `discount_calculation`) VALUES ('$invoiceno','$ponumber','$billable','$clientname','$projectname','$parenttask','$invoicedate','$billing_startdate','$billing_enddate','$currency','$tax1','$tax2','$group_timesheet','$group_expense','$discount_calculation')";
    if(mysqli_query($con,$sql)){
        header("Location: invoiceform.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }
}


function expense(){
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $projectname = $_POST['projectname'];
    $expensename = $_POST['expensename'];
    $paymentmethod = $_POST['paymentmethod'];
    $currency = $_POST['currency'];
    $expenseentrydate = $_POST['expenseentrydate'];
    $billable = $_POST['billable'];
    $reimburse = $_POST['reimburse'];
    $netamount = $_POST['netamount'];
    $taxzone = $_POST['taxzone'];
    $tax = $_POST['tax'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $attachment = $_POST['attachment'];
    

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `expense`(`projectname`, `expensename`, `paymentmethod`, `currency`, `expenseentrydate`,`billable`, `reimburse`, `netamount`, `taxzone`, `tax`, `amount`, `description`, `attachment`) VALUES ('$projectname','$expensename','$paymentmethod','$currency','$expenseentrydate','$billable','$reimburse','$netamount','$taxzone','$tax','$amount','$description','$attachment')";
    if(mysqli_query($con,$sql)){
        header("Location: addexpense.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}

function addtime()
{
    GLOBAL $con;
    if(isset($_POST['submit'])){
        // print_r($_POST);
    $projectname = $_POST['projectname'];
    $taskname = $_POST['taskname'];
$sql="INSERT INTO `addtimesheet`(`projectname`,`taskname`) VALUES ('$projectname','$taskname')";

if(mysqli_query($con,$sql))
{
    header("Location: timesheets.php");
}
else
{
    echo "Error:".$sql."<br>" . mysqli_error($con);
}
  
}
}


function timesheet(){
    GLOBAL $con;
    if (isset($_POST['submit'])) {
        $employee = $_POST['employee'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $timettl = $_POST['timettl'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO `timesheet`(`employee`, `startdate`, `enddate`, `timettl`, `comment`) VALUES ($employee,$startdate,$enddate,$timettl,$comment)";
    if(mysqli_query($con,$sql)){
        header("Location: timesheets.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }
    
}