<?php

use Core\Container;
use Core\Database;  
use Core\App;

$container = new Container;

$container->bind("Core\Database", function() {
  $config = require App::base_path("config.php");
  return new Database($config["database"], "user", "root");
});

App::setContainer($container);