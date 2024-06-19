<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
			'allowAutoLogin'=>true
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
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'patients'=>'patient/index',
				'patient/<id:\d+>'=>'patient/view',
				'patient/create'=>'patient/create',
				'patient/update/<id:\d+>'=>'patient/update',
				'patient/delete/<id:\d+>'=>'patient/delete',
				
				'appointments'=>'appointment/index',
        		'appointment/<id:\d+>'=>'appointment/view',
        		'appointment/create'=>'appointment/create',
        		'appointment/update/<id:\d+>'=>'appointment/update',
        		'appointment/delete/<id:\d+>'=>'appointment/delete',

				'obat'=>'obat/index',
        		'obat/<id:\d+>'=>'obat/view',
        		'obat/create'=>'obat/create',
        		'obat/update/<id:\d+>'=>'obat/update',
        		'obat/delete/<id:\d+>'=>'obat/delete',

				'pegawai'=>'pegawai/index',
        		'pegawai/<id:\d+>'=>'pegawai/view',
        		'pegawai/create'=>'pegawai/create',
        		'pegawai/update/<id:\d+>'=>'pegawai/update',
        		'pegawai/delete/<id:\d+>'=>'pegawai/delete',
				// other rules...
			),
		),
		
		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

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
