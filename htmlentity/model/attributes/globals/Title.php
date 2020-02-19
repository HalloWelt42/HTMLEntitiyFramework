<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Title extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'title';
      $this->attribute_value = $value;

  }


}