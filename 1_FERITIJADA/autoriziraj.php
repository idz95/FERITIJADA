<?php

if(!isset($_POST["email"]) || !isset($_POST["lozinka"])){
	exit;
}

include_once 'konfiguracija.php';
$izraz=$veza->prepare("select * from operater where email=:email and lozinka=md5(:lozinka)");
$izraz->execute($_POST);
$o = $izraz->fetch(PDO::FETCH_OBJ);


if($o==null){
	header("location: login.php?neuspjelo&email=" . $_POST["email"]);
	exit;
}


$_SESSION[$appID."autoriziran"]=$o;
if($_SESSION[$appID."autoriziran"]->uloga==="admin"){
	header("location: privatno/nadzornaPloca.php"); }
else {
	header("location: privatno/profil/profil.php"); }
	