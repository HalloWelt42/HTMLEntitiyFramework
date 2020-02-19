<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class ClassType extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'class';
      $this->attribute_value = $value;

  }


}