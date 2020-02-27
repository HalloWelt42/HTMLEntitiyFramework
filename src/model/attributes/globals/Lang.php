<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Lang extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'lang';
      $this->attribute_value = $value;

  }


}