<?php

$app = [];


App::bind('config', require 'config.php');

/*$app['config'] = require 'config.php';

require 'core/Router.php'; //no need when composer is installed

require 'core/Request.php'; //no need when composer is installed 

require 'core/database/Connection.php'; //no need when composer is installed

require 'core/database/QueryBuilder.php'; //no need when composer is installed*/



App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));