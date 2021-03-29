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
                    <li><a href="pobaraj.php">Побарај крв</a></li>
                    <li>
                        <a href="logout.php"  data-target="#LoginModal">  <span class="glyphicon glyphicon-log-out"></span> Одјави се</a>
               
                                                   
                                               </li>  
                         <!--<li>
                                    <a href="registration.html"  data-target="#SignUpModal" >
                                        <span class="glyphicon glyphicon-user"></span> Регистрација
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php"  data-target="#LoginModal">
                                        <span class="glyphicon glyphicon-log-in"></span> Логирај се
                                    </a>
                                </li>   -->
                                
                        
                        </ul>
                    
                        </div>
                        </div>
                        </div>
                        <div class="container container-main">
                         
                         <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               
                               <form style="width:40%;" action="" method="post">

                               <div class="form-group">
               <label for="krvna_grupa">Избери крвна група</label> <br>

<select name="krvna_grupa" id="krvna_grupa">
<option value='A+'>A+</option>
<option value='O+'>O+</option>
<option value='B+'>B+</option>
<option value='AB+'>AB+</option>
<option value='A-'>A-</option>
<option value='O-'>O-</option>
<option value='B-'>B-</option>
<option value='AB-'>AB-</option>





</select>
</div>

                                 <div class="form-group">
                                   <label for="data">Дата до кога е потребна крв</label>
                                   <input type="date" class="form-control" name="data"  required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
                                   oninput="setCustomValidity('')">
                                 </div>
                                 <div class="form-group">
                                   <label for="kolicina">Количина на крв која е потребна</label>
                                   <input type="text" class="form-control" name="kolicina" placeholder=""required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
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
               <label for="zabeleska">Забелешка</label>
               <input type="text" class="form-control" name="zabeleska" placeholder="Внеси забелешка" required oninvalid="this.setCustomValidity('Ова поле е задолжително')"
               oninput="setCustomValidity('')">
             </div>
             

                                 
                                 <button type="submit" class="btn btn-success">Испрати барање</button>
                                 <input type="reset" class="btn btn-danger" value="Ресетирај">
                                 

                               </form>
                           </div>
                         </div>
                       </div>
                       <?php
if(isset($_POST['krvna_grupa']) && isset($_POST['data']) && isset($_POST['kolicina'])  && isset($_POST['grad']) && isset($_POST['telefon']) && isset($_POST['zabeleska'])) {
    $krvna_grupa=$_POST['krvna_grupa'];
    $data = $_POST['data'];
    $kolicina = $_POST['kolicina'];
    $grad=$_POST['grad'];
    $telefon=$_POST['telefon'];
    $zabeleska=$_POST['zabeleska'];
    
    $db = mysqli_connect('localhost', 'root', '', 'blood');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  mysqli_set_charset($db,'utf8');
  $query_baranje="INSERT INTO baranja(krvna_grupa,data,kolicina,lokacija,telefon,zabeleska) Values ('$krvna_grupa','$data','$kolicina','$grad','$telefon','$zabeleska')";
  $result = $db->query($query_baranje);
  if ($result=== TRUE) {
    ?>
  <script language="javascript" type="text/javascript">
alert("Успешно е испратено барањето.");
window.location.href='bhome.html';
</script>
 <?php
} else {
    echo "Error: ". $db->error;
}
      
$db->close();
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