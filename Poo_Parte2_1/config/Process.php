<?php

 
include_once('DatabaseProces.php');
$user = $_POST['user_login'];
$mail = $_POST['mail_login'];
$pass = $_POST['pass_login'];



//instanciar el objeto
$users = new DatabaseProcess();
// llamado función de loguin
$users->login($user,$mail,$pass);

$response = $users->login($user,$mail,$pass);

 echo $response; 

 if ($response==="verdadero") {
    header("Location: ../form.php"); 
 }

 else{
    echo '<script language="javascript">alert("Error En Datos");</script>';
 }

//print_r($response); 

/* $users->getAll();

$usu = $users->getAll();

print_r($usu); */


