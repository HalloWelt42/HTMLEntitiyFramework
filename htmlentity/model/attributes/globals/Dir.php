<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Dir extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'dir';
      $this->attribute_value = $value;

  }


}