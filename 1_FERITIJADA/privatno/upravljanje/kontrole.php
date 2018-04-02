<?php

if(trim($_POST["datumpocetka"])===""){
		$greska["datumpocetka"]="Datum obavezno";
	}
	
if(trim($_POST["mjesto"])===""){
		$greska["mjesto"]="Lokacija obavezno";
	}
	
if(trim($_POST["trajanje"])===""){
		$greska["trajanje"]="Trajanje utakmice obavezno";
	}

if(trim($_POST["trajanje"])>"90"){
		$greska["trajanje"]="Trajanje utakmice preveliko";
	}

if(trim($_POST["trajanje"])<"15"){
		$greska["trajanje"]="Trajanje utakmice premalo";
	}

if(trim($_POST["domacin"])===($_POST["gost"])){
		$greska["domacin"]="Fakultet pogrešan";
			$greska["gost"]="Fakultet pogrešan";
	}