<?php require_once "dbconnect.php";
?>

<?php
$brow=mysqli_query($con,'SELECT `expensename`, `amount` FROM `expense`');
$data=array();
foreach ($brow as $value) {
    $data[]=$value;
}
echo json_encode($data);
?>