<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Tabindex extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'tabindex';
      $this->attribute_value = $value;

  }


}