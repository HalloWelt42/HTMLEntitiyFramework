<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Itemprop extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'itemprop';
      $this->attribute_value = $value;

  }


}