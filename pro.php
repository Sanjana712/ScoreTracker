<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To Dashboard</title>
<style >
	body{
	font-size:20px; 
	font-family:'Trebuchet MS';
}
</style>

</head>
<body>
	<div align="center">
    <br>


    	<span class="head" ><font color="red">SMART SOLUTIONS</font></span>
    <br>
<br>

<fieldset style="font-size:20px;padding:40px;width:600px;line-height:1.2;border:3px solid green;border-radius:25px;">

	<?php

$con = mysqli_connect('localhost','root','');
		if(!$con)
			echo "Connection is not created";
		$sel = mysqli_select_db($con,'score');
		if(!$sel)
			echo "Database is not selected";



    $username=$_POST['username'];
    


 $qry2   = "SELECT * FROM student WHERE EMAIL='$username'";
 $ins = mysqli_query($con,$qry2);
 $row=mysqli_fetch_array($ins);

 echo "Student Detail:<br><br>";
 echo "<table border=2>
	<tr>
		<td>Name :</td>
		<td>$row[0]</td>
	</tr>
	<tr>
		<td>E-Mail :</td>
		<td>$row[2]</td>
	</tr>
	<tr>
		<td>Roll Number :</td>
		<td>$row[1]</td>
	</tr>
	<tr>
		<td>Branch :</td>
		<td>$row[3]</td>
	</tr>
	<tr>
		<td>Passing Year :</td>
		<td>$row[4]</td>
	</tr>
	
</table><br>";



$url = "https://competitive-coding-api.herokuapp.com/api/codechef/".$row['CODECHEF'];
$json = file_get_contents($url);
$json = json_decode($json);

echo "<b><u>CodeChef Details:</u></b><br><br>";
echo "<table border=0>

	<tr>
		<td>CodeChef Username :</td>
		<td>".$row['CODECHEF']."</td>
	</tr>
	<tr>
		<td>CodeChef Rating :</td>
		<td>".$json->rating."</td>
	</tr>
	<tr>
		<td>CodeChef Highest Rating :</td>
		<td>".$json->highest_rating."</td>
	</tr>
	<tr>
		<td>CodeChef Global Rank :</td>
		<td>".$json->global_rank."</td>
	</tr>
	<tr>
		<td>CodeChef Country Rank :</td>
		<td>".$json->country_rank."</td>
	</tr>
	
</table><br>";
$url1 = "https://competitive-coding-api.herokuapp.com/api/codeforces/".$row['CODEFORCE']; 
$json1 = file_get_contents($url1);
$json1 = json_decode($json1);

echo "<b><u>CodeForces Details:</u></b><br><br>";
echo "<table border=0>
	<tr>
		<td>CodeForces Username :</td>
		<td>".$row['CODEFORCE']."</td>
	</tr>
	<tr>
		<td>CodeForces Rating :</td>
		<td>".$json1->rating."</td>
	</tr>
	
	<tr>
		<td>CodeForces Rank :</td>
		<td>".$json1->rank."</td>
	</tr>
	
	</font>
</table><br><br> ";

?> 
</fieldset>

<br>
<input type="button" onClick="window.location='home.html'" value="Logout" />
</form>
</div>
</body>
</html>