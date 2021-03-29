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

                    <div class="container container-main">
                         
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                                <form style="width:40%;" action="" method="post">
                                  <div class="form-group">
                                    <label for="ime">Име</label>
                                    <input type="text" class="form-control" name="ime" placeholder="Напиши име" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                    <label for="prezime">Презиме</label>
                                    <input type="text" class="form-control" name="prezime" placeholder="Напиши презиме" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email адреса</label>
                                    <input type="email" class="form-control" name="email" placeholder="Внеси email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"oninvalid="this.setCustomValidity('Email адресата треба да биде во фомат someone@email.com')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  <div class="form-group">
                                    <label for="grad">Избери град</label> <br>
              
              
              <select name="grad" id="grad" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
              oninput="setCustomValidity('')">
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
                <label for="telefon">Телефонски број</label>
                <input type="text" class="form-control" name="telefon" placeholder="Внеси телефоноски број" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                oninput="setCustomValidity('')">
              </div>
              <div class="form-group">
                <label for="tezina">Тежина</label>
                <input type="text" class="form-control" name="tezina" placeholder="Внеси тежина во килограми" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                oninput="setCustomValidity('')">
              </div>
              <div class="form-group">
                <label for="visina">Висина</label>
                <input type="text" class="form-control" name="visina" placeholder="Внеси висина во центиметри" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                oninput="setCustomValidity('')">
              </div>
              <div class="form-group">
                <label for="pol">Пол</label> <br>
                <input type="radio" name="pol" value="машко">   машко 
                <input type="radio" name="pol" value="женско">   женско <br>
              </div>
              <div class="form-group">
                <label for="krvna_grupa">Избери крвна група</label> <br>

<select name="krvna_grupa" id="krvna_grupa">
<option value='1'>A+</option>
<option value='3'>O+</option>
<option value='2'>B+</option>
<option value='4'>AB+</option>
<option value='5'>A-</option>
<option value='7'>O-</option>
<option value='6'>B-</option>
<option value='8'>AB-</option>





</select>
</div>
    
                                
                                  <div class="form-group">
                                    <label for="password">Лозинка</label>
                                    <input type="password" class="form-control" name="password" placeholder="Лозинка" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                    oninput="setCustomValidity('')">
                                  </div>
                                  
                                  <button type="submit" class="btn btn-success">Додај донор</button>
                                  <input type="reset" class="btn btn-danger" value="Ресетирај">
                                  

                                </form>
                            </div>
                          </div>
                        </div>


                        <?php
if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['email'])  && isset($_POST['grad']) && isset($_POST['telefon']) && isset($_POST['tezina']) && isset($_POST['visina']) && isset($_POST['pol'])  && isset($_POST['krvna_grupa']) && isset($_POST['password'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $grad=$_POST['grad'];
    $telefon=$_POST['telefon'];
    $tezina=$_POST['tezina'];
    $visina=$_POST['visina'];
    $pol=$_POST['pol'];
    $krvna_grupa=$_POST['krvna_grupa'];
    $password = ($_POST['password']);
    $hash = password_hash($password, PASSWORD_BCRYPT);
   
    $db = mysqli_connect('localhost', 'root', '', 'blood');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  	$sql_e = "SELECT * FROM krvodaritel WHERE email='$email'";
  	$res_e = mysqli_query($db, $sql_e);

  	if(mysqli_num_rows($res_e) > 0){
     ?>
 <script language="javascript" type="text/javascript">
alert("Внесениот емаил веќе е регистриран!");
window.location.href='registration.html';
</script>
 <?php
  	}else{
  mysqli_set_charset($db,'utf8');
  $query_korisnik="INSERT INTO krvodaritel(ime,prezime,email,grad,telefon,tezina,visina,pol,id_grupa,password) Values ('$ime','$prezime','$email','$grad','$telefon','$tezina','$visina','$pol','$krvna_grupa','$hash')";
  $result = $db->query($query_korisnik);
  if ($result=== TRUE) {
    ?>
  <script language="javascript" type="text/javascript">
alert("Успешно е регистриран нов корисник.");
window.location.href='ahome.html';
</script>
 <?php
} else {
    echo "Error: ". $db->error;
}
      }
    
$db->close();
    }
?>





                    </body>
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