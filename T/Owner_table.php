<!DOCTYPE HTML>
<!DOCTYPE html>
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

<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

   <style>
.donate-now {
     list-style-type:none;
     margin:25px 0 0 0;
     padding:0;

}

.donate-now li {
     float:left;
     margin:0 5px 10px 0;
    width:100px;
    height:45px;
    position:relative;
}

.donate-now label, .donate-now input {
    /*display:block;*/
    position:absolute;
    top:0;
    left:1px;
    right:0;
    bottom:0;

}
 
   
.donate-now input[type="radio"] {
    opacity:0.01;
    z-index:100;
      padding: 15px;
    border-radius: 15px;
    left: 50px;
  
}

.donate-now input[type="radio"]:checked + label,
.Checked + label {
    background:#C0C0C0 ;
     border-color: #216582;
        padding: 8px;
  border-radius: 25px;
   width: 100px;
}

.donate-now label {
     padding:5px;
     border:1px solid #CCC; 
     cursor:pointer;
    z-index:100;
     border-color: #216582;
}

.donate-now label:hover {
     background:lightgray;
}

@media (max-width: 767px)
.page-container {
    margin: 0!important;
    padding: 0;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a class="navbar-brand" href="#" style="color: white">Details </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>



    <div class="col-md-12 bg-light">
      <h3></h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Data Owner</th>
      <th scope="col">Process Involved</th> 
      <th scope="col">Nature of Data</th>
      <th scope="col">Type of Data</th>
      <th scope="col">Data Subject</th>
      <th scope="col">Location in system</th>
      <th scope="col">Source of Data</th> 
      <th scope="col">Data Purpose and usages</th>
      <th scope="col">Data Storage location</th>
      <th scope="col">Data Access Location</th>
      <th scope="col">Access Control</th>
      <th scope="col">Privacy Policy</th> 
      <th scope="col">3rd Party data Process</th>
      <th scope="col">Data Transfer to Locations</th>
      <th scope="col">Data Retention</th>  
    </tr>
  </thead>
  <?php
include("db.php");//make connection here  
$sql1 = mysqli_query($conn, "SELECT * FROM nix");
 ?>
  <tbody>

    <?php

 while($row = mysqli_fetch_array($sql1))
 
 {
  echo "<tr>";
    echo "<td>" ."" ."</td>";
  echo "<td>" .""  . "</td>";
  echo "<td>". "</td>";
  echo "<td>" ."" ."</td>";
  echo "<td>" .""  . "</td>";
  echo "<td>". "</td>";
  echo "<td>". "</td>";
   echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"2\">toyota</option>;
</select>" .  "</td>";
 echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"2\">toyota</option>;
</select>" .  "</td>";
 echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"2\">toyota</option>;
</select>" .  "</td>";
  echo "<td>" ."" ."</td>";
  echo "<td>" ."" ."</td>";
  echo "<td>" ."" ."</td>";
  echo "<td>" ."" ."</td>";
  echo "<td>" ."" ."</td>";


 }
    ?>
  </tbody>
</table>
</div>
</body>
</html>


<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='For Selecting')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 