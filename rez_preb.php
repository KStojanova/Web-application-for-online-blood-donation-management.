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
     
<?php
include_once "navbar.html";   
//$ime = $_POST['ime'];
  //  $prezime = $_POST['prezime'];
   // $email = $_POST['email'];
    //$telefon=$_POST['telefon'];
    $grad=$_POST['grad'];
    $krvna_grupa=$_POST['krvna_grupa'];
    //$password = ($_POST['password']);
    //$hash = password_hash($password, PASSWORD_BCRYPT);
    
    $db = mysqli_connect('localhost', 'root', '', 'blood');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  mysqli_set_charset($db,'utf8');
  $query= "select * from krvodaritel_grupa where grad='$grad' AND tip_grupa='$krvna_grupa'";
  mysqli_set_charset($db,'utf8');
  $result = mysqli_query($db, $query);
//$result = $db->query($query);
$num_results = $result->num_rows;
 ?>
 <div class="container-fluid main-content">
    <h3><?php

      echo "Број на пронајдени резултати:     ".$num_results;
      echo"<br>";
      echo"<br>";
      echo "<table border='1'>
      <tr>
      <th>Име</th>
      <th>Презиме</th>
      <th>Е-маил</th>
      <th>Телефон</th>
      <th>Град</th>
      <th>Крвна група</th>

      </tr>";
      while($row = mysqli_fetch_array($result)){ 
          echo "<tr><td>" . $row['ime'] . "</td><td>" . $row['prezime'] . "</td><td>".$row['email']."</td><td>".$row['telefon']."</td><td>".$row['grad']."</td><td>".$row['tip_grupa']. "</td></tr>";  //$row['index'] the index here is a field name

      }
      echo "</table>";

        
      ?>
    </h3>
</div>
  <!-- Footer Area  -->
  <?php
  include_once "footer.html";
  ?>

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>