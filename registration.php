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
      <?php
include_once "navbar.html"; 
?>
<!--mainarea-->
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
    }
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
alert("Успешно се регистриравте.");
window.location.href='login.php';
</script>
 <?php
} else {
    echo "Error: ". $db->error;
}
      }
$db->close();
?>



<!--main area ends-->

						<!--footer areа-->
                        <?php
include_once "footer.html"; 
?>

</body>
<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</html>


