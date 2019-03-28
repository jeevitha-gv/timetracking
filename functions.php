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
$user_role=$_POST['role'];


if ($_POST["password"]==$_POST["cnfpass"])
{
    $mdpassword=md5($password);

$sql="INSERT INTO `signup`(`fname`,`lname`,`C_name`,`number`,`email`,`password`,`user_role`) VALUES ('$fname','$lname','$C_name',$number,'$email','$mdpassword','$user_role')";
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
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $fax = $_POST['fax'];
    $employeemanager = $_POST['manager'];

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `employee`(`email`,`employeecode`,`firstname`,`lastname`,`password`,`role`,`department`,`location`,`address1`,`address2`,`city`,`state`,`country`,`zipcode`,`phone1`,`phone2`,`fax`,`employeemanager`) VALUES ('$email','$employeecode','$firstname','$lastname','$password','$role','$department','$location','$address1','$address2','$city','$state','$country','$zipcode','$phone1','$phone2','$fax','$employeemanager')";
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
        print_r($_POST);
    $clientname = $_POST['clientname'];
    $clientnick = $_POST['clientnick'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $clientmanager = $_POST['clientmanager'];
    $clientmanagername = $_POST['clientmanagername'];
    $clientmanageremail = $_POST['clientmanageremail'];
    $clientmanagerphone = $_POST['clientmanagerphone'];
    $clientmanagerdept = $_POST['clientmanagerdept'];
    $clientmanagerrole = $_POST['clientmanagerrole'];
    $comments = $_POST['comments'];
    $notes = $_POST['notes'];
    
    $sql="INSERT INTO `client`(`clientname`,`clientnick`,`email`,`website`,`clientmanager`,`clientmanagername`,`clientmanageremail`,`clientmanagerphone`,`clientmanagerdept`,`clientmanagerrole`,`comments`,`notes`) VALUES ('$clientname','$clientnick','$email','$website','$clientmanager','$clientmanagername','$clientmanageremail','$clientmanagerphone','$clientmanagerdept','$clientmanagerrole','$comments','$notes')";
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
        print_r($_POST);
       
    $projectname = $_POST['projectname'];
    $clientname = $_POST['clientname'];
    $projectcode = $_POST['projectcode'];
    $clientmanager = $_POST['clientmanager'];
    $projectmanager = $_POST['projectmanager'];
    $clientteam = $_POST['clientteam'];
    $timesheet_approval = $_POST['timesheet_approval'];
    $expense_approval = $_POST['expense_approval'];
    $project_description = $_POST['project_description'];
    $duration = $_POST['duration'];
    $project_status = $_POST['project_status'];
    $projecttype = $_POST['projecttype'];
    $billingratetype = $_POST['billingratetype'];
    $purchase_order = $_POST['purchase_order'];
    $account_info = $_POST['account_info'];
    $nda = $_POST['nda'];
    $msa = $_POST['msa'];
    $sow = $_POST['sow'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $teammembers = $_POST['teammembers'];
    $userrole = $_POST['userrole'];
    $billingrate = $_POST['billingrate'];
    $billingcurrency = $_POST['billingcurrency'];
    
    

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `project`(`projectname`,`clientname`,`projectcode`,`clientmanager`,`projectmanager`,`clientteam`,`timesheet_approval`,`expense_approval`,`project_description`,`duration`,`project_status`,`projecttype`,`billingratetype`,`purchase_order`,`account_info`,`nda`,`msa`,`sow`,`startdate`,`enddate`,`teammembers`,`userrole`,`billingrate`,`billingcurrency`) VALUES ('$projectname','$clientname','$projectcode','$clientmanager','$projectmanager','$clientteam','$timesheet_approval','$expense_approval','$project_description','$duration','$project_status','$projecttype','$billingratetype','$purchase_order','$account_info','$nda','$msa','$sow','$startdate','$enddate','$teammembers','$userrole','$billingrate','$billingcurrency')";
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
    $taskdetails = $_POST['taskdetails'];
    $taskstatus = $_POST['taskstatus'];
    $totalmembers = $_POST['totalmembers'];
    $members = implode(',',$totalmembers);
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `task`(`taskname`, `projectname`, `tasktype`, `priority`, `taskdetails`, `taskstatus`, `totalmembers`, `startdate`, `enddate`) VALUES ('$taskname', '$projectname', '$tasktype', '$priority', '$taskdetails', '$taskstatus','$members', '$startdate', '$enddate')";
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
    $ponumber = $_POST['ponumber'];
    $billable = $_POST['billable'];
    $clientname = $_POST['clientname'];
    $projectname = $_POST['projectname'];
    $invoicedate = $_POST['invoicedate'];
    $billing_startdate = $_POST['billing_startdate'];
    $billing_enddate = $_POST['billing_enddate'];
    $currency = $_POST['currency'];
    $tax1 = $_POST['tax1'];
    $group_timesheet = $_POST['group_timesheet'];
    $group_expense = $_POST['group_expense'];
    $discount_calculation = $_POST['discount_calculation'];

    // $date = date('Y-m-d H:i:s');
    $sql="INSERT INTO `invoice`(`ponumber`, `billable`, `clientname`, `projectname`,`invoicedate`, `billing_startdate`, `billing_enddate`, `currency`, `tax1`,`group_timesheet`, `group_expense`, `discount_calculation`) VALUES ('$ponumber','$billable','$clientname','$projectname','$invoicedate','$billing_startdate','$billing_enddate','$currency','$tax1','$group_timesheet','$group_expense','$discount_calculation')";
    if(mysqli_query($con,$sql)){
        header("Location: invoicemanagement.php");
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
        $task_id = $_POST['task_id'];
    $clientname = $_POST['clientname'];
    $projectname = $_POST['projectname'];
    $employeename = $_POST['employeename'];
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
    $sql="INSERT INTO `expense`(`task_id`,`clientname`,`projectname`,`employeename`, `expensename`, `paymentmethod`, `currency`, `expenseentrydate`,`billable`, `reimburse`, `netamount`, `taxzone`, `tax`, `amount`, `description`, `attachment`) VALUES ('$task_id','$clientname','$projectname','$employeename','$expensename','$paymentmethod','$currency','$expenseentrydate','$billable','$reimburse','$netamount','$taxzone','$tax','$amount','$description','$attachment')";
    if(mysqli_query($con,$sql)){
        header("Location: myexpense.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }

}



function timesheet(){
    GLOBAL $con;
    if (isset($_POST['save'])) {
        print_r($_POST);
        $task_id = $_POST['task_id'];
        $employee = $_POST['employee'];
        $timesheettotal = $_POST['timesheettotal'];
        $projectname = $_POST['project_name'];
        $taskname = $_POST['task_name'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $date3 = $_POST['date3'];
        $date4 = $_POST['date4'];
        $date5 = $_POST['date5'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `timesheet`(`task_id`, `employee`, `timesheettotal`, `project_name`, `task_name`, `date1`, `date2`, `date3`, `date4`, `date5`, `description`) VALUES ('$task_id','$employee','$timesheettotal','$projectname','$taskname','$date1','$date2','$date3','$date4','$date5','$description')";
        }

    if(mysqli_query($con,$sql)){
        header("Location: timesheettable.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }
    
function projectteam()
{
  GLOBAL $con;
  if (isset($_POST['add'])) {
        $pname = $_POST['pname'];
        $member = $_POST['member'];
        $userrole = $_POST['userrole'];
        $employee = $_POST['employee'];
        $client = $_POST['client'];
         $billing_rate = $_POST['billing_rate'];
         $bill_currency = $_POST['bill_currency'];

        $sql = "INSERT INTO `projectteam`(`projectname`,`totalmembers`,`userrole`,`employee`,`client`,`billing_rate`,`bill_currency`) VALUES ('$pname','$member','$userrole','$employee','$client','$billing_rate','$bill_currency')";
    if(mysqli_query($con,$sql)){
        header("Location: projects.php");
    }
    else{
        echo "Error:".$sql."<br>" . mysqli_error($con);
    }
    }  
}

function ts_approve()
{
    GLOBAL $con;
    if(isset($_POST['submit'])){
        $ts_id = $_POST['t_id'];
        $ts_employee = $_POST['ts_employee'];
        $ts_timesheettotal = $_POST['ts_timesheettotal'];
        $ts_projectname = $_POST['ts_projectname'];
        $ts_taskname = $_POST['ts_taskname'];
        $ts_date = $_POST['ts_date'];
        $ts_desc = $_POST['ts_desc'];
        $ts_status = 'Approved';

        $sql = "INSERT INTO `timesheetapproved`(`t_id`,`employee`, `timesheettotal`, `projectname`, `taskname`, `timesheetdate`, `description`,`status`) VALUES ('$ts_id','$ts_employee','$ts_timesheettotal','$ts_projectname','$ts_taskname','$ts_date','$ts_desc','$ts_status')";

        if(mysqli_query($con,$sql)){
            header("Location: approved.php");
        }
        else{
            echo "Error : ".$sql."<br>" . mysqli_error($con);
        }
    }
}


function ex_approve()
{
    GLOBAL $con;
    if(isset($_POST['submit'])){
        $ex_id = $_POST['e_id'];
        $ex_clientname = $_POST['ex_clientname'];
        $ex_projectname = $_POST['ex_projectname'];
        $ex_employeename = $_POST['ex_employeename'];
        $ex_expensename = $_POST['ex_expensename'];
        $ex_paymentmethod = $_POST['ex_paymentmethod'];
        $ex_entrydate = $_POST['ex_entrydate'];
        $ex_netamount = $_POST['ex_netamount'];
        $ex_amount = $_POST['ex_amount'];

        $sql = "INSERT INTO `expenseapproved`(`e_id`, `clientname`, `projectname`, `employeename`, `expensename`, `paymentmethod`, `expensedate`, `netamount`, `amount`) VALUES ('$ex_id','$ex_clientname','$ex_projectname','$ex_employeename','$ex_expensename','$ex_paymentmethod','$ex_entrydate','$ex_netamount','$ex_amount')";

        if(mysqli_query($con,$sql)){
            header("Location: approved.php");
        }
        else{
            echo "Error : ".$sql."<br>" . mysqli_error($con);
        }
    }
}


function final_invoice()
{
    GLOBAL $con;
    if(isset($_POST['submit'])){
        $userid = $_POST['userid'];
        $sub_total = $_POST['sub_total'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $grand_total = $_POST['grand_total'];
        $t_description = $_POST['t_description'];
        $t_bill_rate = $_POST['t_bill_rate'];
        $t_bill_hours = $_POST['t_bill_hours'];
        $t_total = $_POST['t_total'];
        $e_employeename = $_POST['e_employeename'];
        $e_expensename = $_POST['e_expensename'];
        $e_billed_amount = $_POST['e_billed_amount'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `final_invoice`(`userid`, `sub_total`, `discount`, `tax`, `grand_total`, `t_description`, `t_bill_rate`, `t_bill_hours`, `t_total`, `e_employeename`, `e_expensename`, `e_billed_amount`, `description`) VALUES ('$userid','$sub_total','$discount','$tax','$grand_total','$t_description','$t_bill_rate','$t_bill_hours','$t_total','$e_employeename','$e_expensename','$e_billed_amount','$description')";

        if(mysqli_query($con,$sql)){
            header("Location: final.php");
        }
        else{
            echo "Error : ".$sql."<br>" . mysqli_error($con);
        }
    }
}