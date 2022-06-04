<?php
try{
	 $access = new PDO( "mysql:host=localhost;dbname=test_graines;charset=utf8","root","root" );
	 $access->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(exception $e)
{
	 die('Erreur : ' . $e->getMessage());
}



?>