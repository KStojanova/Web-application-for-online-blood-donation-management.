<?php
session_start();
unset($_SESSION["id_krvodaritel"]);
unset($_SESSION["ime"]);
header("Location:index.html");
?>