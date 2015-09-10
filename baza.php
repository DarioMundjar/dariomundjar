<?php 
/*
	$greska="";
	function spajanjeNaBazu(){
		$server = 'localhost';
		$baza = 'baza_slike';
		$korisnik = 'root';
		$lozinka = '';

		global $greska;
		$veza =  mysql_connect($server,$korisnik,$lozinka);
		if(!$veza){
			 $greska .= "Spajanje na bazu je neuspjelo!";
			 greske($greska);
			exit();
		}
		
		$BP = mysql_select_db($baza, $veza);

		if(!$BP) {
		$greska .= "Greška je: ".mysql_error();
			 greske($greska);
			 exit();
		}
		
		mysql_set_charset('utf8',$veza);
		return $veza;
	}
	function izvrsavanjeUpita($upit){
		global $greska;
		$rezultat = mysql_query($upit);
		if(!$rezultat){
			$greska .= "Greška je: ".mysql_error();
			 greske($greska);
			exit();
			}
		return $rezultat;
	}
	function zatvaranjeVeze($veza){
		mysql_close($veza);
	}
	
	function greske($greska) {
		
		echo $greska;
	}
 */?>

 <?php

$con=mysqli_connect("localhost","root","","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con, "baza_slike");



//mysqli_close($con);
?> 