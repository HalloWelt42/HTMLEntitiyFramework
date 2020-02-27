<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Contextmenu extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'contextmenu';
      $this->attribute_value = $value;

  }


}