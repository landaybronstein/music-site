<?php

namespace Core\Middleware;

use Core\Router;
use Core\Session;

class Admin
{
  public static function handle()
  {
    if(!Session::has("admin") ?? false) {
      Router::redirect("/admin/login");
    }
  }
}