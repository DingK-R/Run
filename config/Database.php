<?php
return array(
	'default' => 'mysql',
	'connections' => array(
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'run',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			),
		),
	'redis' => array(
			'default' => array(
				'host'     => '127.0.0.1',
				'port'     => 6379,
				'database' => 0,
			),
		)
	);