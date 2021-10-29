<?php
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost:3307", "root", "root3306", "crud") or die("Connection Failed");
$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");// it will retuen an associative array 

header("Location: http://localhost:8080/CRUD_App/index.php");

mysqli_close($conn);
?>
