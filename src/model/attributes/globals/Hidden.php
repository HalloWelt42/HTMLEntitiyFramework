<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Hidden extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'hidden';
      $this->attribute_value = $value;

  }


}