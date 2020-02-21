<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Target extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'target';
      $this->attribute_value = $value;

  }


}