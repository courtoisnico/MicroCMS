<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 06/06/2016
 * Time: 16:30
 */
// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'microcms',
    'user'     => 'microcms_user',
    'password' => 'secret',
);

// define log level
$app['monolog.level'] = 'WARNING';