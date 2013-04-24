<?php 
$con=mysql_connect('localhost','root','861120');
  if (!$con) {
  	echo "failed";
  }else{

  	echo "success";
  }
  mysql_select_db('NJGJCX');
  $x=$_REQUEST['x'];
  $y=$_REQUEST['y'];
  $busNo=$_REQUEST['busNo'];
  $busXNo=$_REQUEST['busXNo'];
  $upHour=$_REQUEST['upHour'];
  $upMin=$_REQUEST['upMin'];
  $downHour=$_REQUEST['downHour'];
  $downMin=$_REQUEST['downMin'];

  mysql_query("insert into gps_test (x,y) values ($x,$y)");

 ?>