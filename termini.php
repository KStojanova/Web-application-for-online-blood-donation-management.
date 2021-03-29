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

                    <li><a href="termini.php">Закажи термин</a></li>

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

 <br>
 <br>
 <br>
 
<form  action=""method="post">
<div class="termini" id="termini">

<label for="data">Дата:</label>
<br>
<input type="date" id="data" name="data"
       value="" >
       <br>
       <br>
<br>
<label for="cas">Избери време:</label>
<br>

<input type="time" id="cas" name="cas"
       min="09:00" max="16:00" required>

<small>Oд 9am до 4pm</small>
<br>
<br>

<button type="submit" class="btn btn-success">Закажи</button>

</form>
</div>

<?php
$servername = "localhost";
$database = "blood";
$username = "root";
$password = "";
if(isset($_POST['data']) && isset($_POST['cas'])){
$data=$_POST['data'];
$cas=$_POST['cas'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
mysqli_set_charset($db,'utf8');
$sql = "INSERT INTO termini (id_krvodaritel,data, cas) VALUES ('{$_SESSION['id_krvodaritel']}','$data', '$cas')";
$adata=mysqli_fetch_array($sql);
$_SESSION['id_krvodaritel']=$adata['id_krvodaritel'];

if (mysqli_query($conn, $sql)) {
    ?>
    <script language="javascript" type="text/javascript">
  alert("Успешно закажавте.");
  window.location.href='home.php';
  </script>
   <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
 <!-- 
 mysqli_set_charset($db,'utf8');
 $adata=mysqli_fetch_array($query_termin);
 $_SESSION["id_krvodaritel"] = $adata['id_krvodaritel'];
 $query_termin="INSERT INTO termini(id_krvodaritel,data,cas) Values ('{$_SESSION['id_krvodaritel']}', $data, $cas)";
 $result = $db->query($query_termin);
 


 if ($result=== TRUE) {
   ?>
 <script language="javascript" type="text/javascript">
alert("Успешно закажавте термин.");
window.location.href='home.php';
</script>
 

-->

  <!-- Footer Area  -->
  <?php
include_once "footer.html"; 
?>





  </body>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/javascript.js"></script>
<script src="js/kalendar.js"></script>
</body>
</html>