<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Contenteditable extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'contenteditable';
      $this->attribute_value = $value;

  }


}