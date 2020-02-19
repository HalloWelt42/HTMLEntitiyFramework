<?php

namespace htmlentity\model\attributes\globals;

use htmlentity\model\HTMLAttribute;

class Contenteditable extends HTMLAttribute
{

  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'contenteditable';
      $this->attribute_value = $value;

  }


}