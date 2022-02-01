<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","mydb");
$qu=mysqli_query($con,"delete from mytbl where id=$id");
header("location:select.php");



?>