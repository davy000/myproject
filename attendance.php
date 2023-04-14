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
         <h2>attendance</h2>
         worker id:<br><input type="text" name="wp"><option></option></input><br><br>
         time_in:<br><input type="text" name="ti"><br><br>
         time_out:<br><input type="text" name="to"><br><br>
         date:<br><input type="date" name="d"><br><br>
        <button type="submit" name="SAVE">save</button>
     </form><br><br>



 <?php
 $con=mysqli_connect('localhost','root','','construction');
  if (isset($_POST['SAVE'])) {
    $wn=$_POST['wn'];
    $wp=$_POST[''];
    $we=$_POST[''];

$sql="INSERT INTO workers (w_id,w_name,w_phone,w_email) values('','$wn','$wp','$we')";
 $query=mysqli_query($con,$sql);
 echo " the worker has been recorded!!!";
 }
 ?>    
</center>     
</body>
</html>