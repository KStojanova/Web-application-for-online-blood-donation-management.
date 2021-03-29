<?php  
 $connect = mysqli_connect("localhost", "root", "", "blood");  
 
 ?>  
    
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Е-крводарител</title>
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <!--navbar-->
      <?php
include_once "navbar.html"; 
?>
                    <div class="tabeli">
                      <div class="row">
                      <section class="col-md-6" >
                      <div class="table-responsive" > 
                       <table class="table table-striped">  
                         <tr>  
                         <th>А+</th>  
                          </tr>  
                          <?php  
                           $sql = "SELECT * FROM bloodstock";  
                           $result = mysqli_query($connect, $sql); 
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row[0]; ?></td>  
                            
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
                         </section>
                         
<section class="col-md-6" >
<div class="table-responsive" >  
<table class="table table-striped">  
  <tr>  
       <th>А-</th>  
       
  </tr>  
  <?php  

 
   $sql1 = "SELECT * FROM stocka";  
   $result1 = mysqli_query($connect, $sql1);  
  while($row = mysqli_fetch_array($result1))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div>
</section>
</div>


<div class="row">
<section class="col-md-6" >
<div class="table-responsive" >  

<table class="table table-striped">  
  <tr>  
       <th>B+</th>  
       
  </tr>  
  <?php  

 
   $sql2 = "SELECT * FROM stockbpositive";  
   $result2 = mysqli_query($connect, $sql2);  
  while($row = mysqli_fetch_array($result2))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
<section class="col-md-6" >

<div class="table-responsive" >  
<table class="table table-striped">  
  <tr>  
       <th>B-</th>  
       
  </tr>  
  <?php  

 
   $sql3 = "SELECT * FROM stockbpositive";  
   $result3 = mysqli_query($connect, $sql3);  
  while($row = mysqli_fetch_array($result3))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
</div>

<div class="row">
<section class="col-md-6" >
<div class="table-responsive" >  
<table class="table table-striped">  
  <tr>  
       <th>O+</th>  
       
  </tr>  
  <?php  

 
   $sql4 = "SELECT * FROM stockopositive";  
   $result4 = mysqli_query($connect, $sql4);  
  while($row = mysqli_fetch_array($result4))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
<section class="col-md-6" >
<div class="table-responsive" >  
<table class="table table-striped">  
  <tr>  
       <th>O-</th>  
       
  </tr>  
  <?php  

 
   $sql5 = "SELECT * FROM stockonegative";  
   $result5 = mysqli_query($connect, $sql5);  
  while($row = mysqli_fetch_array($result5))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
</div>

<div class="row">
<section class="col-md-6" >
<div class="table-responsive" >  
<table class="table table-striped">  
  <tr>  
       <th>AB+</th>  
       
  </tr>  
  <?php  

 
   $sql6 = "SELECT * FROM stockabpositive";  
   $result6 = mysqli_query($connect, $sql6);  
  while($row = mysqli_fetch_array($result6))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
<section class="col-md-6" >
<div class="table-responsive" >  
<table class="table table-striped">  

  <tr>  
       <th>AB-</th>  
       
  </tr>  
  <?php  

 
   $sql7 = "SELECT * FROM stockabnegative";  
   $result7 = mysqli_query($connect, $sql7);  
  while($row = mysqli_fetch_array($result7))  
  {  
  ?>  
  <tr>  
       <td><?php echo $row[0]; ?></td>  
    
  </tr>  
  <?php  
  }  
  ?>  
</table>  
</div> 
</section>
</div>
</div>



    <!-- Footer Area  -->
    <?php
include_once "footer.html"; 
?>





  </body>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>