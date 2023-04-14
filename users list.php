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
        margin-top: 5%;
       }




    </style>
</head>
<body>
<center>    
    <h2>users list.</h2>
<table border="1" width="750" height="150">
    <tr>
    <th>Userid</th>
    <th>Username</th>
    <th>Phone no</th>
    <th>title</th>
    </tr>


<?php
$con=mysqli_connect('localhost','root','','construction');
$sel="SELECT *FROM users";
$query=mysqli_query($con,$sel);
  while ($fetch=mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>".$fetch['userid']."</td>";
    echo "<td>".$fetch['username']."</td>";
    echo "<td>".$fetch['phone']."</td>";
    echo "<td>".$fetch['title']."</td>";
    echo "</tr>";
    
}
?>
</table>
</center>
</body>
</html>