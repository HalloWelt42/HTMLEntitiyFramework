<?php

namespace HEF\model\attributes\globals;

use HEF\model\HTMLAttribute;

class Draggable extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'draggable';
      $this->attribute_value = $value;

  }


}