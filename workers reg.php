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

       .fm{
           background-color: lightgoldenrodyellow;
           width: 40%;
           padding: 9px;
           border-radius: 10px;
           margin-top: 10%;
          box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 1), 2px 6px 20px 0 rgba(0, 0, 0, 0.49);

       } 
    </style>
</head>
<body>
<center>
     <form method="POST" class="fm">
         <h2>worker registration</h2>
     	 worker name:<br><input type="text" name="wn"><br><br>
     	 worker phone:<br><input type="text" name="wp"><br><br>
         worker email:<br><input type="text" name="we"><br><br>
        <button type="submit" name="SAVE">save</button>
        <button><a href="workers list.php">workers list</a></button>
     </form><br><br>



 <?php
 $con=mysqli_connect('localhost','root','','construction');
  if (isset($_POST['SAVE'])) {
 	$wn=$_POST['wn'];
 	$wp=$_POST['wp'];
    $we=$_POST['we'];

$sql="INSERT INTO workers (w_id,w_name,w_phone,w_email) values('','$wn','$wp','$we')";
 $query=mysqli_query($con,$sql);
 echo " the worker has been recorded!!!";
 }
 ?>    
</center>     
</body>
</html>