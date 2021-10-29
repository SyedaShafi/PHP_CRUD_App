<?php
$stu_sid = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_sclass = $_POST['sclass'];
$stu_sphone = $_POST['sphone'];

$conn = mysqli_connect("localhost:3307", "root", "root3306", "crud") or die("Connection Failed");
$sql = "UPDATE  student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_sclass}', sphone = '{$stu_sphone}' WHERE sid = '{$stu_sid}'" or die("Query Unsuccessful");
mysqli_query($conn, $sql);

header('Location: http://localhost:8080/CRUD_App/index.php');
mysqli_close($conn);
?>