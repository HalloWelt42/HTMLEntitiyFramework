<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Spellcheck extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'spellcheck';
      $this->attribute_value = $value;

  }


}