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
           width: 50%;
           padding: 9px;
           border-radius: 10px;
           margin-top: 8%;
          box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 1), 2px 6px 20px 0 rgba(0, 0, 0, 0.49);

       } 
    </style>
</head>
<body>
<center>
    <form method="post" class="fm">
    	<h2>users login.</h2>
 username:<br><input type="text" name="un" placeholder="your full name"><br><br>
 password:<br><input type="password" name="pw" placeholder=" enter your password"><br><br>
 title:<br><input type="text" name="tit" placeholder=" enter your tit"><br><br>
  <button type="submit" name="SAVE">login</button><br>you need to create an account!!! <a href="sign up.php">create it here</a>
    </form>	

 
<?php
$con=mysqli_connect('localhost','root','','construction');
if (isset($_POST['SAVE'])) {
	$un=$_POST['un'];
	$pw=$_POST['pw'];
    $tit=$_POST['tit'];

  $sel=mysqli_query($con,"SELECT * FROM users WHERE username='$un' AND password='$pw' AND title='$tit'");    

 if (mysqli_num_rows($sel)<0){
        echo "incorrect data";
    }
     else{   
   while ($row=mysqli_fetch_assoc($sel)) {
            $title=$row['title'];
          if ($title=="manager") {
            echo header("location:welcome.php");
          }
          if ($title=="supervisor") {
            echo header("location:workers reg.php");
          }

        }     
    }
    
}
    ?>

</center>
</body>
</html>