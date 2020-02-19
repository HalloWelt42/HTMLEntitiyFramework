<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Itemprop extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'itemprop';
      $this->attribute_value = $value;

  }


}