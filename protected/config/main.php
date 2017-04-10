<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Brainy Shapes',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
                'application.modules.*',
                'application.modules.smtpmail.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
                
                
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            
                'EMailTemplate'=>array(
                     'class'=>'application.extensions.EMailTemplate.EMailTemplate',
                ),
            
                'Smtpmail'=>array(
                    'class'=>'application.modules.smtpmail.PHPMailer',
                    'Host'=>"mail.azigazikincs.hu",
                    'Username'=>'csiki.istvan@azigazikincs.hu',
                    'Password'=>'Kaktusz1228',
                    'Mailer'=>'smtp',
                    'Port'=>465,
                    'SMTPAuth'=>true, 
                    'SMTPSecure' => 'ssl',
                ),
                
                'Paypal' => array(
			'class'=>'application.components.Paypal',
			'apiUsername' => 'csiki.istvan_api1.gmail.com',
			'apiPassword' => 'K4PNVHRSLK9YXYZS',
			'apiSignature' => 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAZt0TcTfcwntneqPRux9uZGa7DSd',
			'apiLive' => false,
			
			'returnUrl' => 'paypal/confirm/', //regardless of url management component
			'cancelUrl' => 'paypal/cancel/', //regardless of url management component
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
		'db'=>require(dirname(__FILE__).'/database.php'),

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
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
        'language'=>'hu',
);
