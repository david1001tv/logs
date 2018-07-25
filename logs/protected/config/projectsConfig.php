<?php

return array(
    'project1' => array(
        'class' => 'projectsConfigList',
		'connectionString' => 'mysql:host=db4free.net;dbname=test_logs',
		'user' => 'david_root',
        'password' => '99999999',
        'ftp' => array(
			'class'=>'EFtpComponent',
			'host'=>'185.27.134.11',
			'port'=>21,
			'username'=>'epiz_22131503',
			'password'=>'wader787898',
			'ssl'=>false,
			'timeout'=>90,
			'autoConnect'=>true,
	  	),
    ),

    'project2' => array(
        'class' => 'projectsConfigList',
		'connectionString' => 'mysql:host=db4free.net;dbname=test_logs_2',
		'user' => 'david_logs',
        'password' => '11111111',
        'ftp' => array(
			'class'=>'EFtpComponent',
			'host'=>'185.27.134.11',
			'port'=>21,
			'username'=>'epiz_22131503',
			'password'=>'wader787898',
			'ssl'=>false,
			'timeout'=>90,
			'autoConnect'=>true,
	  	),
    ),
);