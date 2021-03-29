<html>
    <head>
</head>
<body>
    <form action="" method="post">
<input  name="username" type="text" class="form-control" required>
<input  name="password" type="password" class="form-control" required>
<input type="submit" class="btn btn-primary" value="Регистрирај се" name="register">
</form>
<?php
$db = mysqli_connect('localhost', 'root', '', 'blood');
if (mysqli_connect_errno()) {
 echo "Грешка: Не може да се воспостави конекција со базата.";
 exit;
}
$username = $_POST['username'];
$password = ($_POST['password']);
$hash = password_hash($password, PASSWORD_BCRYPT);

$query_patnik = "INSERT INTO admin( email, password) VALUES ('$username', '$hash')";
$result = $db->query($query_patnik);
?>
</head>
</html>