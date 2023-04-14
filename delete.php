<?php
$con=mysqli_connect('localhost','root','','xyz');
$del="DELETE FROM workers WHERE p_id = '$_GET[id]'";
$sql= mysqli_query($con,$del);
header('location:workers list.php');
?>