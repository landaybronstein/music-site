<?php

return [
  "database_config" => [
    "host" => getenv("MYSQL_HOST"),
    "port" => getenv("MYSQL_PORT"),
    "dbname" => getenv("MYSQL_DATABASE"),
  ],
  "database_user" => getenv("MYSQL_USER"),
  "database_password" => getenv("MYSQL_PASSWORD")
];
