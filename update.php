<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<center>	

<?php
$con=mysqli_connect('localhost','root','','construction');
$sel="SELECT *FROM workers where workers = '$_GET[id]'";
$sql=mysqli_query($con,$sel);

     while ($fetch=mysqli_fetch_assoc($sql)){

?>
    <form method="post">
    <h3>update workers</h3>
    <input type="text" name="w_id" value="<?php echo $fetch['w_id']?>" readonly>
    <input type="text" name="w_name" value="<?php echo $fetch['w_name']?>">
    <input type="text" name="w_phone" value="<?php echo $fetch['w_phone']?>">
    <input type="date" name="date" value="<?php echo $fetch['date']?>">
    <button type="submit" name="up">update</button>
    </form>
    
<?php
}
if (isset($_POST['up'])) {

	$wid= $_POST['w_id'];
	$wn= $_POST['w_name'];
      $wp= $_POST['w_phone'];
      $wd= $_POST['date'];

	$up="UPDATE workers SET w_name = '$wn',w_phone = '$wp' WHERE w_id = '$_GET[id]'";
	$sql=mysqli_query($con,$up);
	header("location:workers list.php");
}
?>
</center>
</body>
</html>