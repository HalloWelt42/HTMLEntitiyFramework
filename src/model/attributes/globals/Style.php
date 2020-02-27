<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Style extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'style';
      $this->attribute_value = $value;

  }


}