<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Style extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'style';
      $this->attribute_value = $value;

  }


}