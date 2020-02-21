<?php


namespace htmlentity\model\attributes\globals;


use htmlentity\model\HTMLAttribute;

class Aria extends HTMLAttribute
{
  public function __construct($name, $value)
  {
    $this->attribute_name = 'aria-' . $name;
    $this->attribute_value = $value;
  }
}