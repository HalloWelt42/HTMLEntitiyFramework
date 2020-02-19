<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Slot extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'slot';
      $this->attribute_value = $value;

  }


}