<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Dir extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'dir';
      $this->attribute_value = $value;

  }


}