<?php require_once "dbconnect.php";
?>

<?php
$brow=mysqli_query($con,'SELECT p.startdate,count(p.projectname) as count FROM project as p GROUP BY p.startdate');
$data=array();
foreach ($brow as $value) {
    $data[]=$value;
}
echo json_encode($data);
?>