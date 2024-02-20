<?php

use Core\Container;
use Core\Database;
use Core\App;

$config = require App::base_path("config.php");
$container = new Container;

$container->bind(
  "Core\Database",
  fn () => new Database($config["database_config"], $config["database_user"], $config["database_password"])
);

App::setContainer($container);
