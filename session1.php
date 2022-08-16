<?php

session_start();

$_SESSION['userName'] = "Mahmudunnabi";

$uName = "The Rock";




echo $_SESSION['userName'];

echo "<br>";
echo $uName;


?>