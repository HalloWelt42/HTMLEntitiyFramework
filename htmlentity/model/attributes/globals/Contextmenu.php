<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Contextmenu extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'contextmenu';
      $this->attribute_value = $value;

  }


}