<?php

namespace Core;

class ValidationException extends \Exception
{
  public readonly array $errors;

  public static function throw($errors)
  {
    $instance = new self;

    $instance->errors = $errors;

    throw $instance;
  }
}