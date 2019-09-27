<!DOCTYPE HTML>

<html>
<head>
	<style>
th
	{
	color: #fff;background-color: #285F90;
	}

tr:nth-child(odd) {background-color: #C3D3EB;}

</style>

<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: D7E0E2;">
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a class="navbar-brand" href="#" style="color: white">Nix Privacy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<center>
<?php

include("db.php");//make connection here  
$sql1 = mysqli_query($conn, "SELECT * FROM nix");
// $sql1 = mysqli_query($conn, "SELECT * FROM internal");
// $sql1 = mysqli_query($conn, "SELECT * FROM historical");
// $sql1 = mysqli_query($conn, "SELECT * FROM financial");
// $sql1 = mysqli_query($conn, "SELECT * FROM social");

?>
<table class="table table-bordered " style="width: 80%">
 <tr>
 <th style="text-align: center;">Data Owner</th>
 <th style="text-align: center;">Process</th>
 <th style="text-align: center;">Data</th>
 </tr>";
 <?php

 while($row = mysqli_fetch_array($sql1))
 {
 	echo "<tr>";
 	echo "<td>" . $row['owner'] . "</td>";
 	echo "<td>" . $row['process'] . "</td>";
 	echo "<td>"."<b>Personal Data:</b>"  ."&nbsp". $row['ethinicity'] . "<br>"."<br>"."<b>Special Data:</b>"  ."&nbsp". $row['identify'] . "</td>";

 	echo "</tr>";

 }
 ?>
 </table>
   <button type="submit" class="btn btn-primary" onclick="window.location.href='Data_Owner.php'" style="margin-top: 20px;" name="submit">Next <i class="fa fa-arrow-right"></i></button>

</center>
</body>
</html>

