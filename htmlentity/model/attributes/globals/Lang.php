<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Lang extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'lang';
      $this->attribute_value = $value;

  }


}