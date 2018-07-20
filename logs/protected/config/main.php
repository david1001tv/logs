<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('@backups', realpath('C:/Users/Serge/backups'));

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Логирование проектов',
	'defaultController'=>'projects',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.SDatabaseDumper',
		'ext.projectsConfigList',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1111',
		),
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		'db'=>array(
			'class'=> 'CDbConnection',
			'connectionString' => 'mysql:host=db4free.net;dbname=test_logs',
			'emulatePrepare' => true,
			'username' => 'david_root',
			'password' => '99999999',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),

		'proj'=>array(
			'class' => 'ext.projectsConfigList',
			'projects' => array(
				1 => 'mysql:host=db4free.net;dbname=test_logs',
				2 => 'mysql:host=db4free.net;dbname=test_logs_2',
			),
			'users' => array(
				1 => 'david_root',
				2 => 'david_logs',
			),
			'passwords' => array(
				1 => '99999999',
				2 => '11111111',
			),
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
