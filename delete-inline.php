<?php
$stu_id = $_GET['id'];

$conn = mysqli_connect("localhost:3307", "root", "root3306", "crud") or die("Connection Failed");
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
mysqli_query($conn, $sql) or die("Query unsuccessful"); // it will retuen an associative array 

header("Location: http://localhost:8080/CRUD_App/index.php");  
mysqli_close($conn);
?>