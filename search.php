<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			padding: 0;
		    margin: 0;
		}
		form{
			padding-top: 10%;
		}
		input{
			width: 19%;
			border-radius: 3px;
			border-style: 1px solid;
			background-color: lightgoldenrodyellow;
		}
		button{
			width: 10%;

		}
	</style>
</head>
<body><center>
    <form method="post" action="">
     <input type="text" name="search" placeholder="search here"><br>
     <button type="submit" name="btn">search</button>
     	
    </form>

<?php
$con=mysqli_connect("localhost","root","","construction");
if (isset($_POST['btn'])) {
	
$search=$_POST['search'];
if (empty($search)) {
	echo "no search word detected";
}
else{
	$result=mysqli_query($con,"SELECT * FROM workers WHERE w_name LIKE '%$search%' OR w_phone LIKE '%$search%' OR w_email LIKE '%$search%'");
  if (mysqli_num_rows($result)==0) {
  	echo "no search result corresponds to".$search;
  }	
  else{
  	 echo "<table border='1'>
  	 <tr>
  	 <th>w_id</th><th>w_name</th><th>w_phone</th><th>w_email</th>
  	 </tr>";
  	$x=1;
   while ($row=mysqli_fetch_assoc($result)) {

   	 echo "<tr>";
   	     echo "<td>".$x."</td>";
   	     echo "<td>".$row['w_id']."</td>";
   	     echo "<td>".$row['w_name']."</td>";
   	     echo "<td>".$row['w_phone']."</td>";
   	     echo "<td>".$row['w_email']."</td>";
   	 echo "</tr>";
  $x++;
    
      }
    echo "</table>";
   }

  }
}
?>
</center>
</body>
</html>