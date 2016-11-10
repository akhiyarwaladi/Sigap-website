<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=sipadat.agri.web.id;dbname=akhiyar_sipadat',
	'emulatePrepare' => true,
	'username' => 'akhiyar_sipadat',
	'password' => 'akhiyar_sipadat',
	'charset' => 'utf8',
	
);