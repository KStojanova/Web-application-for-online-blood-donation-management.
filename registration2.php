<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title> Регистрација  Е-крводарител</title>
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
<!--navbar-->
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
                        <!--navbar area ends-->


<!--main area-->
                        <div class="container container-main">
                          <!-- BreadCrumbs 
                          =========== -->
                          <ol class="breadcrumb">
                            <li><a href="index.html">Почетна</a></li>
                            <li class="active">Регистрација</li>
                          </ol>
                          <!-- BreadCrumbs End
                          =========== -->
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                                <h1>Регистрирај се за крводарител</h1>
                                <p><i>Сите полиња се задолжителни</i></p>
                                <form style="width:40%;" action="" method="post">
                                  <div class="form-group">
                                    <label for="ime">Име</label>
                                    <input type="text" class="form-control" name="ime" placeholder="Напишете го вашето име" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                    <label for="prezime">Презиме</label>
                                    <input type="text" class="form-control" name="prezime" placeholder="Напишете го вашето презиме" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email адреса</label>
                                    <input type="email" class="form-control" name="email" placeholder="Внеси email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"oninvalid="this.setCustomValidity('Email адресата треба да биде во фомат someone@email.com')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
					    <label for="telefon">Телефонски број</label>
					    <input type="tel" class="form-control" name="telefon" placeholder="Внеси телефоноски број)">
					  </div>
					  <div class="form-group">
                      <label for="grad">Избери град</label>


<select name="grad" id="grad">
  <option value="Берово">Берово</option>
  <option value="Битола">Битола</option>
  <option value="Богданци">Богданци</option>
  <option value="Валандово">Валандово</option>
  <option value="Велес">Велес</option>
  <option value="Виница">Виница</option>
  <option value="Гевгелија">Гевгелија</option>
  <option value="Гостивар">Гостивар</option>  
  <option value="Дебар">Дебар</option>
  <option value="Делчево">Делчево</option>
  <option value="Демир Капија">Демир Капија</option>
  <option value="Демир Хисар">Демир Хисар</option>
  <option value="Кавадарци">Кавадарци</option>
  <option value="Кичево">Кичево</option>
  <option value="Кочани">Кочани</option>
  <option value="Кратово">Кратово</option>
  <option value="Крива Паланка">Крива Паланка</option>
  <option value="Крушево">Крушево </option>
  <option value="Куманово">Куманово</option>
  <option value="Македонски брод">Македонски брод</option>
  <option value="Македонска Каменица">Македонска Каменица</option>
  <option value="Неготино">Неготивно</option>
  <option value="Охрид">Охрид</option>
  <option value="Пехчево">Пехчево</option>
  <option value="Прилеп">Прилеп</option>
  <option value="Пробиштип">Пробиштип</option>
  <option value="Радовиш">Радовиш</option>
  <option value="Ресен">Ресен</option>
  <option value="Свети Николе">Свети Николе</option>
  <option value="Скопје">Скопје</option>
  <option value="Струга">Струга</option>
  <option value="Струмица">Струмица</option>
  <option value="Тетово">Тетово</option>
  <option value="Штип">Штип</option>

</select>
</div>
					  <div class="form-group">
                      <label for="krvna_grupa">Избери крвна група</label>

<select name="krvna_grupa" id="krvna_grupa">
  <option value="A+">A+</option>
  <option value="O+">O+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="A-">A-</option>
  <option value="O-">O-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>





</select>
</div>

                                  <div class="form-group">
                                    <label for="password">Лозинка</label>
                                    <input type="password" class="form-control" name="password" placeholder="Лозинка" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="checkbox">
					    <label>
					      <input type="checkbox" name="visiblephone"> Teлефонски број видлив за други
					    </label>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox" name="emailpref"> Прати ми емаил во случај на итност 
					    </label>
					  </div>
					
                                  <button type="submit" class="btn btn-success">Регистрирај се</button>
                                  <input type="reset" class="btn btn-danger" value="Ресетирај">
                                  

                                
                            </div>
                          </div>
                        </div>
                        
                        <?php
//if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email']) && isset($_POST['telefon'])&& isset($_POST['grad'])&& isset($_POST['krvna_grupa']) && isset($_POST['password'])) {

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $telefon=$_POST['telefon'];
    $grad=$_POST['grad'];
    $krvna_grupa=$_POST['krvna_grupa'];
    $password = ($_POST['password']);
    $hash = password_hash($password, PASSWORD_BCRYPT);
 //}
    $db = mysqli_connect('localhost', 'root', '', 'blood');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  mysqli_set_charset($db,'utf8');
  if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email']) && isset($_POST['telefon'])&& isset($_POST['grad'])&& isset($_POST['krvna_grupa']) && isset($_POST['password'])) {
  }
  $query_krvodaritel = "INSERT INTO krvodaritel (ime, prezime, email, telefon,grad, krvna_grupa, password) 
  VALUES ('$ime', '$prezime', '$email', '$telefon', '$grad','$krvna_grupa','$hash')";
  $result = $db->query($query_krvodaritel);
  if ($result=== TRUE) {
    ?>
    
  <script language="javascript" type="text/javascript">
alert("Податоците се успешно внесени во базата.");
}
window.location.href='index.html';

</script>
 <?php
} else {
    echo "Error: ". $db->error;
}
    
$db->close();

?>
</form>





                        <!--footer areа-->
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
</html>


