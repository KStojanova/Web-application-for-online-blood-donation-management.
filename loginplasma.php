<?php
session_start();
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
  <title>E-крводарител</title>
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <!--navbar-->
      <?php
    include_once "navbar.html";
    ?>
<!-- Main Content Area
  ================== -->
  <div class="container container-main">
    <!-- BreadCrumbs 
    =========== -->
    <ol class="breadcrumb">
      <li><a href="index.html">Почетна</a></li>
      <li class="active">Логирај се</li>
      <li><a href="registration.html">Регистрирај се </a></li>
    </ol>
    <!-- BreadCrumbs End
    =========== -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
            <h1 style="text-align:center;">Логирај се </h1>
        <form style="width:40%; margin:0 auto;" action="" method="post">
          <div class="form-group">
            <label for="emailId">Email адреса</label>
            <input type="email" class="form-control" name="email" placeholder="Внеси емаил">
          </div>
          <div class="form-group">
            <label for="password1">Лозинка</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success">Логирај се</button>
        </form>
          
      </div>
    </div>
    </div>
    


    <?php

$db = mysqli_connect('localhost', 'root', '', 'blood');
   if (mysqli_connect_errno()) {
    echo "Грешка: Не може да се воспостави конекција со базата.";
    exit;
 }
   if(isset($_POST['email']) && isset($_POST['password'])) {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $query_a=$db->query("SELECT * FROM krvodaritel WHERE email ='$email'");
      if( mysqli_num_rows($query_a) >0){
      $adata=mysqli_fetch_array($query_a);
      
         if(password_verify($password, $adata['password'])){
         {
           ?>
          <script language="javascript" type="text/javascript">
          alert("Успешно се логиравте.");
          window.location.href='home.php';
          </script>
          <?php
          $_SESSION["id_krvodaritel"] = $adata['id_krvodaritel'];
          $_SESSION["ime"] = $adata['ime'];
         //   header("location:plasma.php");
         }
      }
      else {
         ?>
             <script language="javascript" type="text/javascript">
               alert("Грешна емаил адреса или лозинка");
                  window.location.href='login.php';
                  </script>
            <?php
      }
   }
      $query_u=$db->query("SELECT id_krvodaritel, password FROM krvodaritel WHERE email='$email'");
      if( mysqli_num_rows($query_u)==0){
         ?>
             <script language="javascript" type="text/javascript">
               alert("Емаил адресата не постои. Ве молиме регистрирајте се.");
                  window.location.href='http://localhost/diplomska/registration.html';
                  </script>
            <?php
      }

   }
?>
    


    

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


