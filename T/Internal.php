<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
  <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
  <style type="text/css">
    a:hover
    {
      text-decoration-line: none;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a class="navbar-brand" href="#" style="color: white">Internal </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="d-flex justify-content-center"><h3>What is the type of personal data you hold</h3></div>

<form action="Internal.php" method="POST">
<div class="container-fluid">
  <div class="row">
     <div class="container">
<button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data </a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social </a></button>


</div>

  <div class="container bg-light ">
  <div class="row">
              <!-- <div class="col-md-12"> -->
                <div class="container-fluid">
                 
                    <div id="demo-accordion-collapse" role="tablist">
                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Knowledge and Belief
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information about  what a person know or believes
</h3>
<div class="col-md-4 ">
<select class="selectpicker" name="knowledge[]" multiple="multiple" multiple data-live-search="true">

   <option value="Religious beliefs">Religious beliefs</option>
    <option value="Philosophical beliefs">Philosophical beliefs</option>
     <option value="Thought">Thought </option>
      <option value="What they know and  don't know">What they know and  don't know</option>
       <option value="What someone thinks">What someone thinks</option>
 </select>  
</div>
     </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab1" id="accord2">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-2" role="button" aria-expanded="false" aria-controls="collapse-pane-2">
Authenticating
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information used to  authenticate an individual  with  something they show</h3>
              <div class="col-md-4 ">
<select class="selectpicker" name="authenticating[]" multiple="multiple" multiple data-live-search="true">
         <option value="Password">Password</option>
        <option value="PIN">PIN</option>
        <option value="Mother's maiden name">Mother's maiden name </option>
     </select>
</div>
         </div>      
      </div>

  </div>
  </div>


  <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-3" role="button" aria-expanded="false" aria-controls="collapse-pane-3">
         Prefrence
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3"  class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about  and individual's  prefrences  or  interests</h3>
              <div class="col-md-4">
    <select class="selectpicker" name="prefrence[]" multiple="multiple"  multiple data-live-search="true">

    <option value="Intentions">Intentions</option>
     <option value="Interests">Interests </option>
      <option value="Favorite foods">Favorite foods</option>
       <option value="Colors">Colors</option>
        <option value="Likes">Likes </option>
      <option value="Dislikes">Dislikes</option>
       <option value="Music">Music </option>   
 </select>
</div>             
               </div>        
       
   </div>

  </div>

</div>

  <button type="submit" class="btn btn-success" style="margin-top: 20px;" name="submit">Next</button>
</div>
<!-- </div> -->
</div>
</div>

</div>
</div> 
</form>
<br>
<br>
</body>
</html>

<?php

include ("db.php");//make connection here  

if(isset($_POST['submit']))  
{
  $knowledge=$_POST['knowledge'];
  $e=implode(",",$knowledge);
  $authenticating=$_POST['authenticating'];
  $f=implode(",",$authenticating);
  $prefrence=$_POST['prefrence'];
  $g=implode(",",$prefrence);

  $sql= "INSERT INTO internal(knowledge , authenticating, preference) VALUES ('$e', '$f', '$g')";
  if(mysqli_query($conn,$sql))
  {

        echo "<script>alert('Go to History Data')</script>";  

        echo "<script>window.open('historical.php','_self')</script>";    }  

}


?>