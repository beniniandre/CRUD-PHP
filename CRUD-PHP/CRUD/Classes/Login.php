<?php

require './Login.class.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == null || $password == null) {
    include ("../LgErro.php");
} else {
    $l = new Login();
    $log = $l->Logar($email, $password);
    if ((int) $log == 1) {
        include("../LgIndex.php");
    } else {
        include ("../LgErro.php");
    }
}
?>
