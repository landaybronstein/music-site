<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);
$result = $db->query("SELECT * FROM admins LIMIT 1")->find();
$action = $result ? "/admin" : "/admin/login";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = htmlspecialchars(trim($_POST["name"])) ?? "";
  $password = htmlspecialchars(trim($_POST["password"])) ?? "";
  $login = LoginForm::validate(["name" => $name, "password" => $password]);

  // if ($action === "/admin") {
  //   $admin = $db->query("SELECT * FROM admins WHERE name=:name", [
  //     "name" => $name
  //   ])->find();
  //   if ($admin && password_verify($password, $user["password"])) {
  //     Session::put("admin", )
  //   } 
  //   else {
  //     $login->error("password", "Введены некорректные данные!")->throw();
  //   }
  //   } else {
      
  //   }
  // } else {
  // }
}

App::view("admin/login.view.php", ["action" => $action, "errors" => Session::getFlash("errors")]);
