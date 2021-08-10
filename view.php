<?php 
$server="localhost";
$username="root";
$password="";
$db="score";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("connection to this database failed due to " .mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>view</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<style>
        body{
            background-color: white;
        }

    </style>
</head>

<body>
 

	<div class="container">
        <h2 class="text-center pt-4">Student Details</h2>
        <div><center>
            <table border=2 width="90%" cellpadding="13">
            <thead>
            <tr>
                <th class="text-center">Name</th>
				<th class="text-center">Roll No</th>
                <th class="text-center">EMAIL</th>
                <th class="text-center">Branch</th>
				<th class="text-center">Passout Year</th>
				<th class="text-center">Codechef</th>
				<th class="text-center">Codeforce</th>
				<th class="text-center">Hacker rank</th>
            </tr>
        </thead>
        <tbody>
        <?php
           
            $sql ='select * from student';
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['NAME']; ?></td>
			<td class="py-2"><?php echo $rows['ROLL NO']; ?></td>
            <td class="py-2"><?php echo $rows['EMAIL']; ?></td>
            <td class="py-2"><?php echo $rows['BRANCH']; ?></td>
			<td class="py-2"><?php echo $rows['PASSOUT']; ?></td>
			<td class="py-2"><?php echo $rows['CODECHEF']; ?></td>
			<td class="py-2"><?php echo $rows['CODEFORCE']; ?></td>
			<td class="py-2"><?php echo $rows['HACKER RANK']; ?></td>
            </tr>                
        <?php
            }
        ?>
        </tbody>
            </table></center>
        </div><br><br>
		<form method="post" action="email.html">
		<input type="submit" value="get Ranks" style="width: 100px; height:50px; font-size:20px; background-color:mistyrose;">
		</form>
		</div>
		</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>