<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = 'admin';
$db = 'check_in';

$con = mysqli_connect($servidor, $usuario, $pass, $db);

if($con){
  echo '<h1>Si sirve esta madre.</h1>';
} else {
  echo '<h1>No sirve esta madre.</h1>';
}
?>
