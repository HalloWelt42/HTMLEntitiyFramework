<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Novalidate extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'novalidate';
      $this->attribute_value = $value;

  }


}