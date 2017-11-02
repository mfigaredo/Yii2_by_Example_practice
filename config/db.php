<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=my_database',
    'username' => 'root',
    'password' => 'mysql',
    'charset' => 'utf8',
    'on afterOpen' => function($event) {
    	$event->sender->createCommand("SET time_zone = '+00:00'")->execute();
    }
];
