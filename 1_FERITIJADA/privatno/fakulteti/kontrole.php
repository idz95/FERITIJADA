<?php

if(trim($_POST["naziv"])===""){
		$greska["naziv"]="Naziv obavezno";
	}
	
if(strlen(trim($_POST["naziv"]))>50){
		$greska["naziv"]="Naziv predugačak, smanjite ga ispod 50 znakova";
	}

if(trim($_POST["puni_naziv"])===""){
		$greska["puni_naziv"]="Puni naziv Fakulteta obavezno";
	}
	
if(strlen(trim($_POST["puni_naziv"]))>50){
		$greska["puni_naziv"]="Puni naziv predugačak, smanjite ga ispod 50 znakova";
	}

if(trim($_POST["kontakt"])===""){
		$greska["kontakt"]="Kontakt obavezno";
	}
	
	
if(!isset($_POST["sifra"])){
		$_POST["sifra"]=0;
	}
	$izraz=$veza->prepare("select sifra from fakultet where naziv=:naziv and sifra!=:sifra");
	$izraz->execute(array("naziv"=>$_POST["naziv"], "sifra"=>$_POST["sifra"]));
	$sifra = $izraz->fetchColumn();
	if($sifra>0){
		$greska["naziv"]="Fakultet postoji u bazi, provjeri!";
	}
	
	
	if(trim($_POST["grad"])===""){
		$greska["grad"]="Grad obavezno";
	}
		
	if(trim($_POST["drzava"])===""){
		$greska["drzava"]="Država obavezno";
	}
	