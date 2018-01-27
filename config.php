<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/akioSalgados/");
	$config['dbname']='salgadosakio_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		//define("BASE_URL", "http://salgadosakio.com.br/akioSalgados");
        $config['dbname']='salgadoakio_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}


