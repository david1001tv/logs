<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=logproj.000webhostapp.com;dbname=id6529620_logs',
	'emulatePrepare' => true,
	'username' => 'id6529620_root',
	'password' => '99999999',
	'charset' => 'utf8',
	'class'=> 'CDbConnection',
	//'tablePrefix' => 'id6529620',
);