<?php
$usuario1="admin";
$usuario2="grupo";
$contraseña1="123";
$contraseña2="2121";
$users=$_REQUEST["user"];
$pas=$_REQUEST["pass"];
if($users==$usuario1&&$pas==$contraseña1){
	Include("newcode.php");
}
if($users==$usuario2&&$pas==$contraseña2){
Include("main.php");
}
if($users!=$usuario2&&$pas!=$contraseña2&&$users!=$usuario1&&$pas!=$contraseña1){
	Include("index.php");
}
 if($users==$usuario1&&$pas!=$contraseña1 ){
	Include("index.php");
}
if($users==$usuario2&&$pas!=$contraseña2 ){
	Include("index.php");
}
 if($users!=$usuario1&&$pas==$contraseña1 ){
	Include("index.php");
}
if($users!=$usuario2&&$pas==$contraseña2 ){
	Include("index.php");
}
?>