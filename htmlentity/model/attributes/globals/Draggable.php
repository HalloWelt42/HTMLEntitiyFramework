<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Draggable extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'draggable';
      $this->attribute_value = $value;

  }


}