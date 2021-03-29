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
  <title>Е крводарител</title>
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

                    <li><a href="index.html">Почетна</a></li>
                        <li><a href="why.php">Зошто да станеш донор?</a></li>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Дарување крв
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="registration2.php">Стани донор</a></li>
                                <li><a href="request.php">Пребарувај крв</a></li>
                                <li><a href="search.php">Преглед низ банка за крв</a></li>
                                <li><a href="potrebi.php">Преглед на потреби за крв</a></li>

                                </ul>
                            </li>
                        </ul> 
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Корисни информации
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="login.php">Процес на дарување крв</a></li>
                                <li><a href="request.php">Крвни групи</a></li>
                                <li><a href="search.php">Ваши прашања</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li><a href="contact.php">Контакт</a></li>
                        <li>
                                    <a href="registration.html"  data-target="#SignUpModal" >
                                        <span class="glyphicon glyphicon-user"></span> Регистрација
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php"  data-target="#LoginModal">
                                        <span class="glyphicon glyphicon-log-in"></span> Логирај се
                                    </a>
                                </li>   
                                
                        
                        </ul>
                    
                        </div>
                        </div>
                        </div>

<!-- Main Content Area
  ================== -->
  <div class="container-fluid main-content">

  <div class="container container-main">
    <!-- BreadCrumbs 
    =========== -->
    
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
      
      $query_a=$db->query("SELECT * FROM bolnica WHERE bolnica_username ='$email'");
      if( mysqli_num_rows($query_a) >0){
      $adata=mysqli_fetch_array($query_a);
      
         //if(password_verify($password, $adata['bolnica_password'])){
         
           ?>
          <script language="javascript" type="text/javascript">
          alert("Успешно се логиравте.");
          window.location.href='bhome.html';
          </script>
          <?php
         // $_SESSION["id_krvodaritel"] = $adata['id_krvodaritel'];
          //$_SESSION["ime"] = $adata['ime'];
         //   header("location:plasma.php");
         
      }
    //  else {
         ?>
             <!--<script language="javascript" type="text/javascript">
               alert("Грешна емаил адреса или лозинка");
                  window.location.href='blogin.php';
                  </script> 
    -->
            <?php
      }

      
?>
  </div>  


    

    <!-- Footer Area  -->
    <footer class="mainfooter" role="contentinfo">
                    <div class="footer-middle">
                    <div class="container">

                        <div class="col-xs-3">
                            <h4>Следи не</h4>
                            <ul class="social-network social-circle">
                              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>   
                               <li><a href="#" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 copy">
                            <p class="text-center">&copy; Авторски права 2020   E-крводарител.   Костадинка Стојанова</p>
                        </div>
                    </div>
                
                        </div>
                        </div>
                        </footer>




  </body>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>


