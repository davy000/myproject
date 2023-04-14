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
        <h2>create account</h2>
    Username:<br><input type="text" name="uname" placeholder="your fullname"><br><br>
    phone:<br><input type="text" name="phone" placeholder="phone number"><br><br>
    U_password:<br><input type="password" name="pword1" placeholder="create password"><br><br>
    confirm password:<br><input type="password" name="pword2" placeholder="re-enter password"><br><br>
    U_title:<br><input type="text" name="tit" placeholder="enter title"><br><br>
    <button type="submit" name="SAVE">create</button><br>
    if you already have an account:<a href="login.php">login</a>
    </form>

<?php
$con=mysqli_connect('localhost','root','','construction');
if (isset($_POST['SAVE'])) {

    $un=$_POST['uname'];
    $up=$_POST['phone'];
    $pw1=$_POST['pword1'];
    $pw2=$_POST['pword2'];
    $Ut=$_POST['tit'];
 
  if ($pw1!=$pw2) {
      echo "password doesn't match";
  }
  else{
    $sql="INSERT INTO users(Userid,Username,phone,password,title) values('','$un','$up','$pw1','$Ut')";

    $query=mysqli_query($con,$sql);
   echo $un." your account has been created";
  }
}
?>

</center>
</body>
</html>