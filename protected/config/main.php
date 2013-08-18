<?php
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Luxgen Dealers',
    'language' => 'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',

        // подключение путей из модулей
        'application.modules.admin.AdminModule',
        'application.modules.admin.controllers.*',
        'application.modules.admin.models.*',
        'application.modules.admin.components.*',
	),

	'modules'=>array(
        'admin' => array(
            'class' => 'application.modules.admin.AdminModule',
            'defaultController' => 'default',
//            'layoutPath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'../modules/admin/views/layouts',
//            'layout' => 'admin'
        ),
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

//    'defaultController' => 'SiteController',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=luxgen_dealer',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'yfh11rjv56fy',
			'charset' => 'utf8',
		),

        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'skybardpf@artektiv.ru',
	),
);