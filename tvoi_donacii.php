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
                    <a href="index.html" class="navbar-brand"><img src="img/logo.png"></a>

                    <!--<li><a href="termini.php">Закажи термин</a></li> -->
                 <li>   <a href="termini.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-calendar"></span>Закажи термин</a> </li>

                    <li><a href="tvoi_donacii.php">Види твои донации</a></li>

                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Дарување крв
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="prebaruvaj.php">Пребарувај крв</a></li>
                                <li><a href="search.php">Преглед низ банка за крв</a></li>
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
                        <li><a href="contact.php">Настани</a></li>
                    
                                <li>
         <a href="logout.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-log-out"></span> Одјави се</a>

                                    
                                </li>  
              
                        
                        </ul>
                    
                        </div>
                        </div>
                        </div>
                        <?php
if($_SESSION["ime"]) {
?>
<p style="color:red;">Добредојде  <?php echo $_SESSION["ime"]; ?>. 
<?php
}else echo "<h1>Please login first .</h1>";
?>    </p>       



<?php
$servername = "localhost";
$database = "blood";
$username = "root";
$password = "";
//$ime=$_POST['ime'];
$prezime="";
//$telefon=$_POST['telefon'];
//$data=$_POST['data'];
//$cas=$_POST['cas'];
 //Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
//mysqli_set_charset($database,'utf8');

$query = "select 'ime','prezime','telefon','data,'cas' from viewtermini where ime = '{$_SESSION[ "ime" ]}' AND id_krvodaritel= '{$_SESSION[ "id_krvodaritel" ]}'";
//$adata=mysqli_fetch_array($query);
echo $_SESSION[ "ime" ]; 

echo $_SESSION[ "id_krvodaritel" ];
$prezime=$_SESSION['prezime'];
echo $prezime;
?>
   <!-- Footer Area  -->
   <footer class="mainfooter" role="contentinfo">
                    <div class="footer-middle">
                    <div class="container">

                        <div class="col-xs-3">
                            <h6>Следи не</h6>
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
<script src="js/javascript.js"></script>
</body>
</html>