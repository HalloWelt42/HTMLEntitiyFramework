<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class ClassType extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'class';
      $this->attribute_value = $value;

  }


}