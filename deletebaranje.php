<?php

$con = mysqli_connect('localhost','root','','blood');
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$id_krvodaritel=$_GET['id_krvodaritel'];
//$id_krvodaritel = $_POST['id_krvodaritel']; // $id is now defined

// or assuming your column is indeed an int
 $id_baranje = (int)$_GET['id_baranje'];

mysqli_query($con,"DELETE FROM baranja WHERE id_baranje='".$id_baranje."'");
mysqli_close($con);
header("Location:ahome.html");
?> 