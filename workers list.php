<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<style type="text/css">
       
       body{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background-color: lightgoldenrodyellow;
        }

       h2{
        margin-top: 8%;
       }




    </style>
</head>
<body>
<center>	
	<h2>worker's information</h2>
<table border="1" width="750" height="250">
	<tr>	
	<th>w_id</th>
	<th>w_name</th>
	<th>w_phone</th>
	<th>emails</th>
	<th colspan="2">action</th>
    </tr>


<?php
$con=mysqli_connect('localhost','root','','construction');
$sel="SELECT *FROM workers";
$query=mysqli_query($con,$sel);
  while ($fetch=mysqli_fetch_assoc($query)){
    echo "<tr>";
	echo "<td>".$fetch['w_id']."</td>";
	echo "<td>".$fetch['w_name']."</td>";
	echo "<td>".$fetch['w_phone']."</td>";
	echo "<td>".$fetch['w_email']."</td>";
	echo "<td><button><a href='delete.php?id=$fetch[w_id]'>delete</a></button></td>";
  echo "<td><button><a href='update.php?id=$fetch[w_id]'>update</a></button></td>";;
	echo "</tr>";
	
}
?>
</table>

</center>
</body>
</html>