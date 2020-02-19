<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Tabindex extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'tabindex';
      $this->attribute_value = $value;

  }


}