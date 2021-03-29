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

                        <div class="container container-main">
                          <!-- BreadCrumbs 
                          =========== -->
                          <ol class="breadcrumb">
                            <li><a href="index.html">Почетна</a></li>
                            <li class="active">Пребарувај крв</li>
                          </ol>
                          <!-- BreadCrumbs End
                          =========== -->
                          
                                <h1>Пребарувај крв</h1>
                                </br>
</br>

                                
                                <form  action="rez_preb.php" method="post">

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
</br>
</br>


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
</br>
</br>

  <button type="submit" class="btn btn-success">Пребарувај</button>
  </div>

  </form>

                      

                    




  
   <!-- Footer Area  -->
   <?php
    include_once "footer.html";
    ?>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>