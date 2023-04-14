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
         li{
        	
        	font-size: 20px;
        	display: inline-flex;
        	margin-left: 50px;
        	margin-right: 10px;
        	margin-top: 30px;
        	border-radius: 6px;

       }

       .nav{
        margin-top: 5px;
        margin-left: 30%;
        background-color: lightgoldenrodyellow;
        border-radius: 9px;
        padding-top: 3px;
        text-align: center;
        
       }
       .l{
        margin-left: 10px;

       }

    </style>          
</head>
<body>

    <div class="nav">
   <li class="l"><a href="?link=1">home</a></li>
   <li class="l"><a href="?link=2">users list</a></li>
   <li class="l"><a href="?link=3">employee registration</a></li>
   <li class="l"><a href="?link=4">employee list</a></li>
   <li class="l"><a href="?link=5">attendance</a></li>
   <li class="l"><a href="?link=6">search</a></li>
   <li class="l"><a href="?link=7">logout</a></li>
    </div> 

</body>
</html>


<?php
 error_reporting(0);  
  $link=$_GET['link'];
  if ($link == 1){
	require 'home.php';
}
  $link=$_GET['link'];
  if ($link == 2){
	require 'users list.php';
}
$link=$_GET['link'];
  if ($link == 3){
	require 'workers reg.php';
}
  $link=$_GET['link'];
  if ($link == 4){
	require 'workers list.php';
}
  $link=$_GET['link'];
  if ($link == 5){
	require 'attendance.php';
}
  $link=$_GET['link'];
  if ($link == 6){
  require 'search.php';
}
  $link=$_GET['link'];
  if ($link == 7){
	require 'logout.php';
}
  $link=$_GET['link'];
  if ($link == 8){
	require 'delete.php';
}
$link=$_GET['link'];
  if ($link == 9){
	require 'update.php';
}



?>		

