<?php


namespace htmlentity\model\attributes\globals;


use htmlentity\model\HTMLAttribute;

class Data extends HTMLAttribute
{
  public function __construct($name, $value)
  {
    $this -> attribute_name = 'data-' . $name;
    $this -> attribute_value = $value;

  }
}