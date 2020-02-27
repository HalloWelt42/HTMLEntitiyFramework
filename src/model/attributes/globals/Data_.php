<?php


namespace HEF\model\attributes\globals;


use HEF\model\HTMLAttribute;

class Data_ extends HTMLAttribute
{
  public function __construct($name, $value)
  {
    $this -> attribute_name = 'data-' . $name;
    $this -> attribute_value = $value;

  }
}