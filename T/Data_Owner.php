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
	<title>HR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F9F9FC">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-default">
		<a href="" class="navbar-brand">Nix Privacy</a>
</nav>


<div class="container-fluid">
  <div class="row">
             <div class="col-md-2 bg-white">
              <p>  <button class="btn" type="button"  id="a">Purpose And Usages</button></p>
                  <p><button class="btn" type="button" id="b">Data-Retantion</button>   </p>
                 <p>  <button class="btn btn-md" type="button" id="c">Data Access Control</button></p>
                  <p><button class="btn" type="button"  id="d">Privacy Policy</button>   </p>
                   <p><button class="btn btn-md" type="button" id="e">Conduct Management</button></p>
            </div>
            <script type="text/javascript">
            	$(document).ready(function(){
            		$('#t2').hide();
            		$('#a').click(function(){
                           $('#a').css('background-color','#E8E9EC');
                           $('#b').css('background-color','white');
                           $('#c').css('background-color','white');
                           $('#d').css('background-color','white');
                           $('#e').css('background-color','white');
                           $('#t1').show();
                           $('#t2').hide();
                            
            		});
            		$('#b').click(function(){
                           $('#b').css('background-color','#E8E9EC');
                             $('#a').css('background-color','white');
                               $('#c').css('background-color','white');
                                   $('#d').css('background-color','white');
                           $('#e').css('background-color','white');
                           $('#t1').hide();
                           $('#t2').show();
            		});
            			$('#c').click(function(){	
                           $('#c').css('background-color','#E8E9EC');
                           $('#b').css('background-color','white');
                           $('#a').css('background-color','white');
                           $('#d').css('background-color','white');
                           $('#e').css('background-color','white');
                            
            		});
            				$('#d').click(function(){
                           $('#d').css('background-color','#E8E9EC');
                           $('#b').css('background-color','white');
                           $('#c').css('background-color','white');
                           $('#a').css('background-color','white');
                           $('#e').css('background-color','white');
                            
            		});
            					$('#e').click(function(){
                           $('#e').css('background-color','#E8E9EC');
                           $('#b').css('background-color','white');
                           $('#c').css('background-color','white');
                           $('#d').css('background-color','white');
                           $('#a').css('background-color','white');
                            
            		});
            	});
            	            </script>

  <div class="container">
  <div class="row">
    <div class="col-md-10 bg-white">
<table class="table table-bordered " id="t1" style="margin-left: 160px;margin-top: -200px;">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col"></th> 
      <th scope="col">Nature of Data</th>
      <th scope="col">Type of Data</th>
      <th scope="col">Action</th>
      <th scope="col">Person Responsible</th>
      <th scope="col">Target Date</th>
      <th scope="col">Other Parties Involved</th>  
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
   echo "<td>" ."<b>Personal Data:</b>"  ."&nbsp". $row['ethinicity'] . "<br>"."<br>"."<b>Special Data:</b>"  ."&nbsp". $row['identify'] . "</td>";
  echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"2\">toyota</option>;
</select>" .  "</td>";
   echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"2\">toyota</option>;
</select>" .  "</td>";
  echo "<td>" . "</td>";
  echo "<td>" ."<select name='carDropDown'>;
<option value=\"\">-select-</option>;
<option value=\"IT DEPT\">IT DEPT</option>;
</select>" ."</td>";
  


  echo "</tr>";

 }
 ?>
    <!-- /tr>
      <tr>
      <td>No Purpose or Usages</td>
      <td>Review of all proc</td>
      <td></td>
      <td>  </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
  </tbody>
</table>
   <button type="submit" class="btn btn-primary" onclick="window.location.href='data_table.php'" style="margin-top: 20px;margin-left: 150px;" name="submit"><i class="fa fa-arrow-left"></i>
Back</button>
   <button type="submit" class="btn btn-primary" onclick="window.location.href='Owner_table.php'" style="margin-top: 20px;float: right;" name="submit">Next <i class="fa fa-arrow-right"></i></button>



<!-- 
<table class="table table-bordered " id="t2">
  <thead>
    <tr>
      <th scope="col">Retention Period</th>
      <th scope="col">Process </th> 
      <th scope="col">Unknown of Data</th>
      <th scope="col">Type of Data</th>
      <th scope="col">Action</th>
      <th scope="col">Person Responsible</th>
      <th scope="col">Target Date</th>
  
    </tr>

  </thead>
 
  <tbody>
    <tr>
      <td>No Purpose or Usages</td>
      <td>Review of all</td>
      <td></td>
      <td>  </td>
      <td>
      	<div class="form-group">
        <div class="row">
        <div class="col-md-12">
            <select class="form-control" id="exampleSelectd">
              <option></option>
              <option>auditor</option>             
            </select>
    </div>
        </div>
        </div>
      </td>
      <td><div class="form-group">
        <div class="row">
        <div class="col-md-12">
          
            <select class="form-control" id="exampleSelectd">
              <option></option>
              <option>auditor</option>             
            </select>
    </div>
        </div>
        </div>
      </td>
      <td>

      	<script >
      		var d=new Date();
      		var s=d.toLocaleDateString();
      		document.write(s);
      	</script>
      </td>
      
    </tr>
      <tr>
      <td>No Purpose or Usages</td>
      <td>Review of all proc</td>
      <td></td>
      <td>  </td>
      <td></td>
      <td></td>
      <td></td>
     
    </tr>
   
  </tbody>
</table>
 -->
</div>
</div>
</div>
</div>
</div> 

</body>
</html>