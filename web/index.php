<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 01/09/2015
 * Time: 11:26
 */
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

$app->run();