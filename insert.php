<?php
$name=$_POST['n'];
$rno=$_POST['r'];
$mail=$_POST['e'];
$branch=$_POST['b'];
$year=$_POST['y'];
$chef=$_POST['c'];
$force=$_POST['f'];
$rank=$_POST['h'];
$servername="localhost";
$username="root";
$password="";
$dbname="score";
$conn = new mysqli($servername,$username,$password,$dbname);
	
$sql = "INSERT INTO  student values('$name','$rno','$mail','$branch','$year','$chef','$force','$rank')";

if ($conn->query($sql) == TRUE) {
	echo "SUCESSFULLY Registered";
}
?>