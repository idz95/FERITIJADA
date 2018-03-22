<?php

if(trim($_POST["datumpocetka"])===""){
		$greska["datumpocetka"]="Datum obavezno";
	}
	
if(trim($_POST["mjesto"])===""){
		$greska["mjesto"]="Lokacija obavezno";
	}
	