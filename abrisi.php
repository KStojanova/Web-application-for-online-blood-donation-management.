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
      <div class="navbar navbar-default navbar-static-top">
		<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                </div>

				<div class="navbar-collapse collapse">

					<ul class="nav navbar-nav">
                    <!--<a href="index.php" class="navbar-brand"><img src="img/logo.png"></a>  !-->

                    <!--<li><a href="index.html">Почетна</a></li> -->
                    <li><a href="abrisi.php">Бриши донори</a></li>
                    <li><a href="dodaj.php">Додај донори</a></li>
                    <li><a href="abaranja.php">Уреди  ја листата на барања за крв</a></li>
                    <li>
                        <a href="logout.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-log-out"></span> Одјави се</a>
               
                                                   
                                               </li>  
                                               </ul>
                    
                    </div>
                    </div>
                    </div>

<?php
$con = mysqli_connect('localhost','root','','blood');

// Check connection
if(mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM krvodaritel");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>ID_крводарител</th>
<th>Име</th>
<th>Презиме</th>
<th>Емаил</th>
<th>Град</th>
<th>Телефон</th>
<th>Тежина</th>
<th>Висина</th>
<th>Пол</th>
<th>ID група</th>
<th>Избриши</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['id_krvodaritel'] . "</td>";
echo "<td>" . $row['ime'] . "</td>";
echo "<td>" . $row['prezime'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['grad'] . "</td>";
echo "<td>" . $row['telefon'] . "</td>";
echo "<td>" . $row['tezina'] . "</td>";
echo "<td>" . $row['visina'] . "</td>";
echo "<td>" . $row['pol'] . "</td>";
echo "<td>" . $row['id_grupa'] . "</td>";
echo "<td><a href=\"delete.php?id_krvodaritel=".$row['id_krvodaritel']."\">Избриши</a> </td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($con);
?>
</body>
 <!-- Footer Area  -->
 <?php
 include_once "footer.html"
 ?>








<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>