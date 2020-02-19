<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Id extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'id';
      $this->attribute_value = $value;

  }


}