<?php

if(!isset($_POST["email"]) || !isset($_POST["lozinka"])){
	exit;
}
//ovdje će doći spajanje na bazu
if($_POST["email"]==="sudac@hns.hr" && $_POST["lozinka"]==="sudac"){
	session_start();
	$_SESSION["autoriziran"]="SUDAC HR";
	header("location: privatno/nadzornaPloca.php");
}else{
	header("location: prijava.php?neuspjelo&email=" . $_POST["email"]);
}
