

<?php 

include_once 'funkcije.php';

session_start();

if($_SERVER["SERVER_NAME"]==="localhost"){
	$putanjaAPP = "/1_FERITIJADA/" ;
}else{
	$putanjaAPP = "/1_FERITIJADA/";
}

$appID="FERITIJADA";
$dev=true;

 ?>