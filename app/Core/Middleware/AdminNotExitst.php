<?php

namespace Core\Middleware;

use Core\App;
use Core\Database;
use Core\Router;

class AdminNotExist
{
  public static function handle()
  {
    $db = App::resolve(Database::class);
    $result = $db->query("SELECT * FROM admins LIMIT 1")->find();
    if($result) {
      Router::redirect("/admin/login");
    }
  }
}