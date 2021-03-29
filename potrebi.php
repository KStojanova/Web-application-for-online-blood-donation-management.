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
<div class="container-fluid main-content">
   <?php
$con = mysqli_connect('localhost','root','','blood');

// Check connection
if(mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM baranja");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>Крвна група</th>
<th>Дата</th>
<th>Количина</th>
<th>Локација</th>
<th>Телефон</th>
<th>Забелешка</th>  

</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['krvna_grupa'] . "</td>";
echo "<td>" . $row['data'] . "</td>";
echo "<td>" . $row['kolicina'] . "</td>";
echo "<td>" . $row['lokacija'] . "</td>";
echo "<td>" . $row['telefon'] . "</td>";
echo "<td>" . $row['zabeleska'] . "</td>";

echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($con);
?>
</div>
       <!-- Footer Area  -->
       <?php
        include_once "footer.html";
       ?>


  </body>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/javascript.js"></script>
</body>
</html>